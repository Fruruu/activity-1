<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; text-align: center; }
        .header, .footer { border-bottom: 1px solid black; padding: 10px; }
        .footer { border-top: 1px solid black; position: fixed; width: 100%; bottom: 0; }
        .container { padding: 20px; }
    </style>
</head>
<body>

    <div class="header">
        <h2>April Faith J. Gamboa</h2>
    </div>

    @yield('content')

    <div class="footer">
        <p>My Website</p>
    </div>

</body>
</html>
