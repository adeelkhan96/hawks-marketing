<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\PageContent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users'        => User::count(),
            'admins'             => User::where('role', 'admin')->count(),
            'editors'            => User::where('role', 'editor')->count(),
            'total_contents'     => PageContent::count(),
            'total_submissions'  => ContactSubmission::count(),
            'unread_submissions' => ContactSubmission::whereNull('read_at')->count(),
        ];

        $recentSubmissions = ContactSubmission::latest()->limit(6)->get();

        return view('admin.dashboard', compact('stats', 'recentSubmissions'));
    }

    public function users()
    {
        return view('admin.users');
    }

    public function banner()
    {
        return view('admin.banner');
    }

    public function submissions()
    {
        return view('admin.submissions');
    }

    public function testimonials()
    {
        return view('admin.testimonials');
    }

    public function content()
    {
        return view('admin.content');
    }

    public function companies()
    {
        return view('admin.companies');
    }

    public function blogs()
    {
        return view('admin.blogs');
    }

    public function jobs()
    {
        return view('admin.jobs');
    }

    public function jobApplications()
    {
        return view('admin.job-applications');
    }

    public function clientStories()
    {
        return view('admin.client-stories');
    }

    public function uploadBlogImage(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate(['image' => 'required|image|max:5120|mimes:jpg,jpeg,png,webp,gif']);

        $dir = public_path('assets/images/blogs/inline');
        File::ensureDirectoryExists($dir);

        $filename = 'inline_' . time() . '_' . rand(100, 999) . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move($dir, $filename);

        return response()->json(['url' => asset('assets/images/blogs/inline/' . $filename)]);
    }
}
