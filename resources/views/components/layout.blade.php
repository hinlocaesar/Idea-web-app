@props(['title' => null])
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$title}}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body class="bg-base-200 min-h-screen">
        <x-navbar />
        <main class="container mx-auto p-6">
            {{ $slot }}
        </main>
    </body>
 </html>
