<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            text-align: center;
            padding: 20px;
        }
        h1 {
            font-size: 100px;
            margin: 0;
            color: #ff6f61;
        }
        p {
            font-size: 18px;
            margin: 10px 0 20px;
        }
        a {
            display: inline-block;
            text-decoration: none;
            background-color: #ff6f61;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #ff3f31;
        }
        .illustration {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Oops! The page you're looking for doesn't exist.</p>
        <a href="{{ url('/') }}">Back to Home</a>
    </div>
</body>
</html>
