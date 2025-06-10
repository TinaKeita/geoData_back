<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'Valstis' }}</title>
    <link rel="stylesheet" href="{{ asset("style.css") }}">
</head>
<body>
    <x-navigation></x-navigation>
   {{ $slot }}
</body>
</html>