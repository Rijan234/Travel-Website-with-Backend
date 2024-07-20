<!DOCTYPE html>
<html lang="en" class="v2fLMH8w3xgUEQcl63H9">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Get started with a premium admin dashboard layout built with Tailwind CSS and Flowbite featuring 21 example pages including charts, kanban board, mailing system, and more.">
    <meta name="author" content="Themesberg">
    <meta name="generator" content="Hugo 0.88.1">

    <title>Bhedetar - Admin</title>

    <link rel="canonical" href="https://flowbite.com/application-ui/demo/">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://flowbite.com/application-ui/demo/app.css">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('photo/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('photo/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('photo/logo.png') }}>
    <link rel=" icon" type="image/png" href="{{ asset('photo/logo.png') }}">
    <link rel="manifest" href="https://flowbite.com/application-ui/demo/site.webmanifest">
    <link rel="mask-icon" href="https://flowbite.com/application-ui/demo/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">








    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-141734189-9');
    </script>


    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('v2fLMH8w3xgUEQcl63H9');
        } else {
            document.documentElement.classList.remove('v2fLMH8w3xgUEQcl63H9')
        }
    </script>

    <!-- flowbite link -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="jtAJHOc7mn7b4IKRO59D _1jTZ8KXRZul60S6czNi">


 
    
        <x-sidebar/>



    <div id="main-content" class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_ uLPch_bqyJDXwe5tynMV _lTTGxW9MVI40FyDCtmr jtAJHOc7mn7b4IKRO59D zW58fVqdWJHfumftUEwF h8KYXnua2NT4kTVzieom">
        <main>

            {{ $slot }}


        </main>


    </div>





    <!-- <script src="{{ mix('js/app.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>


    <script src="https://flowbite.com/application-ui/demo/app.bundle.js"></script>

</body>

</html>