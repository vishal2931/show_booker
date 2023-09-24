<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        @wireUiScripts
        <title>{{ $title ?? env('APP_NAME') }}</title>
    </head>
    <body>
        <div class="bg-gray-600 min-h-screen flex items-center justify-center">
            <div class="h-full w-full">
                <div class="text-center text-white text-3xl font-bold pt-3">
                    {{ __('Show Booker') }}
                </div>
                {{ $slot }}
            </div>
        </div>
        @vite('resources/js/app.js')
    </body>
</html>
