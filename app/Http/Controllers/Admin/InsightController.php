<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreInsightRequest;
use App\Http\Requests\Admin\UpdateInsightRequest;
use App\Models\Insight;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InsightController extends Controller
{
    /**
     * Display a listing of insights with search and category filters.
     */
    public function index(Request $request): View
    {
        $query = Insight::query()->orderByDesc('published_date');

        if ($search = $request->input('q')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('summary', 'like', "%{$search}%")
                    ->orWhere('category', 'like', "%{$search}%");
            });
        }

        if ($category = $request->input('category')) {
            if ($category !== 'all') {
                $query->where('category', $category);
            }
        }

        if ($request->has('featured') && $request->input('featured') !== '') {
            $query->where('is_featured', $request->boolean('featured'));
        }

        $insights = $query->paginate(10)->withQueryString();

        $categories = Insight::select('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return view('admin.insights.index', [
            'insights' => $insights,
            'categories' => $categories,
            'selectedCategory' => $request->input('category'),
            'searchQuery' => $request->input('q'),
            'featuredFilter' => $request->input('featured'),
        ]);
    }

    /**
     * Show the form for creating a new insight.
     */
    public function create(): View
    {
        $categories = Insight::select('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return view('admin.insights.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created insight in storage.
     */
    public function store(StoreInsightRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if (empty($data['read_time'])) {
            $words = str_word_count(strip_tags($data['content']));
            $minutes = max(1, (int) ceil($words / 200));
            $data['read_time'] = "{$minutes} min read";
        }

        $insight = Insight::create($data);

        return redirect()->route('admin.insights.index')
            ->with('success', "Insight \"{$insight->title}\" was successfully published.");
    }

    /**
     * Show the form for editing the specified insight.
     */
    public function edit(Insight $insight): View
    {
        $categories = Insight::select('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return view('admin.insights.edit', [
            'insight' => $insight,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified insight in storage.
     */
    public function update(UpdateInsightRequest $request, Insight $insight): RedirectResponse
    {
        $data = $request->validated();

        if (empty($data['read_time'])) {
            $words = str_word_count(strip_tags($data['content']));
            $minutes = max(1, (int) ceil($words / 200));
            $data['read_time'] = "{$minutes} min read";
        }

        $insight->update($data);

        return redirect()->route('admin.insights.index')
            ->with('success', "Insight \"{$insight->title}\" was successfully updated.");
    }

    /**
     * Remove the specified insight from storage.
     */
    public function destroy(Insight $insight): RedirectResponse
    {
        $title = $insight->title;
        $insight->delete();

        return redirect()->route('admin.insights.index')
            ->with('success', "Insight \"{$title}\" has been deleted.");
    }
}
