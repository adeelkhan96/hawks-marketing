<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\JobPosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JobController extends Controller
{
    public function apply(Request $request, JobPosting $job)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:100',
            'email'            => 'required|email|max:150',
            'phone'            => 'required|string|max:30',
            'city'             => 'required|string|max:100',
            'experience_years' => 'required|string|max:50',
            'current_position' => 'nullable|string|max:120',
            'cover_letter'     => 'required|string|min:100|max:4000',
            'resume'           => 'required|file|mimes:pdf,doc,docx|max:5120',
            'linkedin_url'     => 'nullable|url|max:255',
            'portfolio_url'    => 'nullable|url|max:255',
            'agree'            => 'accepted',
        ], [
            'name.required'             => 'Your full name is required.',
            'email.required'            => 'A valid email address is required.',
            'phone.required'            => 'Your phone number is required.',
            'city.required'             => 'Please enter your city.',
            'experience_years.required' => 'Please select your years of experience.',
            'cover_letter.required'     => 'A cover letter is required.',
            'cover_letter.min'          => 'Your cover letter should be at least 100 characters.',
            'resume.required'           => 'Please upload your CV/Resume.',
            'resume.mimes'              => 'Resume must be a PDF or Word document.',
            'resume.max'                => 'Resume must not exceed 5 MB.',
            'agree.accepted'            => 'You must agree to the terms to submit your application.',
        ]);

        // Store resume securely in storage (not public)
        $dir = storage_path('app/resumes');
        File::ensureDirectoryExists($dir);

        $filename  = 'resume_' . time() . '_' . rand(1000, 9999) . '.' . $request->file('resume')->getClientOriginalExtension();
        $request->file('resume')->move($dir, $filename);

        JobApplication::create([
            'job_posting_id'   => $job->id,
            'job_title'        => $job->title,
            'name'             => $validated['name'],
            'email'            => $validated['email'],
            'phone'            => $validated['phone'],
            'city'             => $validated['city'],
            'experience_years' => $validated['experience_years'],
            'current_position' => $validated['current_position'] ?? null,
            'cover_letter'     => $validated['cover_letter'],
            'resume_path'      => $filename,
            'linkedin_url'     => $validated['linkedin_url'] ?? null,
            'portfolio_url'    => $validated['portfolio_url'] ?? null,
            'status'           => 'new',
        ]);

        return redirect()->route('career')
            ->with('applied', 'Your application has been submitted successfully! We\'ll review it and get back to you shortly.');
    }

    public function downloadResume(int $id)
    {
        $app  = JobApplication::findOrFail($id);
        $path = storage_path('app/resumes/' . $app->resume_path);

        abort_unless(file_exists($path), 404, 'Resume file not found.');

        $ext  = pathinfo($app->resume_path, PATHINFO_EXTENSION);
        return response()->download($path, \Str::slug($app->name) . '-resume.' . $ext);
    }
}
