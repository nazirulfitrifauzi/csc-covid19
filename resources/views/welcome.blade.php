<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none">
    <div class="flex flex-col">
        <!-- Content -->
        <div class="min-h-screen bg-gray-300">
            <nav class="bg-white shadow-sm">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <div class="flex-shrink-0 flex items-center">
                                <img class="h-10 w-auto" src="{{ asset('img/csc_blue.png') }}"/>
                            </div>
                            <div class="hidden sm:ml-6 sm:flex">
                                <a href="#"
                                    class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">
                                    Temperature Check
                                </a>
                                <a href="#"
                                    class="ml-8 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    Reporting
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="py-10">
                <header>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h1 class="text-3xl font-bold leading-tight text-gray-900">
                            Dashboard
                        </h1>
                    </div>
                </header>
                <main>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <!-- Replace with your content -->
                        <div class="px-4 py-8 sm:px-0">
                            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>
                        </div>
                        <!-- /End replace -->
                    </div>
                </main>
            </div>
        </div>
        <!-- end content -->
    </div>
</body>

</html>
