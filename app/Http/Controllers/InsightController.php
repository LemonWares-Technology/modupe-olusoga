<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class InsightController extends Controller
{
    /**
     * Display a listing of thought leadership insights.
     */
    public function index(Request $request): View
    {
        $selectedCategory = $request->query('category');

        $query = Insight::query()->orderByDesc('published_date');

        if ($selectedCategory && $selectedCategory !== 'all') {
            $query->where('category', $selectedCategory);
        }

        $insights = $query->paginate(6)->withQueryString();

        $categories = Insight::select('category')
            ->distinct()
            ->pluck('category');

        return view('pages.insights.index', [
            'insights' => $insights,
            'categories' => $categories,
            'selectedCategory' => $selectedCategory,
        ]);
    }

    /**
     * Display a single thought leadership article.
     */
    public function show(string $slug): View
    {
        $insight = Insight::where('slug', $slug)->firstOrFail();

        $relatedInsights = Insight::where('id', '!=', $insight->id)
            ->where('category', $insight->category)
            ->take(2)
            ->get();

        if ($relatedInsights->isEmpty()) {
            $relatedInsights = Insight::where('id', '!=', $insight->id)
                ->latest('published_date')
                ->take(2)
                ->get();
        }

        return view('pages.insights.show', [
            'insight' => $insight,
            'relatedInsights' => $relatedInsights,
        ]);
    }
}
