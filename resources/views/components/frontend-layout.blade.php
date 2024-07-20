<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhedetar</title>
    <link rel="shortcut icon" href="{{ asset('photo/bhedetar-logo.png') }}" type="image/x-icon" />

    @vite(['resources/css/app.css','resources/js/app.js'])
  
</head>
<body>
    <header>

        <x-navbar/>
    </header >
    <main class="-mt-4">
        {{ $slot }}
    </main>

  

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>