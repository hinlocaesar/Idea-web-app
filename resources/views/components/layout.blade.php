@props(['title' => null])
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$title}}</title>

        <style>
            .max-w-400 {
                max-width: 400px;
                margin: auto;
            }
        </style>

    </head>

    <body>
        {{ $slot }}
    </body>
 </html>
