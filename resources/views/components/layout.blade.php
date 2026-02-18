@props(['title' => null])
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$title}}</title>
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            .max-w-400 {
                max-width: 400px;
                margin: auto;
            }

           .card {
            background: #e3e3e3;
            padding: 1rem;
            text-align: center;
           }
        </style>

    </head>

    <body class="bg-gray-700 p-6 max-w-xl max-auto">
        {{ $slot }}
    </body>
 </html>
