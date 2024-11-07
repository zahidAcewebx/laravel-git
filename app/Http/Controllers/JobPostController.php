<?php

// app/Http/Controllers/JobPostController.php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    // Show all job posts
    public function index()
    {
        $jobPosts = JobPost::all(); // Get all job posts
        return view('job_posts.index', compact('jobPosts'));
    }

    // Show form to create a new job post
    public function create()
    {
        return view('job_posts.index');
    }

    // Store new job post in database
    public function store(Request $request)
    {
       
     JobPost::create($request->all());
       
        return redirect()->route('job_posts.index');
    }

    // Show a specific job post
    public function show(JobPost $jobPost)
    {     
        return view('welcome', compact('jobPost'));
    }

    // Show form to edit an existing job post
    public function edit(JobPost $jobPost)
    {
        return view('job_posts.edit', compact('jobPost'));
    }

    // Update an existing job post
    public function update(Request $request, JobPost $jobPost)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
            'company_name' => 'required|string',
            'location' => 'required|string',
            'job_type' => 'required|in:Full-time,Part-time,Contract,Internship',
            'application_deadline' => 'required|date',
        ]);

        $jobPost->update($request->all()); // Update job post
        return redirect()->route('job_posts.index');
    }

    // Delete a job post
    public function destroy(JobPost $jobPost)
    {
        $jobPost->delete(); // Delete job post
        return redirect()->route('job_posts.index');
    }
}
