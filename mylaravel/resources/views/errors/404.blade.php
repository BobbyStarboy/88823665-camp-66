<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Error Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 10%;
        }

        .error-code {
            font-size: 100px;
            font-weight: bold;
            color: #ffcc00;
        }

        .error-message {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .search-box {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .search-box input {
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-box button {
            padding: 10px 15px;
            background-color: #ffcc00;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .home-link {
            margin-top: 20px;
            display: block;
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
        }

        .home-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404 Error Page</h1>
        <div class="error-code">404</div>
        <p class="error-message">Oops! Page not found.</p>
        <p>We could not find the page you were looking for. Meanwhile, you may <a href="/" class="home-link">return to dashboard</a> or try using the search form.</p>

        <div class="search-box">
            <input type="text" placeholder="Search">
            <button>🔍</button>
        </div>
    </div>
</body>
</html>
