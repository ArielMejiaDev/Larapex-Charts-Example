<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Larapex Charts') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-200">

        <div class="min-h-screen lg:min-h-0">

            <div class="container mx-auto px-4">

                <div class="pb-4 border-b-2 border-gray-300 flex items-center justify-between mt-10 mx-4">

                    <h1 class="text-gray-600 font-bold tracking-wide uppercase text-2xl lg:text-4xl">Larapex charts example.</h1>

                    <a target="_blank" class="text-gray-600 fill-current" href="https://arielmejiadev.github.io/LarapexCharts-Documentation/installation.html">
                        <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                        Docs
                    </a>

                </div>


                <div class="flex flex-col md:flex-row items-center my-4">

                    <div class="w-full lg:w-1/2 text-gray-700 p-4 rounded bg-white border-t border-gray-200 shadow-sm m-4">

                        {!! $earnings_chart->container() !!}

                    </div>

                    <div class="w-full lg:w-1/2 text-gray-700 p-4 rounded bg-white border-t border-gray-200 shadow-sm m-4">

                        {!! $statics_chart->container() !!}

                    </div>

                </div>

            </div>

            <x-footer />

        </div>

    {{--
        |--------------------------------------------------------------------------
        | Notes
        |--------------------------------------------------------------------------
        |
        | If you are using the cdn helper you only
        | need once even if you pass more charts variables
        | you can use a layout file with stack 'scripts'
        | and push this scripts only in the blade views that you need
    --}}

    <script src="{{ $earnings_chart->cdn() }}"></script>

    {{ $earnings_chart->script() }}
    {{ $statics_chart->script() }}

    </body>
</html>
