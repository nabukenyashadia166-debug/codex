<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; }
        .box { max-width: 900px; margin: 20px auto; background: white; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; padding: 8px; border-bottom: 1px solid #ddd; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; box-sizing: border-box; }
        .btn { padding: 6px 12px; background: #2563eb; color: white; border: 0; text-decoration: none; cursor: pointer; }
        .red { background: #dc2626; }
        .green { background: #16a34a; }
        .gray { background: #6b7280; }
        .success { background: #dcfce7; padding: 10px; margin-bottom: 10px; }
        .error { color: #dc2626; font-size: 13px; }
        form.inline { display: inline; }
    </style>
</head>
<body>
<div class="box">
    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @yield('content')
</div>
</body>
</html>