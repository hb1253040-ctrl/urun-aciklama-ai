<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Ürün Açıklama Üretici')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-indigo-50 text-slate-800 antialiased dark:from-slate-900 dark:via-slate-900 dark:to-slate-800 dark:text-slate-100">
    <main class="mx-auto max-w-2xl px-4 py-12">
        @yield('content')
    </main>
</body>
</html>