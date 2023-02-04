@extends('layouts.master')
@section('title' , 'success page')

@section('content')


<section class="px-4 md:px-0 tails-selected-element " >
  <div class="container items-center max-w-6xl p-8 mx-auto relative -mt-12  bg-white shadow-lg rounded-xl z-[60]">



      <div class="grid grid-cols-1 sm:grid-cols-4  items-center">
          <div class="col-span-4 sm:col-span-1 mt-5 text-right sm:text-center space-y-3 sm:border-l-2 ">
            <p class="font-bold"> وضعیت: <span class="font-normal">رفع شده</span></p>
            <p class="font-bold"> نوع: <span class="font-normal">دچار اختلال</span></p>
          </div>

          <div class="col-span-4 sm:col-span-2 -order-1 sm:order-none text-center">

            <button class="btn badge badge-lg border-none h-10 bg-blue-500 hover:bg-blue-600 btn-sm rounded-full">
              Domain
              <div class="mr-2"><i data-feather="info"></i></div>
            </button>

            <h2 class="text-2xl font-extrabold mt-5 leading-10">   اختلال در انجام عملیات مربوط دامنه    </h2>
          </div>
          
          <div class="col-span-4 sm:col-span-1 mt-5 text-right sm:text-center space-y-3 sm:border-r-2">
            <p class="font-bold"> شروع: <span class="font-normal">۱۰ مهر ۱۲:۲۵</span></p>
            <p class="font-bold"> زمان احتمالی: <span class="font-normal">۲ ساعت</span></p>
          </div>
      </div>


      <div class="mt-10">
        <div class="grid grid-cols-1 sm:grid-cols-6 max-w-5xl pt-8 sm:px-12 m-auto items-center ">
          <div class="col-span-1">
            <span class="font-extrabold">توضیحات :</span>
          </div>

          <div class="col-span-5">
            <p class="leading-8 text-base text-justify">
              در حال حاضر عملیات متفاوت مربوط به دامنه نظیر ثبت، تمدید، انتقال، تغییر NS و ... با اختلال مواجه است. تیم مربوطه در حال پیگیری و رفع این موضوع می‌باشد. از شکیبایی شما سپاسگزاریم.

            </p>
          </div>
        </div>
      </div>


      <div class="mt-10 border-t-2 border-y-gray-50 ">
        <div class="grid grid-cols-1 sm:grid-cols-6 max-w-5xl items-center py-8 sm:px-12 m-auto">
          <div class="col-span-1">
            <span class="font-extrabold">بروزرسانی :</span>
          </div>

          <div class="col-span-5">
            <p class="leading-8 text-base border-dashed pb-3 border-b-2 text-justify">
              مشکل برطرف شده است. از همراهی شما سپاسگزاریم.
            </p>
            <p class="mt-3">۱۰ مهر ۱۲:۳۲</p>
          </div>
        </div>
      </div>

      <div class="alert alert-success text-white shadow-lg max-w-5xl m-auto">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span>رفع شده : این اختلال در تاریخ 10 مهر 1401 برطرف شد.</span>
        </div>
      </div>

  </div>
</section>





  @section('footer-scripts')
 
    
  @endsection

  

@endsection