<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <title>{{ config('app.name', '{{ env('APP_INITIALS') }}') }}</title> --}}
    <title>{{ env('APP_INITIALS') }} - {{ env('APP_INITIALS') }} | Empowering Local Entrepreneurs</title>
    <meta name="description" content="Join {{ env('APP_INITIALS') }} - Chhattisgarh's premier business networking platform. Connect, collaborate, and grow your business through trusted local partnerships.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <body class="bg-gray-50 text-gray-800 leading-relaxed">
        <x-navigation />
        <div class="max-w-2xlxl">
            {{$slot}}
        </div>

        <x-footer />

    </body>
</html>
