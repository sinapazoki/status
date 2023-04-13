@extends('layouts.master')
@section('title' , 'status page')

@section('content')


<section class="px-4 md:px-0 tails-selected-element" >
  <div class="container items-center max-w-6xl p-8 mx-auto relative -mt-12  bg-white shadow-lg rounded-xl z-[60]">
    <div class="flex flex-wrap items-center sm:-mx-3">
      <div class="w-full">
        <div class="w-full space-y-9 md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
          
          <h2 class="text-2xl sm:text-3xl tracking-tight text-gray-900 -mb-4 font-bold flex items-center flex-col text-center sm:flex-row">
            <span class="bg-green-500 rounded-full p-1 shadow-md ml-3"><i class="text-white" data-feather="check"></i></span>
            <p class="block xl:inline">تمامی سرویس ها<span class=" text-green-600 xl:inline " data-primary="indigo-600"> آنلاین </span> میباشند</p>
          </h2>

          <div class="alert shadow-lg bg-white text-[12px] sm:text-sm border border-sky-500">
            <div>
              <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              <span>هیچ گونه اختلالی در ارائه سرویس وجود ندارد !</span>
            </div>
            <div class="flex-none">
            <label   for="my-modal-3" class="modal-button btn btn-sm bg-blue-500 hover:bg-blue-700 border-none">گزارش مشکل</label >
          </div>
          </div>

        </div>
      </div>



    </div>
  </div>

  <input type="checkbox" id="my-modal-3" class="modal-toggle" />
        <div class="modal">
          <div class="modal-box relative">
            <label for="my-modal-3" class="btn btn-sm bg-gray-300 btn-circle border-0 absolute left-2 top-2">✕</label>
            <h3 class="text-lg font-bold text-blue-600">گزارش مشکل و اختلال سرویس</h3>
            <p class="py-4">در صورتی که وب سایت و یا هاست شما دچار خطا میباشد می توانید این مورد را گزارش دهید !</p>
            <input class="w-full border-2 p-2 rounded-lg" placeholder="آدرس سایت و یا آیپی سرور "  type="text">
            <input class="w-full border-2 p-2 rounded-lg mt-2" placeholder="آدرس ایمیل"  type="email">
            <div class="text-left mt-2"><button class="btn btn-sm border-0 bg-blue-600 hover:bg-blue-800 w-20">ارسال</button></div>
          </div>
        </div>
</section>



<section class="px-4 md:px-0 tails-selected-element  my-12" >
  <div class="container items-center max-w-6xl pb-4 mx-auto relative">
      <h2 class="text-2xl tracking-tight text-gray-900 font-bold">
            <span class="block xl:inline">گزارش وضعیت سرورها</span>
      </h2>
  </div>

  <div class="container items-center max-w-6xl p-8 mx-auto relative  bg-white shadow-lg rounded-xl z-[60]">
    <div class="flex flex-wrap items-center sm:-mx-3">
      <div class="w-full">
        <div class="w-full pb-6 space-y-6 md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
          <div class="grid gap-10 sm:gap-4  grid-cols-2 sm:grid-cols-4 divide-x divide-x-reverse ">
            <div class="text-center flex flex-col text-2xl">99.998% <span class="text-sm text-gray-400">24 ساعت گذشته</span></div>
            <div class="text-center flex flex-col text-2xl">99.998% <span class="text-sm text-gray-400">7 روز گذشته</span></div>
            <div class="text-center flex flex-col text-2xl">100.00% <span class="text-sm text-gray-400">30 روز گذشته</span></div>
            <div class="text-center flex flex-col text-2xl">100.00% <span class="text-sm text-gray-400">90 روز گذشته</span></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="px-4 md:px-0 tails-selected-element  my-12" >
  <div class="container items-center max-w-6xl pb-4 mx-auto relative">
      <h2 class="text-2xl tracking-tight text-gray-900 font-bold">
            <p class="block xl:inline"> پایداری سرورها <span class="text-sm">90 روز گذشته</span></p>
      </h2>
  </div>


  <div class="container items-center max-w-6xl pt-16 px-8 mx-auto relative  bg-white shadow-lg rounded-xl z-[60]">
    <div class="absolute w-full right-0 top-0 py-3 px-5  bg-gray-100 rounded-t-xl flex flex-col items-center sm:flex-row justify-between">
      <div> راهنمای وضعیت سرویس ها </div>
      <div class="flex space-x-4 space-x-reverse">
        <div class="flex items-center text-green-600"><i class="w-4 ml-1" data-feather="check-circle"></i> آنلاین  </div>
        <div class="flex items-center text-orange-600"><i class="w-4 ml-1" data-feather="minus-circle"></i> اختلال موقت </div>
        <div class="flex items-center text-gray-500"><i class="w-4 ml-1" data-feather="alert-circle"></i> بدون رکورد  </div>
      </div>
    </div>
    <div class="flex flex-wrap items-center sm:-mx-3">
      <div class="w-full">
        <div class="w-full pb-6 space-y-6 md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">


        <div class="container">
              <div class="uptime-body">
                <div class="uptime-card align-items-stretch">                
                  <div class="card border-0 mb-1">
                    <div class="card-body p-4">

                        <a class="flex items-center" href="/server/details">
                            <h5  class="title text-base font-bold ml-2"></h5>
                            <span class="text-sm">(جزئیات)</span>
                          </a>                  

                      <div class="flex lg:items-center w-full flex-col lg:flex-row overflow-hidden lg:overflow-visible items-end">

                        <div class="col uptime flex lg:block"></div>
                        <span class="uptime-percent text-green-500 mr-5"></span>

                        <div class="pl-2 mr-auto flex items-center space-x-2 space-x-reverse absolute lg:static top-4">
                          <span class="flex h-3 w-3 relative">
                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                              <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                            </span>
                            <span class="float-right pid text-green-500"></span>
                        </div>
                      </div>

                    </div>
                  </div>    
                </div>
              </div>     
      </div>


        </div>
      </div>

    </div>
  </div>
</section>



<section class="px-4 md:px-0 tails-selected-element  my-12" >
  <div class="container justify-between flex items-center max-w-6xl pb-4 mx-auto relative">
      <h2 class="text-2xl tracking-tight text-gray-900 font-bold">
            <span class="block xl:inline">تاریخچه رویدادها</span>
      </h2>
      <div class="flex items-center">
        <span class="flex h-5 w-5 relative">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-5 w-5 bg-green-500"></span>
          </span>
          <p class="font-bold text-green-500 mr-4">مشکلات رفع شده</p>
      </div>


  </div>

  <div class="container items-center max-w-6xl p-8 mx-auto relative  bg-white shadow-lg rounded-xl z-[60]">

        <h3 class="font-bold text-2xl">۱۰ مهر ۱۴۰۱</h3>
        <div class="mx-auto mt-5">
          <div style='background-color:rgb(255, 255, 255)'>
          <div class="relative mx-auto max-w-7xl " style="cursor: auto;">
            <div class="max-w-lg mx-auto overflow-hidden rounded-lg border-2 border-gray-50 shadow-lg lg:max-w-none lg:flex">
              <div class="flex-1 px-4 py-3 bg-white lg:p-6" style="cursor: auto;">
                <h3 class="text-xl font-extrabold text-gray-900 sm:text-xl" style="cursor: auto;">license | انقضای لایسنس دایرکت ادمین سرور lh420</h3>
                <p class="mt-6 text-base text-justify text-gray-500">
                  در رابطه با اختلال کنترل پنل سرور lh420: هم اکنون با توجه به منقضی شدن لایسنس کنترل پنل دایرکت ادمین سرور مذکور وباتوجه به اختلال ارتباط با سرویس های خارجی در حال رفع این مشکل هستیم.

                </p>

                <ul class="mt-4">
                  <li class="flex items-center">
                    <div class="flex-shrink-0">
                      <svg class="w-8 h-8 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <p class="ml-3 text-sm text-green-500" > <span class="font-bold">مشکل رفع شده : </span>  ما کار تعمیر و نگهداری را با موفقیت به پایان رساندیم. از صبوری شما متشکرم.</p>
                  </li>
                </ul>


                <div class="mt-2">
                  <div class="flex items-center">
                    <div class="flex-1 border-t-2 border-gray-200"></div>
                    <h4 class="flex-shrink-0 pr-4 text-sm font-semibold tracking-wider text-indigo-600 uppercase bg-white">مشاهده جزئیات بیشتر</h4>
                  </div>

                </div>
              </div>
            

              </div>
              </div>
          </div>
        </div>

        <h3 class="font-bold mt-10 text-2xl">۹ مهر ۱۴۰۱</h3>
        <div class="mx-auto mt-5">
          <div style='background-color:rgb(255, 255, 255)'>
          <div class="relative mx-auto max-w-7xl " style="cursor: auto;">
            <div class="max-w-lg mx-auto overflow-hidden rounded-lg border-2 border-gray-50 shadow-lg lg:max-w-none lg:flex">
              <div class="flex-1 px-4 py-3 bg-white lg:p-6" style="cursor: auto;">
                <h3 class="text-xl font-extrabold text-gray-900 sm:text-xl" style="cursor: auto;">license | انقضای لایسنس دایرکت ادمین سرور lh420</h3>
                <p class="mt-6 text-base text-justify text-gray-500">
                  در رابطه با اختلال کنترل پنل سرور lh420: هم اکنون با توجه به منقضی شدن لایسنس کنترل پنل دایرکت ادمین سرور مذکور وباتوجه به اختلال ارتباط با سرویس های خارجی در حال رفع این مشکل هستیم.

                </p>

                <ul class="mt-4">
                  <li class="flex items-center">
                    <div class="flex-shrink-0">
                      <svg class="w-8 h-8 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <p class="ml-3 text-sm text-green-500" > <span class="font-bold">مشکل رفع شده : </span>  ما کار تعمیر و نگهداری را با موفقیت به پایان رساندیم. از صبوری شما متشکرم.</p>
                  </li>
                </ul>


                <div class="mt-2">
                  <div class="flex items-center">
                    <div class="flex-1 border-t-2 border-gray-200"></div>
                    <h4 class="flex-shrink-0 pr-4 text-sm font-semibold tracking-wider text-indigo-600 uppercase bg-white">مشاهده جزئیات بیشتر</h4>
                  </div>

                </div>
              </div>
            

              </div>
              </div>
          </div>
        </div>

  </div>
</section>




<script>
  function rInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function pStat(e){
  var r = rInt(0, 99);
  let monthsArray = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  var currentdate = new Date(); 
  var datetime =  monthsArray[currentdate.getMonth()] + " "  
                  + currentdate.getDate()  + "," 
                  + currentdate.getFullYear() ;
  switch(true){
    case r == 0:
      $(e).append('<div class="uptime-marker nodata tooltip" data-tip="' + datetime + ' \n '  + '%' + r + ' "></div>');
      break;

    case r <= 10 && r > 0:
      $(e).append('<div class="uptime-marker down tooltip " data-tip="' + datetime + ' \n '  + '%' + r + ' " ></div>');
      break;

    case r > 10 && r < 50:
      $(e).append('<div class="uptime-marker med tooltip" data-tip="' + datetime + ' \n '  + '%' + r + ' "></div>');
          break;

    case r >= 50:
      $(e).append('<div class="uptime-marker up tooltip" data-tip="' + datetime + ' \n '  + '%' + r + ' "></div>');
      break;


  }
}

$(document).ready(function(){

  for(i=0;i<3;i++){
    var c = $(".uptime-card").first().clone();
    $('.title', c).text('سرور تست');
    $('.pid', c).text('آنلاین');
    $('.uptime-percent', c).text('100.00%');
    c.appendTo('.uptime-body');
  }
  $(".uptime-card").first().css("display", "none");

  $(".uptime").each(function(index) {
    // var r = rInt(1, 4);
    var day = 90;
    for(i=0;i<day;i++)
    {
      pStat(this);

    } 
  });
});
</script>

  @section('footer-scripts')

  
    
  @endsection

  

@endsection