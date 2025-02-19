<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .header { background: #333; color: white; text-align: center; padding: 10px; }
        .footer { background: #333; color: white; text-align: center; padding: 10px; position: fixed; width: 100%; bottom: 0; }
        .container { padding: 20px; text-align: center; }
    </style>
</head>
<body>

    <div class="header">
        <h2>My Website</h2>
    </div>

    @yield('content')

    <div class="footer">
        <p>© 2025 My Website</p>
    </div>

</body>
</html>
