<!-- resources/views/job_posts/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job Post</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional: Add custom CSS if needed -->
    <style>
        .container {
            max-width: 800px;
            margin-top: 50px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .form-error {
            color: red;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="mb-4 text-center">Create New Job Post</h1>

        <!-- Job Post Create Form -->
        <form action="{{ route('job_posts.store') }}" method="POST">
            @csrf  <!-- CSRF token for security -->

            <!-- Job Title -->
            <div class="mb-3">
                <label for="job_title" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="job_title" name="job_title" value="{{ old('job_title') }}" required>
                @error('job_title')
                    <div class="form-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Job Description -->
            <div class="mb-3">
                <label for="job_description" class="form-label">Job Description</label>
                <textarea class="form-control" id="job_description" name="job_description" rows="4" required>{{ old('job_description') }}</textarea>
                @error('job_description')
                    <div class="form-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Company Name -->
            <div class="mb-3">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name') }}" required>
                @error('company_name')
                    <div class="form-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Location -->
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}" required>
                @error('location')
                    <div class="form-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Job Type -->
            <div class="mb-3">
                <label for="job_type" class="form-label">Job Type</label>
                <select id="job_type" name="job_type" class="form-select" required>
                    <option value="Full-time" {{ old('job_type') == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                    <option value="Part-time" {{ old('job_type') == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                    <option value="Contract" {{ old('job_type') == 'Contract' ? 'selected' : '' }}>Contract</option>
                    <option value="Internship" {{ old('job_type') == 'Internship' ? 'selected' : '' }}>Internship</option>
                </select>
                @error('job_type')
                    <div class="form-error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Application Deadline -->
          
            <!-- Submit Button -->
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Create Job Post</button>
            </div>
        </form>

        <div class="text-center">
            <a href="{{ route('job_posts.index') }}" class="btn btn-secondary">Back to Job Posts</a>
        </div>
    </div>

    <!-- Bootstrap JS & Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
