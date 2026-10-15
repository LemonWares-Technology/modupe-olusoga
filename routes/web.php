<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\InsightController as AdminInsightController;
use App\Http\Controllers\Admin\SubmissionController as AdminSubmissionController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\InsightController;
use App\Http\Controllers\MentorshipController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SpeakingController;
use App\Models\Insight;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

// Main navigation routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/programmes/mentorship', [PageController::class, 'mentorship'])->name('mentorship');
Route::post('/programmes/mentorship/apply', [MentorshipController::class, 'store'])->name('mentorship.apply');

Route::get('/speaking', [PageController::class, 'speaking'])->name('speaking');
Route::post('/speaking/enquire', [SpeakingController::class, 'store'])->name('speaking.enquire');

Route::get('/books/transgenerational-law-firm', [PageController::class, 'book'])->name('book');
Route::post('/books/transgenerational-law-firm/waitlist', [BookController::class, 'storeWaitlist'])->name('book.waitlist');

Route::get('/insights', [InsightController::class, 'index'])->name('insights.index');
Route::get('/insights/{slug}', [InsightController::class, 'show'])->name('insights.show');

Route::get('/leadership-and-impact', [PageController::class, 'impact'])->name('impact');
Route::get('/media-and-podcast', [PageController::class, 'podcast'])->name('podcast');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Interactive actions
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Dynamic XML Sitemap
Route::get('/sitemap.xml', function () {
    $staticRoutes = [
        'home',
        'about',
        'mentorship',
        'speaking',
        'book',
        'insights.index',
        'impact',
        'podcast',
        'contact',
    ];

    $insights = Insight::orderByDesc('published_date')->get();

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    foreach ($staticRoutes as $route) {
        $xml .= '<url>';
        $xml .= '<loc>'.route($route).'</loc>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>'.($route === 'home' ? '1.0' : '0.8').'</priority>';
        $xml .= '</url>';
    }

    foreach ($insights as $insight) {
        $xml .= '<url>';
        $xml .= '<loc>'.route('insights.show', $insight->slug).'</loc>';
        $xml .= '<lastmod>'.$insight->published_date->toDateString().'</lastmod>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.7</priority>';
        $xml .= '</url>';
    }

    $xml .= '</urlset>';

    return Response::make($xml, 200, ['Content-Type' => 'application/xml']);
})->name('sitemap');

// Quick redirect for /login
Route::redirect('/login', '/admin/login')->name('login');

// ==========================================
// Administrative Executive Suite
// ==========================================
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // Protected Executive Operations
    Route::middleware('auth')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

        // Insights & Thought Leadership Management
        Route::resource('insights', AdminInsightController::class)->except(['show']);

        // Submissions & Executive Ledger
        Route::get('/submissions/mentorship', [AdminSubmissionController::class, 'mentorship'])->name('submissions.mentorship');
        Route::get('/submissions/speaking', [AdminSubmissionController::class, 'speaking'])->name('submissions.speaking');
        Route::get('/submissions/book-waitlist', [AdminSubmissionController::class, 'bookWaitlist'])->name('submissions.book-waitlist');
        Route::get('/submissions/subscribers', [AdminSubmissionController::class, 'subscribers'])->name('submissions.subscribers');
    });
});
