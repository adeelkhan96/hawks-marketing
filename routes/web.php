<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\EmailController as AdminEmailController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about-us', function () {
    return view('aboutus');
})->name('about-us');

Route::get('/our-services', function () {
    return view('ourservices');
})->name('our-services');

Route::get('/seo-services', function () {
    return view('seo-services');
})->name('seo-services');

Route::get('/social-media-management', function () {
    return view('social-media');
})->name('social-media');

Route::get('/content-writing', function () {
    return view('content-writing');
})->name('content-writing');

Route::get('/website-development', function () {
    return view('web-development');
})->name('web-development');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Individual service pages
Route::get('/ppc-advertising', fn() => view('ppc-advertising'))->name('ppc-advertising');
Route::get('/google-meta-advertising', fn() => view('google-meta-advertising'))->name('google-meta-advertising');
Route::get('/graphic-designing', fn() => view('graphic-designing'))->name('graphic-designing');
Route::get('/ui-ux-designing', fn() => view('ui-ux-designing'))->name('ui-ux-designing');
Route::get('/video-editing', fn() => view('video-editing'))->name('video-editing');
Route::get('/social-media-design', fn() => view('social-media-design'))->name('social-media-design');
Route::get('/logo-designing', fn() => view('logo-designing'))->name('logo-designing');
Route::get('/branding-strategy', fn() => view('branding-strategy'))->name('branding-strategy');
Route::get('/branding-service', fn() => view('branding-service'))->name('branding-service');
Route::get('/brand-manual', fn() => view('brand-manual'))->name('brand-manual');
Route::get('/custom-website-development', fn() => view('custom-website-development'))->name('custom-website-development');
Route::get('/ecommerce-development', fn() => view('ecommerce-development'))->name('ecommerce-development');
Route::get('/app-development', fn() => view('app-development'))->name('app-development');
Route::get('/social-media-content-marketing', fn() => view('social-media-content-marketing'))->name('social-media-content-marketing');
Route::get('/social-media-content-creation', fn() => view('social-media-content-creation'))->name('social-media-content-creation');
Route::get('/blog-writing', fn() => view('blog-writing'))->name('blog-writing');
Route::get('/business-analysis', fn() => view('business-analysis'))->name('business-analysis');
Route::get('/consultation', fn() => view('consultation'))->name('consultation');

Route::get('/clients', function () {
    $stories = \App\Models\ClientStory::active()->orderBy('sort_order')->orderBy('id')->get();
    return view('clients', compact('stories'));
})->name('clients');

Route::get('/career', function () {
    $jobs = \App\Models\JobPosting::active()->orderBy('sort_order')->get();
    return view('career', compact('jobs'));
})->name('career');

Route::get('/career/{job}', function (\App\Models\JobPosting $job) {
    abort_unless($job->status === 'active', 404);
    return view('job-detail', compact('job'));
})->name('career.job');

Route::get('/career/{job}/apply', function (\App\Models\JobPosting $job) {
    abort_unless($job->status === 'active', 404);
    return view('job-apply', compact('job'));
})->name('career.apply.form');

Route::post('/career/{job}/apply', [\App\Http\Controllers\JobController::class, 'apply'])->name('career.apply');

Route::get('/blogs', function () {
    $blogs = \App\Models\Blog::published()->latest('published_at')->get();
    return view('blogs', compact('blogs'));
})->name('blogs');

Route::get('/blogs/{slug}', function (string $slug) {
    $blog         = \App\Models\Blog::published()->where('slug', $slug)->firstOrFail();
    $recentBlogs  = \App\Models\Blog::published()->where('id', '!=', $blog->id)->latest('published_at')->limit(4)->get();
    return view('blog-detail', compact('blog', 'recentBlogs'));
})->name('blog.show');

// Admin panel
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.post');
    Route::middleware('admin.auth')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/banner', [AdminDashboardController::class, 'banner'])->name('banner');
        Route::get('/content', [AdminDashboardController::class, 'content'])->name('content');
        Route::get('/submissions', [AdminDashboardController::class, 'submissions'])->name('submissions');
        Route::get('/testimonials', [AdminDashboardController::class, 'testimonials'])->name('testimonials');
        Route::get('/companies', [AdminDashboardController::class, 'companies'])->name('companies');
        Route::middleware('admin')->get('/users', [AdminDashboardController::class, 'users'])->name('users');
        Route::get('/blogs', [AdminDashboardController::class, 'blogs'])->name('blogs');
        Route::post('/upload-blog-image', [AdminDashboardController::class, 'uploadBlogImage'])->name('upload-blog-image');
        Route::get('/jobs', [AdminDashboardController::class, 'jobs'])->name('jobs');
        Route::get('/job-applications', [AdminDashboardController::class, 'jobApplications'])->name('job-applications');
        Route::get('/job-applications/{id}/resume', [\App\Http\Controllers\JobController::class, 'downloadResume'])->name('applications.resume');
        Route::get('/client-stories', [AdminDashboardController::class, 'clientStories'])->name('client-stories');

        // Email
        Route::get('/email',          [AdminEmailController::class, 'inbox']  )->name('email.inbox');
        Route::get('/email/sent',     [AdminEmailController::class, 'sent']   )->name('email.sent');
        Route::get('/email/compose',  [AdminEmailController::class, 'compose'])->name('email.compose');
        Route::post('/email/send',    [AdminEmailController::class, 'send']   )->name('email.send');
        Route::get('/email/{uid}',    [AdminEmailController::class, 'show']   )->name('email.show');
    });
});
