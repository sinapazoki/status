@extends('layouts.admin')
@section('title' , 'داشبورد')



@section('header-scripts')

@endsection


@section('content')

      <!-- cards -->
      <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
          <!-- card1 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex items-center w-2/3 max-w-full px-3">
                    <span class="flex h-5 w-5 ml-4 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-5 w-5 bg-green-500"></span>
                      </span>
                    <div>
                      <p class="mb-0 font-sans font-semibold leading-normal">سرور فعال</p>
                        <a class="leading-normal text-sm font-weight-bolder text-blue-600">نمایش همه</a>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="flex items-center mr-auto w-12 h-12 text-center rounded-lg bg-gradient-to-tr from-[#52ABD9] to-[#2E7AD6]">
                        <span class="m-auto font-bold leading-normal text-xl font-weight-bolder text-white">12</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card2 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex items-center w-2/3 max-w-full px-3">
                    <span class="flex h-5 w-5 ml-4 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-5 w-5 bg-red-500"></span>
                      </span>
                    <div>
                      <p class="mb-0 font-sans font-semibold leading-normal">سرور خاموش</p>
                        <a class="leading-normal text-sm font-weight-bolder text-blue-600">نمایش همه</a>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="flex items-center mr-auto w-12 h-12 text-center rounded-lg bg-gradient-to-tr from-[#52ABD9] to-[#2E7AD6]">
                        <span class="m-auto font-bold leading-normal text-xl font-weight-bolder text-white">12</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card3 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex items-center w-2/3 max-w-full px-3">
                    <span class="flex h-5 w-5 ml-4 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-gray-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-5 w-5 bg-gray-500"></span>
                      </span>
                    <div>
                      <p class="mb-0 font-sans font-semibold leading-normal">سرور غیرفعال</p>
                        <a class="leading-normal text-sm font-weight-bolder text-blue-600">نمایش همه</a>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="flex items-center mr-auto w-12 h-12 text-center rounded-lg bg-gradient-to-tr from-[#52ABD9] to-[#2E7AD6]">
                        <span class="m-auto font-bold leading-normal text-xl font-weight-bolder text-white">12</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card4 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex items-center w-2/3 max-w-full px-3">
                    <span class="flex h-5 w-5 ml-4 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-5 w-5 bg-blue-500"></span>
                      </span>
                    <div>
                      <p class="mb-0 font-sans font-semibold leading-normal">رویداد درحال پیگیری</p>
                        <a class="leading-normal text-sm font-weight-bolder text-blue-600">نمایش همه</a>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="flex items-center mr-auto w-12 h-12 text-center rounded-lg bg-gradient-to-tr from-[#52ABD9] to-[#2E7AD6]">
                        <span class="m-auto font-bold leading-normal text-xl font-weight-bolder text-white">12</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

   

       
        <div class="flex flex-wrap my-6 -mx-3">
          <!-- card 1 -->

          <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
              <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                <div class="flex flex-wrap mt-0 -mx-3">
                  <div class="w-7/12 max-w-full px-3 mt-0 lg:w-1/2 flex space-x-reverse space-x-2 text-[#52ABD9]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    
                    <h6 class="text-[#2E7AD6]">خلاصه وضعیت سرورها</h6>

                  </div>

                </div>
              </div>
              <div class="flex-auto p-2 px-0 pb-2">
                <div class="overflow-x-auto">
                  <table BORDER=0 CELLSPACING=0 class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold tracking-normal uppercase align-middle bg-transparent border-b letter border-b-solid text-center text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">#</th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                          </svg> نام سرور
                        </th>
                        <th class="px-6 py-3 pl-2 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 19.5v-.75a7.5 7.5 0 00-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                          </svg>                          
                          پینگ</th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                          </svg>                          
                          آخرین بروزرسانی</th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125z" />
                          </svg>                              
                          میانگین وضعیت</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap w-1 text-center">
                            <div class="mt-2 font-semibold leading-tight text-xs">1</div>
                          </td>
                            <td class="p-2 text-center  align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="flex px-2 py-1 justify-center">
                                <div>
                                  <img src="{{asset('storage/admin-image/logo_2.png')}}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="xd" />
                                </div>
                                <div class="flex flex-col justify-center">
                                  <h6 class="mb-0 leading-normal text-sm">Server 1 Name</h6>
                                </div>
                              </div>
                            </td>
                            <td class="p-2 align-middle text-center  bg-transparent border-b whitespace-nowrap">
                              <div class="mt-2 font-semibold leading-tight text-xs">
                                178ms
                              </div>
                            </td>
                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                              <p class="mb-0 leading-tight text-xs text-slate-400">23 اسفند 1401 - 14:30</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="w-3/4 mx-auto text-center">
                                <div>
                                  <div>
                                    <span class="font-semibold leading-tight text-xs">60%</span>
                                  </div>
                                </div>
                                <div class="m-auto text-xs h-0.75 w-30 flex overflow-visible rounded-lg bg-gray-200">
                                  <div class="mr-auto duration-600 ease-soft bg-gradient-to-tr from-blue-600 to-cyan-400 -mt-0.38  flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr class="hover:bg-gray-100">
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap w-1 text-center">
                              <div class="mt-2 font-semibold leading-tight text-xs">2</div>
                            </td>
                            <td class="text-center  p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="flex px-2 py-1 justify-center">
                                <div>
                                  <img src="{{asset('storage/admin-image/logo_2.png')}}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="xd" />
                                </div>
                                <div class="flex flex-col justify-center">
                                  <h6 class="mb-0 leading-normal text-sm">Server 1 Name</h6>
                                </div>
                              </div>
                            </td>
                            <td class="text-center  p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="mt-2 font-semibold leading-tight text-xs">
                                178ms
                              </div>
                            </td>
                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                              <p class="mb-0 leading-tight text-xs text-slate-400">23 اسفند 1401 - 14:30</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="w-3/4 mx-auto text-center">
                                <div>
                                  <div>
                                    <span class="font-semibold leading-tight text-xs">60%</span>
                                  </div>
                                </div>
                                <div class="m-auto text-xs h-0.75 w-30 flex overflow-visible rounded-lg bg-gray-200">
                                  <div class="mr-auto duration-600 ease-soft bg-gradient-to-tr from-blue-600 to-cyan-400 -mt-0.38  flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover:bg-gray-100">
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap w-1 text-center">
                              <div class="mt-2 font-semibold leading-tight text-xs">3</div>
                            </td>
                            <td class="text-center p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="flex px-2 py-1 justify-center">
                                <div>
                                  <img src="{{asset('storage/admin-image/logo_2.png')}}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="xd" />
                                </div>
                                <div class="flex flex-col justify-center">
                                  <h6 class="mb-0 leading-normal text-sm">Server 1 Name</h6>
                                </div>
                              </div>
                            </td>
                            <td class="text-center  p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="mt-2 font-semibold leading-tight text-xs">
                                178ms
                              </div>
                            </td>
                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                              <p class="mb-0 leading-tight text-xs text-slate-400">23 اسفند 1401 - 14:30</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="w-3/4 mx-auto text-center">
                                <div>
                                  <div>
                                    <span class="font-semibold leading-tight text-xs">60%</span>
                                  </div>
                                </div>
                                <div class="m-auto text-xs h-0.75 w-30 flex overflow-visible rounded-lg bg-gray-200">
                                  <div class="mr-auto duration-600 ease-soft bg-gradient-to-tr from-blue-600 to-cyan-400 -mt-0.38  flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover:bg-gray-100">
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap w-1 text-center">
                              <div class="mt-2 font-semibold leading-tight text-xs">4</div>
                            </td>
                            <td class="text-center p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="flex px-2 py-1 justify-center">
                                <div>
                                  <img src="{{asset('storage/admin-image/logo_2.png')}}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="xd" />
                                </div>
                                <div class="flex flex-col justify-center">
                                  <h6 class="mb-0 leading-normal text-sm">Server 1 Name</h6>
                                </div>
                              </div>
                            </td>
                            <td class="text-center p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="mt-2 font-semibold leading-tight text-xs">
                                178ms
                              </div>
                            </td>
                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                              <p class="mb-0 leading-tight text-xs text-slate-400">23 اسفند 1401 - 14:30</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="w-3/4 mx-auto text-center">
                                <div>
                                  <div>
                                    <span class="font-semibold leading-tight text-xs">60%</span>
                                  </div>
                                </div>
                                <div class="m-auto text-xs h-0.75 w-30 flex overflow-visible rounded-lg bg-gray-200">
                                  <div class="mr-auto duration-600 ease-soft bg-gradient-to-tr from-blue-600 to-cyan-400 -mt-0.38  flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover:bg-gray-100">
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap w-1 text-center">
                              <div class="mt-2 font-semibold leading-tight text-xs">5</div>
                            </td>
                            <td class="text-center p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="flex px-2 py-1 justify-center">
                                <div>
                                  <img src="{{asset('storage/admin-image/logo_2.png')}}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="xd" />
                                </div>
                                <div class="flex flex-col justify-center">
                                  <h6 class="mb-0 leading-normal text-sm">Server 1 Name</h6>
                                </div>
                              </div>
                            </td>
                            <td class="text-center p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="mt-2 font-semibold leading-tight text-xs">
                                178ms
                              </div>
                            </td>
                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                              <p class="mb-0 leading-tight text-xs text-slate-400">23 اسفند 1401 - 14:30</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="w-3/4 mx-auto text-center">
                                <div>
                                  <div>
                                    <span class="font-semibold leading-tight text-xs">60%</span>
                                  </div>
                                </div>
                                <div class="m-auto text-xs h-0.75 w-30 flex overflow-visible rounded-lg bg-gray-200">
                                  <div class="mr-auto duration-600 ease-soft bg-gradient-to-tr from-blue-600 to-cyan-400 -mt-0.38  flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover:bg-gray-100">
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap w-1 text-center">
                              <div class="mt-2 font-semibold leading-tight text-xs">6</div>
                            </td>
                            <td class="text-center p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="flex px-2 py-1 justify-center">
                                <div>
                                  <img src="{{asset('storage/admin-image/logo_2.png')}}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="xd" />
                                </div>
                                <div class="flex flex-col justify-center">
                                  <h6 class="mb-0 leading-normal text-sm">Server 1 Name</h6>
                                </div>
                              </div>
                            </td>
                            <td class="text-center p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="mt-2 font-semibold leading-tight text-xs">
                                178ms
                              </div>
                            </td>
                            <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                              <p class="mb-0 leading-tight text-xs text-slate-400">23 اسفند 1401 - 14:30</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                              <div class="w-3/4 mx-auto text-center">
                                <div>
                                  <div>
                                    <span class="font-semibold leading-tight text-xs">60%</span>
                                  </div>
                                </div>
                                <div class="m-auto text-xs h-0.75 w-30 flex overflow-visible rounded-lg bg-gray-200">
                                  <div class="mr-auto duration-600 ease-soft bg-gradient-to-tr from-blue-600 to-cyan-400 -mt-0.38  flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- card 2 -->

          <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
              <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0 flex space-x-reverse space-x-2 text-[#52ABD9]">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
                
                <h6 class="text-[#2E7AD6]">آخرین رویدادهای فعال</h6>
              </div>
              <div class="flex-auto p-4">
                <div class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                  <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                      <i data-feather="alert-circle"></i>
                    </span>
                    <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                      <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">$2400, Design changes</h6>
                      <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">22 DEC 7:20 PM</p>
                    </div>
                  </div>
                  <div class="relative mb-4 after:clear-both after:table after:content-['']">
                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                        <i data-feather="alert-circle"></i>
                    </span>
                    <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                      <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">New order #1832412</h6>
                      <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">21 DEC 11 PM</p>
                    </div>
                  </div>
                  <div class="relative mb-4 after:clear-both after:table after:content-['']">
                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                        <i data-feather="alert-circle"></i>
                    </span>
                    <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                      <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Server payments for April</h6>
                      <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">21 DEC 9:34 PM</p>
                    </div>
                  </div>
                  <div class="relative mb-4 after:clear-both after:table after:content-['']">
                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                        <i data-feather="alert-circle"></i>
                    </span>
                    <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                      <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">New card added for order #4395133</h6>
                      <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">20 DEC 2:20 AM</p>
                    </div>
                  </div>
                  <div class="relative mb-4 after:clear-both after:table after:content-['']">
                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                        <i data-feather="alert-circle"></i>
                    </span>
                    <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                      <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Unlock packages for development</h6>
                      <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">18 DEC 4:54 AM</p>
                    </div>
                  </div>
                  <div class="relative mb-0 after:clear-both after:table after:content-['']">
                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                        <i data-feather="alert-circle"></i>
                    </span>
                    <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                      <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">New order #9583120</h6>
                      <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">17 DEC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end cards -->

@endsection




@section('footer-scripts')

@endsection
