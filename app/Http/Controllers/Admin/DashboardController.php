<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\PageContent;
use App\Models\User;

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
}
