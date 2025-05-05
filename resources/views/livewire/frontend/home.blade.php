@push('styles')
    <style>
        button {
            margin: 0 !important;
        }

        swiper-container {
            width: 100%;
            height: 100%;
            background: #4d4c4c;
        }

        swiper-slide {
            font-size: 18px;
            color: #fff;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 40px 60px;
        }

        .parallax-bg {
            position: absolute;
            left: 0;
            top: 0;
            width: 130%;
            height: 100%;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center;
        }

        swiper-slide .title {
            font-size: 41px;
            font-weight: 300;
        }

        swiper-slide .subtitle {
            font-size: 21px;
        }

        swiper-slide .text {
            font-size: 14px;
            max-width: 400px;
            line-height: 1.3;
        }

        {{--  slider 4  --}} .swiper4 swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper4swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .swiper4 swiper-slide img {
            display: block;
            width: 100%;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endpush
<div class="">


    <nav class="bg-white dark:bg-gray-900 antialiased position-sticky shadow-md px-9">
        <div class="px-4 2xl:px-0 py-2">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-8">
                    <div class="shrink-0">
                        <a href="#" title="" class="">
                            <img class="block w-auto h-8 dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/logo-full.svg" alt="">
                            <img class="hidden w-auto h-8 dark:block"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/logo-full-dark.svg"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="flex items-center lg:space-x-2">

                    <button type="button" data-popover-target="popover-deleverto"
                        class="hidden lg:inline-flex md:inline-flex  items-center rounded-lg justify-center p-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white">
                        <svg class="w-4 h-4 text-gray-900 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p>AF</p>
                    </button>
                    <div data-popover id="popover-deleverto" role="tooltip"
                        class="shadow-lg absolute z-50 invisible inline-block w-80 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:bg-gray-900 dark:border-gray-600 pb-3">
                        <div class="p-3">
                            <p class="my-2">
                                <strong class="text-lg font-bold dark:text-white">Specify your location</strong>
                                Shipping options and fees vary based on your location and positions.
                            </p>
                            <button type="button"
                                class="w-full text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center  items-center justify-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                                Sign in to add address
                            </button>

                            <div class="inline-flex items-center justify-center w-full">
                                <hr class="w-64 h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                                <span
                                    class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">or</span>
                            </div>


                            <label for="select_address_country"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                language</label>
                            <select id="select_address_country"
                                class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Afghanishtan</option>
                                <option>Pakistan</option>
                                <option>China</option>
                            </select>

                            <input type="text" id="small-input" placeholder="Enter ZIP or postal code"
                                class="block w-full p-2 mt-2 h-[30px] text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">


                        </div>

                        <div data-popper-arrow></div>
                    </div>
                    <button type="button" data-popover-target="popover-system-language-currency"
                        class="hidden lg:inline-flex md:inline-flex  items-center rounded-lg justify-center p-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white">
                        <svg class="w-4 h-4 text-gray-900 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M4.37 7.657c2.063.528 2.396 2.806 3.202 3.87 1.07 1.413 2.075 1.228 3.192 2.644 1.805 2.289 1.312 5.705 1.312 6.705M20 15h-1a4 4 0 0 0-4 4v1M8.587 3.992c0 .822.112 1.886 1.515 2.58 1.402.693 2.918.351 2.918 2.334 0 .276 0 2.008 1.972 2.008 2.026.031 2.026-1.678 2.026-2.008 0-.65.527-.9 1.177-.9H20M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg> &nbsp; En - USD
                    </button>
                    <div data-popover id="popover-system-language-currency" role="tooltip"
                        class="shadow-lg absolute z-50 invisible inline-block pb-3  w-80 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:bg-gray-900 dark:border-gray-600">
                        <div class="p-3">
                            <p>

                                <strong class="text-lg font-bold dark:text-white">Set language and currency</strong>

                                Select your preferred language and currency. You can update the settings at any time.
                            </p>

                            <label for="select_languages"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                language</label>
                            <select id="select_languages"
                                class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>فارسی</option>
                                <option>پشتو</option>
                                <option selected>English</option>
                            </select>
                            <label for="select_currency"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                currency</label>
                            <select id="select_currency"
                                class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <option>Doller ($)</option>
                                <option>Afghani (af)</option>
                            </select>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                    <!-- Dropdown -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700"
                        id="language-dropdown-menu">
                        <ul class="py-2 font-medium" role="none">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">
                                    <div class="inline-flex items-center">
                                        English
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">
                                    <div class="inline-flex items-center">
                                        فارسی
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">
                                    <div class="inline-flex items-center">
                                        پشتو
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button id="login-profile" type="button"
                        class="hidden lg:inline-flex md:inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white">
                        <svg class="w-5 h-5 text-gray-900 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 10.5h.01m-4.01 0h.01M8 10.5h.01M5 5h14a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-6.6a1 1 0 0 0-.69.275l-2.866 2.723A.5.5 0 0 1 8 18.635V17a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />
                        </svg>
                    </button>
                    <button id="shopping-cart" type="button"
                        class="hidden lg:inline-flex md:inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white">
                        <svg class="w-5 h-5 text-gray-900 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                        </svg>
                    </button>
                    <button id="login-profile" type="button"
                        class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white">
                        <svg class="w-5 h-5 text-gray-900 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <span>Login</span>
                    </button>
                    <button id="theme-toggle" type="button"
                        class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button type="button" data-drawer-target="drawer-navigation"
                        data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"
                        class="inline-flex lg:hidden md:hidden items-center justify-center hover:bg-gray-100 rounded-md dark:hover:bg-gray-700 p-2 text-gray-900 dark:text-white">
                        <span class="sr-only">
                            Open Menu
                        </span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M5 7h14M5 12h14M5 17h14" />
                        </svg>
                    </button>
                </div>

            </div>
            {{--  $(selected).search(searcher);  --}}


            <!-- drawer component -->
            <div id="drawer-navigation"
                class="fixed top-0 left-0 z-50 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 dark:bg-gray-900"
                tabindex="-1" aria-labelledby="drawer-navigation-label">
                <h5 id="drawer-navigation-label"
                    class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
                <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <div class="py-4 overflow-y-auto">
                    <ul class="space-y-2 font-medium">
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 22 21">
                                    <path
                                        d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                    <path
                                        d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                </svg>
                                <span class="ms-3">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 18 21">
                                    <path
                                        d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                                </svg>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">E-commerce</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 18 18">
                                    <path
                                        d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Kanban</span>
                                <span
                                    class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-900 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                                <span
                                    class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-900 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 18">
                                    <path
                                        d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 18 20">
                                    <path
                                        d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 18 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                    <path
                                        d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                                    <path
                                        d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div class="bg-white dark:bg-gray-900 antialiased sticky top-0  shadow-md px-9 z-30" id="sticky-menu">
        <div class="px-4 2xl:px-0 py-2">
            <div class="block  md:flex items-center justify-between">
                <div class="items-center space-x-8  lg:flex md:flex hidden">
                    <div class="shrink-0">
                        <ul
                            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-700 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                    aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex items-center content-center w-full">
                    <form class="max-w-md  lg:ms-auto  w-full">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full h-[40px] p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Mockups, Logos..." required />
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <swiper-container style="--swiper-navigation-color: #1d4ed8; --swiper-pagination-color: #1d4ed8;  height: 500px;"
        class="mySwiper swiper1 z-20" speed="600" parallax="true" pagination="true" pagination-clickable="true"
        navigation="false" {{--  autoplay="false" autoplay-delay="false"       --}} loop="false">
        <!-- Parallax Background -->
        <div slot="container-start" class="parallax-bg absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url({{ asset('assets/frontend/banner.jpg') }});" data-swiper-parallax="-23%">
        </div>

        <!-- Slide 1 -->
        <swiper-slide>
            <div class="flex flex-col items-center justify-center h-full text-center px-4">
                <h2 class="text-4xl font-extrabold tracking-tight leading-none text-gray-400 dark:text-white"
                    data-swiper-parallax="-300">
                    Slide 1
                </h2>
                <h3 class="mt-4 text-lg font-medium text-gray-400 dark:text-gray-300" data-swiper-parallax="-200">
                    Subtitle
                </h3>
                <p class="mt-6 max-w-2xl text-base text-gray-400 dark:text-gray-400" data-swiper-parallax="-100">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla laoreet justo vitae porttitor
                    porttitor.
                </p>
            </div>
        </swiper-slide>

        <!-- Slide 2 -->
        <swiper-slide>
            <div class="flex flex-col items-center justify-center h-full text-center px-4">
                <h2 class="text-4xl font-extrabold tracking-tight leading-none text-gray-400 dark:text-white"
                    data-swiper-parallax="-300">
                    Slide 2
                </h2>
                <h3 class="mt-4 text-lg font-medium text-gray-400 dark:text-gray-300" data-swiper-parallax="-200">
                    Subtitle
                </h3>
                <p class="mt-6 max-w-2xl text-base text-gray-400 dark:text-gray-400" data-swiper-parallax="-100">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla laoreet justo vitae porttitor
                    porttitor.
                </p>
            </div>
        </swiper-slide>

        <!-- Slide 3 -->
        <swiper-slide>
            <div class="flex flex-col items-center justify-center h-full text-center px-4">
                <h2 class="text-4xl font-extrabold tracking-tight leading-none text-gray-400 dark:text-white"
                    data-swiper-parallax="-300">
                    Slide 3
                </h2>
                <h3 class="mt-4 text-lg font-medium text-gray-400 dark:text-gray-300" data-swiper-parallax="-200">
                    Subtitle
                </h3>
                <p class="mt-6 max-w-2xl text-base text-gray-400 dark:text-gray-400" data-swiper-parallax="-100">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla laoreet justo vitae porttitor
                    porttitor.
                </p>
            </div>
        </swiper-slide>
    </swiper-container>

    <div class="bg-gray-100 dark:bg-gray-900 relative z-20 px-9 py-2 ">
        <div class="mt-[-200px] grid grid-cols-1 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-4 ">
            <div
                class=" bg-white  dark:bg-gray-800  h-auto  shadow dark:shadow-none dark:border dark:border-slate-700 rounded  p-2">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
                    </div>
                </div>
            </div>
            <div
                class=" bg-white  dark:bg-gray-800  h-auto  shadow dark:shadow-none dark:border dark:border-slate-700 rounded  p-2">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
                    </div>
                </div>
            </div>
            <div
                class=" bg-white  dark:bg-gray-800  h-auto  shadow dark:shadow-none dark:border dark:border-slate-700 rounded   p-2">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="">
                    </div>
                    <div class="grid grid-cols-3 gap-1">
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg"
                                alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div
                class=" bg-white  dark:bg-gray-800  h-auto  shadow dark:shadow-none dark:border dark:border-slate-700 rounded   p-2">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-1">
                    <div class="grid gap-5">
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="grid gap-5">
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="grid gap-5">
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg"
                                alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg"
                                alt="">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class=" px-9 py-2 text-black dark:text-white bg-gray-100 dark:bg-gray-900">
        <div
            class="text-black dark:text-white bg-white dark:bg-gray-800 shadow-sm dark:shadow-none dark:border dark:border-slate-700 rounded">


            <div class="p-2 text-2xl font-semibold text-bold">Shop By Category</div>
            <hr class="h-px mb-3 bg-gray-200 border-0 dark:bg-gray-900">
            <swiper-container class="mySwiper swiper2 bg-transparent" space-between="10" free-mode="true"
                breakpoints='{
        "320": { "slidesPerView": 2 },
        "640": { "slidesPerView": 3 },
        "768": { "slidesPerView": 5 },
        "1024": { "slidesPerView": 7 },
        "1280": { "slidesPerView": 10 }
    }'>

                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">
                    <div class="text-3xl">🍗</div>
                    <small class="mt-1 text-xs">مواد غذایی</small>
                </swiper-slide>

                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">
                    <div class="text-3xl">👗</div>
                    <small class="mt-1 text-xs">پوشاک</small>
                </swiper-slide>

                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">
                    <div class="text-3xl">📱</div>
                    <small class="mt-1 text-xs">موبایل و لوازم</small>
                </swiper-slide>

                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">
                    <div class="text-3xl">🏠</div>
                    <small class="mt-1 text-xs">لوازم خانگی</small>
                </swiper-slide>

                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">
                    <div class="text-3xl">💻</div>
                    <small class="mt-1 text-xs">الکترونیکی</small>
                </swiper-slide>

                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">
                    <div class="text-3xl">📚</div>
                    <small class="mt-1 text-xs">کتاب و تحریر</small>
                </swiper-slide>

                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">
                    <div class="text-3xl">🧸</div>
                    <small class="mt-1 text-xs">اسباب بازی</small>
                </swiper-slide>

                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">
                    <div class="text-3xl">👟</div>
                    <small class="mt-1 text-xs">کفش و بوت</small>
                </swiper-slide>

                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">
                    <div class="text-3xl">💄</div>
                    <small class="mt-1 text-xs">آرایشی</small>
                </swiper-slide>

                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">
                    <div class="text-3xl">🛠</div>
                    <small class="mt-1 text-xs">ابزار</small>
                </swiper-slide>

            </swiper-container>

            <hr class="h-px mb-3 bg-gray-200 border-0 dark:bg-gray-900">
            <div class="p-0 m-0 pb-2 ">
                <swiper-container class="mySwiper swiper-tags p-0 m-0 bg-transparent" space-between="1"
                    free-mode="true"
                    breakpoints='{
                        "320": { "slidesPerView": 3 },
                        "640": { "slidesPerView": 4 },
                        "768": { "slidesPerView": 6 },
                        "1024": { "slidesPerView": 8 },
                        "1280": { "slidesPerView": 10 }
                    }'>

                    <swiper-slide
                        class="p-0 m-0 bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-200 text-xs px-3 py-1 rounded-full text-center">
                        #آیفون
                    </swiper-slide>

                    <swiper-slide
                        class="p-0 m-0 bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-200 text-xs px-3 py-1 rounded-full text-center">
                        #کفش_ورزشی
                    </swiper-slide>

                    <swiper-slide
                        class="p-0 m-0 bg-pink-100 text-pink-700 dark:bg-pink-900 dark:text-pink-200 text-xs px-3 py-1 rounded-full text-center">
                        #رژلب
                    </swiper-slide>

                    <!-- ادامه تگ‌ها... -->

                </swiper-container>
            </div>


        </div>
    </div>

    <div class=" px-9 py-2 text-black dark:text-white bg-gray-100 dark:bg-gray-900">
        <div
            class="text-black dark:text-white bg-white dark:bg-gray-800 shadow-sm dark:shadow-none dark:border dark:border-slate-700 rounded">
            <div class="p-2 text-2xl font-semibold text-bold">Most Viewed</div>
            <hr class="h-px mb-3 bg-gray-200 border-0 dark:bg-gray-900">
            <swiper-container class="mySwiper swiper2 bg-transparent" space-between="10" free-mode="true"
                breakpoints='{
                            "320": { "slidesPerView": 2 },
                            "640": { "slidesPerView": 2 },
                            "768": { "slidesPerView": 3 },
                            "1024": { "slidesPerView": 6 },
                            "1280": { "slidesPerView": 6 }
                            }'>

                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>


            </swiper-container>


        </div>
    </div>
    <div class=" px-9 py-2 text-black dark:text-white bg-gray-100 dark:bg-gray-900">
        <div
            class="p-2 grid grid-cols-2 gap-2 text-black dark:text-white bg-white dark:bg-gray-800 shadow-sm dark:shadow-none dark:border dark:border-slate-700 rounded">
            <div
                class="flex flex-col md:flex-row md:gap-6 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                <!-- اسلایدر مربع شکل -->
                <div class="w-full md:w-auto flex justify-center items-center p-4">
                    <swiper-container class="mySwiper w-[200px] h-[200px] bg-transparent" effect="cards"
                        grab-cursor="true">
                        <swiper-slide class="rounded bg-red-900 text-white flex items-center justify-center">Slide
                            1</swiper-slide>
                        <swiper-slide class="rounded bg-green-600 text-white flex items-center justify-center">Slide
                            2</swiper-slide>
                        <swiper-slide class="rounded bg-yellow-600 text-white flex items-center justify-center">Slide
                            3</swiper-slide>
                    </swiper-container>
                </div>

                <!-- متن -->
                <div class="flex flex-col justify-between p-4 flex-grow">
                    <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-2">کالا یا دسته‌بندی خاص</h5>
                    <p class="text-sm text-gray-700 dark:text-gray-400">توضیح مختصر درباره این مورد پرفروش که توجه
                        زیادی به خود جلب کرده است.</p>
                </div>
            </div>
            <div
                class="flex flex-col md:flex-row md:gap-6 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                <!-- اسلایدر مربع شکل -->
                <div class="w-full md:w-auto flex justify-center items-center p-4">
                    <swiper-container class="mySwiper w-[200px] h-[200px] bg-transparent" effect="cards"
                        grab-cursor="true">
                        <swiper-slide class="rounded bg-red-900 text-white flex items-center justify-center">Slide
                            1</swiper-slide>
                        <swiper-slide class="rounded bg-green-600 text-white flex items-center justify-center">Slide
                            2</swiper-slide>
                        <swiper-slide class="rounded bg-yellow-600 text-white flex items-center justify-center">Slide
                            3</swiper-slide>
                    </swiper-container>
                </div>

                <!-- متن -->
                <div class="flex flex-col justify-between p-4 flex-grow text-center">
                    <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-2">کالا یا دسته‌بندی خاص</h5>
                    <p class="text-sm text-gray-700 dark:text-gray-400">توضیح مختصر درباره این مورد پرفروش که توجه
                        زیادی به خود جلب کرده است.</p>
                </div>
            </div>

        </div>
    </div>
    <div class=" px-9 py-2 text-black dark:text-white bg-gray-100 dark:bg-gray-900">
        <div
            class="text-black dark:text-white bg-white dark:bg-gray-800 shadow-sm dark:shadow-none dark:border dark:border-slate-700 rounded">
            <div class="p-2 text-2xl font-semibold text-bold">Most Viewed</div>
            <hr class="h-px mb-3 bg-gray-200 border-0 dark:bg-gray-900">
            <swiper-container class="mySwiper swiper2 bg-transparent" space-between="10" free-mode="true"
                breakpoints='{
    "320": { "slidesPerView": 2 },
    "640": { "slidesPerView": 2 },
    "768": { "slidesPerView": 3 },
    "1024": { "slidesPerView": 4 },
    "1280": { "slidesPerView": 6 }
}'>

                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg"
                                src="https://flowbite.com/docs/images/products/apple-watch.png" alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                        </div>
                    </div>
                </swiper-slide>


            </swiper-container>


        </div>
    </div>

    <div class="bg-gray-100 dark:bg-gray-900 relative z-20 px-9 py-2 ">
        <div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-4 ">
            <div
                class="bg-white  dark:bg-gray-800  shadow dark:shadow-none dark:border dark:border-slate-700 rounded  p-2">
                <div class="p-2 text-2xl  font-serif">Shop By Category</div>

                <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                        <div class="title font-serif text-sm">title one</div>
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=" px-9 py-2 text-black dark:text-white bg-gray-100 dark:bg-gray-900">
        <div
            class="text-black dark:text-white bg-white dark:bg-gray-800 shadow-sm dark:shadow-none dark:border dark:border-slate-700 rounded">
            <div class="p-2 text-2xl font-semibold text-bold">Most Viewed</div>
            <hr class="h-px mb-3 bg-gray-200 border-0 dark:bg-gray-900">
            <swiper-container class="mySwiper swiper2 bg-transparent" space-between="10" free-mode="true"
                breakpoints='{
                            "320": { "slidesPerView": 2 },
                            "640": { "slidesPerView": 2 },
                            "768": { "slidesPerView": 3 },
                            "1024": { "slidesPerView": 4 },
                            "1280": { "slidesPerView": 5 }
                            }'>

                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="space-y-6 overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <a href="#" class="overflow-hidden rounded">
                            <img class="mx-auto h-44 w-44 dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                                alt="imac image" />
                            <img class="mx-auto hidden h-44 w-44 dark:block"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg"
                                alt="imac image" />
                        </a>
                        <div>
                            <a href="#"
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">iMac
                                27”</a>
                            <p class="mt-2 text-base font-normal text-gray-500 dark:text-gray-400">This generation has
                                some
                                improvements, including a longer continuous battery life.</p>
                        </div>
                        <div>
                            <p class="text-lg font-bold text-gray-900 dark:text-white">
                                <span class="line-through"> $399,99 </span>
                            </p>
                            <p class="text-lg font-bold leading-tight text-red-600 dark:text-red-500">$299</p>
                        </div>
                        <div class="mt-6 flex items-center gap-2.5">
                            <button data-tooltip-target="favourites-tooltip-1" type="button"
                                class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z">
                                    </path>
                                </svg>
                            </button>
                            <div id="favourites-tooltip-1" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                Add to favourites
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                            <button type="button"
                                class="inline-flex w-full items-center justify-center rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium  text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-700">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="space-y-6 overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <a href="#" class="overflow-hidden rounded">
                            <img class="mx-auto h-44 w-44 dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/ps5-light.svg"
                                alt="imac image" />
                            <img class="mx-auto hidden h-44 w-44 dark:block"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/ps5-dark.svg"
                                alt="imac image" />
                        </a>
                        <div>
                            <a href="#"
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Playstation
                                5</a>
                            <p class="mt-2 text-base font-normal text-gray-500 dark:text-gray-400">This generation has
                                some
                                improvements, including a longer continuous battery life.</p>
                        </div>
                        <div>
                            <p class="text-lg font-bold text-gray-900 dark:text-white">
                                <span class="line-through"> $799,99 </span>
                            </p>
                            <p class="text-lg font-bold leading-tight text-red-600 dark:text-red-500">$499</p>
                        </div>
                        <div class="mt-6 flex items-center gap-2.5">
                            <button data-tooltip-target="favourites-tooltip-2" type="button"
                                class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z">
                                    </path>
                                </svg>
                            </button>
                            <div id="favourites-tooltip-2" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                Add to favourites
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                            <button type="button"
                                class="inline-flex w-full items-center justify-center rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium  text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-700">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="space-y-6 overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <a href="#" class="overflow-hidden rounded">
                            <img class="mx-auto h-44 w-44 dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/apple-watch-light.svg"
                                alt="imac image" />
                            <img class="mx-auto hidden h-44 w-44 dark:block"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/apple-watch-dark.svg"
                                alt="imac image" />
                        </a>
                        <div>
                            <a href="#"
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Apple
                                Watch Series 8</a>
                            <p class="mt-2 text-base font-normal text-gray-500 dark:text-gray-400">This generation has
                                some
                                improvements, including a longer continuous battery life.</p>
                        </div>
                        <div>
                            <p class="text-lg font-bold text-gray-900 dark:text-white">
                                <span class="line-through"> $1799,99 </span>
                            </p>
                            <p class="text-lg font-bold leading-tight text-red-600 dark:text-red-500">$1199</p>
                        </div>
                        <div class="mt-6 flex items-center gap-2.5">
                            <button data-tooltip-target="favourites-tooltip-3" type="button"
                                class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z">
                                    </path>
                                </svg>
                            </button>
                            <div id="favourites-tooltip-3" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                Add to favourites
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>

                            <button type="button"
                                class="inline-flex w-full items-center justify-center rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium  text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-700">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="space-y-6 overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <a href="#" class="overflow-hidden rounded">
                            <img class="mx-auto h-44 w-44 dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/apple-watch-light.svg"
                                alt="imac image" />
                            <img class="mx-auto hidden h-44 w-44 dark:block"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/apple-watch-dark.svg"
                                alt="imac image" />
                        </a>
                        <div>
                            <a href="#"
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Apple
                                Watch Series 8</a>
                            <p class="mt-2 text-base font-normal text-gray-500 dark:text-gray-400">This generation has
                                some
                                improvements, including a longer continuous battery life.</p>
                        </div>
                        <div>
                            <p class="text-lg font-bold text-gray-900 dark:text-white">
                                <span class="line-through"> $1799,99 </span>
                            </p>
                            <p class="text-lg font-bold leading-tight text-red-600 dark:text-red-500">$1199</p>
                        </div>
                        <div class="mt-6 flex items-center gap-2.5">
                            <button data-tooltip-target="favourites-tooltip-3" type="button"
                                class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z">
                                    </path>
                                </svg>
                            </button>
                            <div id="favourites-tooltip-3" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                Add to favourites
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>

                            <button type="button"
                                class="inline-flex w-full items-center justify-center rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium  text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-700">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="space-y-6 overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <a href="#" class="overflow-hidden rounded">
                            <img class="mx-auto h-44 w-44 dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/apple-watch-light.svg"
                                alt="imac image" />
                            <img class="mx-auto hidden h-44 w-44 dark:block"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/apple-watch-dark.svg"
                                alt="imac image" />
                        </a>
                        <div>
                            <a href="#"
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Apple
                                Watch Series 8</a>
                            <p class="mt-2 text-base font-normal text-gray-500 dark:text-gray-400">This generation has
                                some
                                improvements, including a longer continuous battery life.</p>
                        </div>
                        <div>
                            <p class="text-lg font-bold text-gray-900 dark:text-white">
                                <span class="line-through"> $1799,99 </span>
                            </p>
                            <p class="text-lg font-bold leading-tight text-red-600 dark:text-red-500">$1199</p>
                        </div>
                        <div class="mt-6 flex items-center gap-2.5">
                            <button data-tooltip-target="favourites-tooltip-3" type="button"
                                class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z">
                                    </path>
                                </svg>
                            </button>
                            <div id="favourites-tooltip-3" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                Add to favourites
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>

                            <button type="button"
                                class="inline-flex w-full items-center justify-center rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium  text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-700">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide
                    class="flex flex-col items-center text-gray-800 dark:text-white bg-white dark:bg-gray-800 p-2 rounded">


                    <div
                        class="space-y-6 overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <a href="#" class="overflow-hidden rounded">
                            <img class="mx-auto h-44 w-44 dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/apple-watch-light.svg"
                                alt="imac image" />
                            <img class="mx-auto hidden h-44 w-44 dark:block"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/apple-watch-dark.svg"
                                alt="imac image" />
                        </a>
                        <div>
                            <a href="#"
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Apple
                                Watch Series 8</a>
                            <p class="mt-2 text-base font-normal text-gray-500 dark:text-gray-400">This generation has
                                some
                                improvements, including a longer continuous battery life.</p>
                        </div>
                        <div>
                            <p class="text-lg font-bold text-gray-900 dark:text-white">
                                <span class="line-through"> $1799,99 </span>
                            </p>
                            <p class="text-lg font-bold leading-tight text-red-600 dark:text-red-500">$1199</p>
                        </div>
                        <div class="mt-6 flex items-center gap-2.5">
                            <button data-tooltip-target="favourites-tooltip-3" type="button"
                                class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white p-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z">
                                    </path>
                                </svg>
                            </button>
                            <div id="favourites-tooltip-3" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                Add to favourites
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>

                            <button type="button"
                                class="inline-flex w-full items-center justify-center rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium  text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-700">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                                </svg>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>


        </div>
    </div>


    <!-- بخش اصلی -->
    <div class="px-9 py-6 bg-gray-100 dark:bg-gray-900 text-black dark:text-white">
        <div
            class="grid grid-cols-12 gap-6 bg-white dark:bg-gray-800 rounded shadow-sm dark:shadow-none dark:border dark:border-slate-700 p-4">
            <div
                class="col-span-3 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg"
                        alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-span-9 grid grid-cols-3 gap-2 p-2 w-full border border-gray-600 rounded-lg shadow-sm">
                
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg" src="https://flowbite.com/docs/images/products/apple-watch.png"
                                alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                            <a href="#">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch
                                    Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                            </a>
                            <div class="flex items-center mt-2.5 mb-5">
                                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                                <a href="#"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                    to cart</a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg" src="https://flowbite.com/docs/images/products/apple-watch.png"
                                alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                            <a href="#">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch
                                    Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                            </a>
                            <div class="flex items-center mt-2.5 mb-5">
                                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                                <a href="#"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                    to cart</a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="p-8 rounded-t-lg" src="https://flowbite.com/docs/images/products/apple-watch.png"
                                alt="product image" />
                        </a>
                        <div class="px-5 pb-5">
                            <a href="#">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch
                                    Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                            </a>
                            <div class="flex items-center mt-2.5 mb-5">
                                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                                <a href="#"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                    to cart</a>
                            </div>
                        </div>
                    </div>
                
            </div>

        </div>
    </div>


    {{--  footer  --}}
    <div class=" dark:bg-gray-900 relative z-20  pt-2">
        <footer class="bg-white shadow-sm dark:bg-gray-800 p-2">
            <div class="w-full max-w-screen-xl mx-auto py-4 ">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="https://flowbite.com/"
                        class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                    </a>
                    <ul
                        class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">About</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                        href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights
                    Reserved.</span>
            </div>
        </footer>
    </div>
    {{--  footer end  --}}

</div>


@push('scripts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endpush
