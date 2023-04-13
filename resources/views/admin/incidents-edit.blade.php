@extends('layouts.admin')
@section('title' , 'ویرایش رویداد')



@section('header-scripts')

@endsection


@section('content')

{{-- start user create & edit --}}

<div class="w-full px-6 pt-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">

      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">

              <div>
                <div class="p-4 px-4 md:p-8">
                  <div class="grid gap-4 gap-y-2 text-sm grid-cols-1">
      
                    <div class="lg:col-span-2">
                      <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-12">
                        <div class="md:col-span-8">
                          <label for="Title">عنوان رویداد</label>
                          <input type="text" name="Title" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="اختلال در انجام عملیات مربوط دامنه                          " />
                          @error('Title')
                          {{$message}}
                          @enderror
                        </div>

                        <div class="md:col-span-4">
                          <label for="Status">نام سرور</label>
                          <select name="Status" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                              <option value="1" selected hidden>HS1</option>
                              <option value="1"  >HS1</option>
                              <option value="0"  >HS2</option>     
                            </select>
                               @error('Status')
                               {{$message}}
                              @enderror
                        </div>


                        <div class="md:col-span-12">
                          <label for="Description">توضیحات</label>
                          <textarea rows="4" name="Description" class="border mt-1 rounded px-4 w-full bg-gray-50" value="" ></textarea>
                          @error('Description')
                          {{$message}}
                          @enderror
                        </div>

      


                          <div class="md:col-span-2">
                            <label for="Type">نوع رویداد</label>
                            <select name="Type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                <option value="1" selected hidden>بحرانی</option>
                                <option value="1"  >بحرانی</option>
                                <option value="0"  >اختلال</option>     
                              </select>
                                 @error('Type')
                                 {{$message}}
                                @enderror
                          </div>

                          <div class="md:col-span-2">
                            <label for="role">دسته بندی</label>
                            <select name="role" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                <option value="1" selected hidden>دامنه</option>
                                <option value="1"  >دامنه</option>
                                <option value="0"  >سرور</option>     
                              </select>
                                 @error('role')
                                 {{$message}}
                                @enderror
                          </div>


                          <div class="md:col-span-2">
                            <label for="role">تاریخ شروع</label>

                            <div class="flex items-center justify-center">
                              <div
                                class="ltr relative mb-3 xl:w-96"
                                data-te-datepicker-init
                                data-te-input-wrapper-init>
                                <input value="02/03/2023"
                                  type="text"
                                  class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                  placeholder="Select a date" />
                                <label
                                  for="floatingInput"
                                  class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                  >انتخاب تاریخ</label
                                >
                              </div>
                            </div>
                          </div>



                          <div class="md:col-span-2">
                            <label for="role">زمان شروع</label>

                            <div class="flex items-center justify-center">
                              <div
                              class="ltr relative mb-3 xl:w-96"
                              id="timepicker-inline-24"
                              data-te-input-wrapper-init>
                              <input value="12:00"
                                type="text"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="form3" />
                              <label
                                for="form3"
                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                >انتخاب زمان</label
                              >
                            </div>
                            </div>
                          </div>


                          <div class="md:col-span-2">
                            <label for="role">تاریخ پایان</label>

                            <div class="flex items-center justify-center">
                              <div
                                class="ltr relative mb-3 xl:w-96"
                                data-te-datepicker-init
                                data-te-input-wrapper-init>
                                <input value="04/03/2023"
                                  type="text"
                                  class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                  placeholder="Select a date" />
                                <label
                                  for="floatingInput"
                                  class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                  >انتخاب تاریخ</label
                                >
                              </div>
                            </div>
                          </div>
      
                          <div class="md:col-span-2">
                            <label for="role">زمان پایان</label>
                            <div class="flex items-center justify-center">
                              <div
                              class="ltr relative mb-3 xl:w-96"
                              id="timepicker-inline-25"
                              data-te-input-wrapper-init>
                              <input value="12:00"
                                type="text"
                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="form3" />
                              <label
                                for="form3"
                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                >انتخاب زمان</label
                              >
                            </div>
                        </div>

      
                        <div class="md:col-span-6 text-left">
                          <div class="inline-flex items-end">
                     
                            <button class="w-30 bg-gradient-to-tr from-[#52ABD9] to-[#2E7AD6] text-white font-bold py-2 px-3 rounded">ذخیره رویداد</button>
                            <button class="w-30 bg-gradient-to-tr mr-2 from-[#ec3a3a] to-[#a3192c] text-white font-bold py-2 px-3 rounded">بازگشت</button>

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
{{-- end user create & edit --}}







{{--start  users table --}}
<div class="w-full py-6 mx-auto">

  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex items-center justify-between">
          <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex space-x-reverse space-x-2 text-[#52ABD9]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
            <h6 class="text-[#2E7AD6]">لیست بروزرسانی ها</h6>
          </div>
  
          <div class="relative text-gray-600 pl-6">
            <input type="search" name="serch" placeholder="جستجو ..." class="bg-white h-10 px-5 pr-10 rounded-xl text-sm focus:outline-none">
            <button type="submit" class="absolute right-0 top-0 mt-2 mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
              </svg>
              
            </button>
          </div>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto ps">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <thead class="align-bottom">
                <tr>
                  <th class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                    </svg>
                    </th>
                  <th class="px-6 py-3 pl-2 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                    متن بروزرسانی</th>
                    <th class="py-3 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                                      
                       نویسنده </th>
                  <th class="px-6 py-3 pl-2 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>                    
                     تاریخ انتشار </th>
                  <th class="text-center px-6 py-3 pl-2 font-bold uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    عملیات</th>
                </tr>
              </thead>
              <tbody>
                <tr class="">
                  <td class="text-center p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 font-semibold leading-tight text-xs">731</p>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">

                      <div class="flex flex-col justify-center">
                        <p class="mb-2 leading-normal text-sm">در حال حاضر عملیات متفاوت مربوط به دامنه نظیر ثبت، تمدید، انتقال، تغییر NS و ... با اختلال مواجه است. تیم مربوطه در حال پیگیری و رفع این موضوع می‌باشد. از شکیبایی شما سپاسگزاریم.
                        </p>

                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 font-semibold leading-tight text-xs  bg-sky-500 text-white rounded-full p-1 text-center">admin</p>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 leading-tight text-xs  bg-green-500 text-white rounded-full p-1 text-center">23 اسفند 1401 - 14:30</p>
                  </td>

                  <div
                  data-te-modal-init
                  class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                  id="exampleModalCenteredScrollable"
                  tabindex="-1"
                  aria-labelledby="exampleModalCenteredScrollable"
                  aria-modal="true"
                  role="dialog">
                  <div
                    data-te-modal-dialog-ref
                    class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                    <div
                      class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                      <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <h5
                          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                          id="exampleModalCenteredScrollableLabel">
                          ویرایش بروزرسانی
                        </h5>
                        <button
                          type="button"
                          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                          data-te-modal-dismiss
                          aria-label="Close">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6">
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M6 18L18 6M6 6l12 12" />
                          </svg>
                        </button>
                      </div>
                      <div class="relative p-4">
                        <textarea class="border mt-1 rounded px-4 w-full h-60 bg-gray-50">در حال حاضر عملیات متفاوت مربوط به دامنه نظیر ثبت، تمدید، انتقال، تغییر NS و ... با اختلال مواجه است. تیم مربوطه در حال پیگیری و رفع این موضوع می‌باشد. از شکیبایی شما سپاسگزاریم.
                        </textarea>
                       </div>
                      <div
                        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <button
                          type="button"
                          class="inline-block rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                          data-te-modal-dismiss
                          data-te-ripple-init
                          data-te-ripple-color="light">
                          بستن
                        </button>
                        <button
                          type="button"
                          class="ml-1 inline-block rounded !bg-blue-600 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] "
                         >
                          ذخیره
                        </button>
                      </div>
                    </div>
                  </div>
                </div>


                   <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="" data-te-dropdown-ref>
                      <button
                        class="flex items-center m-auto whitespace-nowrap rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-[#2E7AD6]  transition duration-150 ease-in-out ]"
                        type="button"
                        id="dropdownMenuButton1d"
                        data-te-dropdown-toggle-ref
                        aria-expanded="false"
                        data-te-ripple-init
                        data-te-ripple-color="light">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>                       
                                              
                      </button>
                      <ul
                        class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton1d"
                        data-te-dropdown-menu-ref>
                        <li>
                          <a  type="button" data-te-toggle="modal" data-te-target="#exampleModalCenteredScrollable"
                            class="text-right block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                            href="#"
                            data-te-dropdown-item-ref>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                            ویرایش</a>

                        </li>
                        <li>
                          <a
                            class="text-right block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                            href="#"
                            data-te-dropdown-item-ref>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                            حذف</a>
                        </li>
                      </ul>
                    </div>                    
                  </td>







                </tr>

              </tbody>
            </table>
          <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
      
         <div class="px-4 py-2"></div> 
       
        </div>
      </div>
    </div>
  </div>

</div>


  
@endsection




@section('footer-scripts')
<script>
const pickerInline2 = document.querySelector("#timepicker-inline-24");
const timepickerMaxMin2 = new te.Timepicker(pickerInline2, { format24:
true, inline: true, });
  </script>

<script>
  const pickerInline3 = document.querySelector("#timepicker-inline-25");
  const timepickerMaxMin3 = new te.Timepicker(pickerInline3, { format24:
  true, inline: true, });
    </script>
@endsection
