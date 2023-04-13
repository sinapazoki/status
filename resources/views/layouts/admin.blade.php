
<!DOCTYPE html>

<html lang="fa" dir="rtl">
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="_token" content="{{ csrf_token() }}">
      <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
      rel="stylesheet" />
      
      @vite('resources/css/tw-elements.css') 
      @vite('resources/css/app.css') 
      @vite('resources/css/soft-ui-dashboard-tailwind.css') 


      <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

      <title>  @yield('title')</title>

      @section('header-scripts')

      @show

 </head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500 h-[100vh]">


<div x-data="{ menu: true }" >
    




    <main class="ease-soft-in-out xl:mr-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 ml-12 bg-transparent rounded-lg sm:ml-16">
              <li class="leading-normal text-sm">
                <a class="opacity-50 text-slate-700" href="{{asset('admin/dashboard')}}">خانه</a>
              </li>
              <li class="text-sm pr-2 capitalize leading-normal text-slate-700 before:float-right before:pl-2 before:text-gray-600 before:content-['/']" aria-current="page">@yield('title')</li>
            </ol>
            <h6 class="mb-0 font-bold capitalize">@yield('title')</h6>
          </nav>

          <div class="flex items-center mt-2 grow sm:mt-0 sm:ml-6 md:ml-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:mr-auto md:pl-4">
              <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                  <i class="fas fa-search"></i>
                </span>
                <input type="text" class="pr-8.75 text-sm ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500" placeholder="جستجو ..." />
              </div>
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">

              <li class="flex items-center">

                <a onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"  href="" class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                  <i class="fa fa-user sm:mr-1"></i>
                  <span class="hidden sm:inline">خروج از حساب</span>
                </a>
                <form id="logout-form" action="" method="POST" class="d-none">
                  @csrf
              </form>
              </li>
              <li @click="menu = ! menu" class="flex items-center pr-4 xl:hidden">
                <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
                  <div class="w-4.5 overflow-hidden">
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  </div>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </nav>


      @section('content')

        

      @show


    </main>
    


    <aside x-cloak  x-show="menu" class="translate-x-0 max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-2 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:right-0 xl:translate-x-0 xl:bg-transparent">
      <div class="h-19.5">
        <i @click="menu = ! menu" class="absolute top-0 right-0 xl:!hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400" ></i>
        <a class="flex flex-col justify-center items-center  m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
          <img src="{{asset('storage/admin-image/logo.png')}}" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-12" alt="main_logo" />
          <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">HIGHHOST STATUS</span>
        </a>
      </div>

      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

      <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
          <li class="mt-0.5 w-full">
            <a class="{{ (request()->is('admin/dashboard')) ? 'shadow-soft-xl bg-white rounded-lg font-semibold' : '' }} py-2.7  text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4  text-slate-700 transition-colors" href="/admin/dashboard">
              <div class="{{ (request()->is('admin/dashboard')) ? 'bg-gradient-to-tr from-[#52ABD9] to-[#2E7AD6] change-icon' : '' }}  shadow-soft-2xl ml-2 flex h-10 w-10 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <i class="{{ (request()->is('admin/dashboard')) ? 'text-white' : 'text-gray-600' }}" data-feather="home"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">پیشخوان</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="{{ (request()->is('admin/user')) ? 'shadow-soft-xl bg-white rounded-lg font-semibold' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/admin/user">
              <div class="{{ (request()->is('admin/user')) ? 'bg-gradient-to-tr from-[#52ABD9] to-[#2E7AD6] change-icon' : '' }} shadow-soft-2xl ml-2 flex h-10 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i class="{{ (request()->is('admin/user')) ? 'text-white' : 'text-gray-600' }}" data-feather="users"></i>

              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">کاربران</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="{{ (request()->is('admin/incidents')) ? 'shadow-soft-xl bg-white  rounded-lg font-semibold' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/admin/incidents">
              <div class="{{ (request()->is('admin/incidents')) ? 'bg-gradient-to-tr from-[#52ABD9] to-[#2E7AD6] change-icon' : '' }} shadow-soft-2xl ml-2 flex h-10 w-10 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                <i class="{{ (request()->is('admin/incidents')) ? 'text-white' : 'text-gray-600' }}" data-feather="file-text"></i>

              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">رویدادها</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="{{ (request()->is('admin/server')) ? 'shadow-soft-xl bg-white  rounded-lg font-semibold' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/admin/server">
              <div class="{{ (request()->is('admin/server')) ? 'bg-gradient-to-tr from-[#52ABD9] to-[#2E7AD6] change-icon' : '' }} shadow-soft-2xl ml-2 flex h-10 w-10 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <i class="{{ (request()->is('admin/server')) ? 'text-white' : 'text-gray-600' }}" data-feather="layers"></i>

              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">مانیتورینگ</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="#">
              <div class="shadow-soft-2xl ml-2 flex h-10 w-10 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <i class="{{ (request()->is('admin/settings')) ? 'text-white' : 'text-gray-600' }}" data-feather="settings"></i>

              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">تنظیمات</span>
            </a>
          </li>
        </ul>
      </div>


    </aside>






  <script>
      feather.replace()
    </script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

      @section('footer-scripts')

      @show


  </div>
  </body>

</html>
