
<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="_token" content="{{ csrf_token() }}">
        @vite('resources/css/app.css') 

        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>    
        <link rel="preconnect" href="https://fonts.googleapis.com">

            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Saira:wght@500&display=swap" rel="stylesheet">
            <link href="http://fonts.cdnfonts.com/css/iranyekan" rel="stylesheet">


        @section('header-scripts')

        @show
        <title>  @yield('title')</title>

   </head>


        
        <body class="main font-iranyekan bg-gray-50 flex flex-col justify-between min-h-[100vh] " >

        <nav class="relative z-50 h-60 sm:h-40 select-none tails-selected-element bg-blue-600">
            <div class="container relative flex flex-wrap items-center justify-between h-40 pb-10 mx-auto font-medium  md:overflow-visible lg:justify-center sm:px-4 md:px-2 lg:px-0">
                <div class="top-0 left-0 items-start w-full h-full p-4 text-sm md:items-center xl:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex">
                    <div class="flex flex-col-reverse sm:flex-row w-full h-auto rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative">
                        <div class="flex flex-col mt-5 justify-start w-full space-x-6 text-center lg:space-x-8 md:w-2/3 sm:mt-0 md:flex-row md:items-center">

                            <div class="flex items-center space-x-4 space-x-reverse">
                                <div class="bg-white p-3 sm:p-4 rounded-xl shadow-md">
                                    <i class="text-blue-800" data-feather="server"></i>
                                </div>

                                <div class="text-white flex items-start flex-col">
                                    <h3 class="text-xl sm:text-2xl pb-3">وضعیت سرورها</h3>
                                    <span class="text-sm text-gray-300">آخرین آپدیت 10:06:25 PM | آپدیت بعدی در 16 ثانیه</span>
                                </div>
                            </div>

                        </div>

                        <div class="flex sm:items-end sm:justify-end w-full pt-4 md:w-1/3 flex-row justify-between items-center sm:flex-col md:py-0">
                            <div class="flex items-center">
                                <h1 class="w-full px-3 py-2 mr-0 text-3xl text-white md:mr-2 lg:mr-3 md:w-auto">HIGHHOST</h1>
                                <span class="flex h-5 w-5 relative">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-5 w-5 bg-sky-500"></span>
                                </span>
                            </div>

                            <div>
                                <a href="https://highhost.org/" class="flex text-white text-sm items-center"> بازگشت به سایت <i class="w-4 mr-2 text-white" data-feather="arrow-left"></i></a>
                            </div>
                            
                        </div>

                    </div>
                </div>

            </div>
        </nav>



              <main class="mb-auto">

                    @section('content')

                    @show

              </main>
              

          <script>
            feather.replace()
          </script>
         


            @section('footer-scripts')

            @show





        </body>
</html>
