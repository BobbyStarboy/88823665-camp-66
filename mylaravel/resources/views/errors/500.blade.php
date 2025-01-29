<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 Error Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }
        .error-code {
            font-size: 100px;
            color: red;
            margin: 0;
        }
        .message {
            font-size: 18px;
            margin: 10px 0;
        }
        .search-box {
            margin-top: 20px;
        }
        .search-box input {
            padding: 10px;
            width: 70%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .search-box button {
            padding: 10px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        a {
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="error-code">500</h1>
        <h2>Oops! Something went wrong.</h2>
        <p class="message">We will work on fixing that right away. Meanwhile, you may <a href="/dashboard">return to dashboard</a> or try using the search form.</p>
        <div class="search-box">
            <input type="text" placeholder="Search">
            <button>&#128269;</button>
        </div>
    </div>
</body>
</html>
