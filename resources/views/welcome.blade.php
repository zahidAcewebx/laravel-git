<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Posting</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
    }
    .search-container {
      text-align: center;
      margin-top: 100px;
    }
    .search-bar {
      width: 50%;
      padding: 15px;
      font-size: 18px;
      border-radius: 25px;
      border: 1px solid #ccc;
    }
    .search-button {
      margin-left: 10px;
      padding: 15px 25px;
      font-size: 18px;
      border-radius: 25px;
      border: 1px solid #ccc;
      background-color: #4285F4;
      color: white;
      cursor: pointer;
    }
    .search-button:hover {
      background-color: #357AE8;
    }
    .job-listings, .recent-posts {
      margin-top: 50px;
    }
    .job-listings li, .recent-posts li {
      background-color: #fff;
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .navbar {
      margin-bottom: 30px;
    }
    .navbar .navbar-nav .nav-item {
      margin-left: 20px;
    }
    .navbar .navbar-nav .nav-link {
      font-size: 16px;
      color: #4285F4;
    }
    .navbar .navbar-nav .nav-link:hover {
      color: #357AE8;
    }
  </style>
</head>
<body>

  <!-- Navbar for Login and Register -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
              @if (Route::has('login'))
                  <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                      @auth
                          <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                      @else
                          <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                          @endif
                      @endauth
                  </div>
              @endif
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <!-- Search Bar Section -->
    <div class="search-container" style="margin-top: 120px;">
      <input type="text" class="search-bar" placeholder="Search for jobs, posts, etc.">
      <button class="search-button">Search</button>
    </div>

    <!-- Job Posting Section -->
    <div class="row job-listings">
      <div class="col-md-8">
        <h3>{{ $jobPost->job_title }}</h3>
        <p><strong>Company:</strong> {{ $jobPost->company_name }}</p>
        <p><strong>Description:</strong> {{ $jobPost->job_description }}</p>
        <p><strong>Location:</strong> {{ $jobPost->location }}</p>
        <p><strong>Salary:</strong> {{ $jobPost->salary }}</p>
        <!-- You can add more fields here depending on your JobPost model -->
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
