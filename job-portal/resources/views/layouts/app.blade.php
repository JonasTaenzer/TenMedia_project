<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f5f5f5;
        }

        nav {
            margin-bottom: 20px;
        }

        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: #222;
            font-weight: bold;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }

        .success {
            color: green;
            margin-bottom: 15px;
        }

        .errors {
            color: red;
            margin-bottom: 15px;
        }

        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        button {
            padding: 8px 14px;
        }

        .action-links a,
        .action-links form {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('jobs.index') }}">Jobs</a>
        <a href="{{ route('companies.index') }}">Companies</a>
        <a href="{{ route('categories.index') }}">Categories</a>
    </nav>

    <div class="container">
        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        @if($errors->any())
            <div class="errors">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>