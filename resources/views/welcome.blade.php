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
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('datatablecss/datatable.css') }}" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
        <link href = "https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel = "stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


        {{--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" /> --}}
      {{--   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    </head>
    <body class="bg-gray-200 h-screen antialiased leading-none">
        <div class="flex flex-col">
            <!-- Content -->
            <div class="min-h-screen">
                <nav class="relative flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg  bg-indigo-900">
                  <div class="container px-4  flex flex-wrap items-center justify-between">
                    <div class="w-full relative flex justify-between lg:w-auto  px-4 lg:static lg:block lg:justify-start">
                      <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white" href="#pablo">
                        CSC
                      </a>
                      <button class="text-white cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
                        <i class="fas fa-bars"></i>
                      </button>
                    </div>
                    <div class="lg:flex flex-grow items-center hidden " id="example-collapse-navbar">
                      <ul class="flex flex-col lg:flex-row list-none">
                        <li class="nav-item">
                          <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="{{ route('TempCheck.index')}}">
                            <i class="fas fa-temperature-high text-lg leading-lg text-white opacity-75"></i><span class="ml-2">Temperature Check
                            </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="{{ route('Report.index')}}">
                            <i class="fas fa-clipboard-list text-lg leading-lg text-white opacity-75"></i><span class="ml-2">
                                Reporting
                            </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="{{ route('DeclarationForm.create')}}">
                            <i class="fab fa-wpforms text-lg leading-lg text-white opacity-75"></i><span class="ml-2">
                                Declaration Form
                            </span>
                          </a>
                        </li>
                         <li class="nav-item">
                          <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="{{ route('List.index')}}">
                            <i class="fas fa-clipboard-list text-lg leading-lg text-white opacity-75"></i><span class="ml-2">
                                List Employee & Visitor
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
                @yield('content')
            </div>
            <!-- end content -->
            <footer class="bg-indigo-900 mt-10">
                <div class="px-2 py-8">
                  <p class="text-base text-gray-200 text text-center">© Creative System Consultant Sdn. Bhd.</p>
                    
                    
                </div>
            </footer>
        </div>
    </body>
</html>

<script>
  function toggleNavbar(collapseID){
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("flex");
  }
</script>