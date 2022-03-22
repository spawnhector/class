<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Foodies Restaurant Website</title>
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans:wght@400;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
        <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- hero -->
        <div class="relative pb-24 lg:pb-96">
            <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/bg-strip.png" class="absolute right-0 z-0 h-full hero-img-yellow-width lg:block hidden" />
            <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/bg-strip.png" class="absolute right-0 z-0 lg:h-96 lg:hidden block" />
            <div class="">
                <!-- Navigation -->
                <!-- Desktop -->
                <nav class="mx-auto container relative z-10">
                    <div class="lg:flex hidden items-center justify-between py-12 xl:px-0 px-4">
                        <a href="./home.html">
                            <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/foodies.png" class="w-44" alt="logo" />
                        </a>
                        <ul class="flex leading-loose">
                            <a href="./home.html">
                                <li class="text-2xl leading-8 mr-10 text-color-orange relative font-normal cursor-pointer text-hover">
                                    Home
                                    <hr class="border-4 border-color-orange bg-color-orange w-10 absolute right-0" />
                                </li>
                            </a>
                            <a href="./foodies-menu.html">
                                <li class="text-2xl leading-8 mr-10 text-color-black flex flex-col items-end justify-end font-normal cursor-pointer text-hover">Menu</li>
                            </a>
                            <a href="#">
                                <li class="text-2xl leading-8 mr-10 text-color-black flex flex-col items-end justify-end font-normal cursor-pointer text-hover">About</li>
                            </a>
                            <a href="./contact.html">
                                <li class="text-2xl leading-8 mr-10 text-color-black flex flex-col items-end justify-end font-normal cursor-pointer text-hover">Contact</li>
                            </a>

                            <a href="#">
                                <li class="text-2xl leading-8 text-color-black flex flex-col items-end justify-end font-normal cursor-pointer text-hover">Reservation</li>
                            </a>
                        </ul>
                    </div>
                </nav>
                <!-- Desktop -->
                <!-- Mobile -->
                <nav class="lg:hidden z-40 relative">
                    <div class="flex py-4 justify-between items-center px-4">
                        <div>
                            <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/foodies.png" alt="logo" class="w-24" />
                        </div>
                        <div class="visible flex items-center">
                            <ul id="list" class="hidden p-2 border-r bg-white absolute rounded top-0 left-0 right-0 shadow mt-12 md:mt-16">
                                <li class="flex cursor-pointer text-hover text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2">
                                    <a href="./home.html">
                                        <span class="ml-2 font-bold">Home</span>
                                    </a>
                                </li>
                                <li class="flex flex-col cursor-pointer text-hover text-gray-600 text-sm leading-3 tracking-normal py-2 flex justify-center" onclick="dropdownHandler(this)">
                                    <a href="./foodies-menu.html">
                                        <span class="ml-2 font-bold">Menu</span>
                                    </a>
                                </li>
                                <li class="flex cursor-pointer text-hover text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                    <a href="#">
                                        <span class="ml-2 font-bold">About</span>
                                    </a>
                                </li>
                                <li class="flex flex-col cursor-pointer text-hover text-gray-600 text-sm leading-3 tracking-normal py-2 flex justify-center" onclick="dropdownHandler(this)">
                                    <a href="./contact.html">
                                        <span class="ml-2 font-bold">Contact</span>
                                    </a>
                                </li>
                                <li class="flex flex-col cursor-pointer text-hover text-gray-600 text-sm leading-3 tracking-normal pt-2 pb-4 flex justify-center" onclick="dropdownHandler(this)">
                                    <a href="#">
                                        <span class="ml-2 font-bold">Reservation</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="xl:hidden">
                                <svg id="open" onclick="MenuHandler(true)" aria-haspopup="true" aria-label="Main Menu" xmlns="http://www.w3.org/2000/svg" class="show-m-menu icon icon-tabler icon-tabler-menu" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <line x1="4" y1="8" x2="20" y2="8"></line>
                                    <line x1="4" y1="16" x2="20" y2="16"></line>
                                </svg>
                                <div id="close" class="hidden close-m-menu" onclick="MenuHandler(false)">
                                    <svg aria-label="Close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Mobile -->
                <!-- Navigation -->
                <!-- Hero -->
                <div class="mx-auto container relative z-20 lg:px-0 px-4">
                    <div class="flex lg:flex-row flex-col-reverse items-center justify-between lg:mt-24">
                        <div class="lg:w-1/2 lg:pt-0 pt-8">
                            <h1 class="text-6xl lg:block hidden leading-115 border-l-8 border-color-orange pl-12">
                                Craving for<br />
                                <span class="2xl:text-8xl text-7xl font-bold"> Healthy Food? </span>
                            </h1>
                            <h1 class="text-3xl lg:hidden block leading-8 border-l-8 border-color-orange pl-2 xl:mt-0 mt-8">
                                Craving for<br />
                                <span class="text-4xl font-bold"> Healthy Food? </span>
                            </h1>
                            <h1 class="lg:text-2xl text-lg text-color-gray lg:leading-8 leading-6 mt-6 border-l-8 border-color-orange lg:pl-12 pl-2 py-2">Here is what you always need. View our food collection and order yummy and healthy food within minutes.</h1>
                            <div class="flex items-center justify-center mt-12">
                                <a href="./foodies-menu.html"> <button class="xl:py-5 py-2 xl:px-16 px-6 bg-color-orange 2xl:text-3xl lg:text-xl text-base font-semibold leading-loose text-white focus:outline-none hover:opacity-90 border-2 border-color-orange b-r-10 mr-10">View Menu</button></a>
                                <a href="#">
                                    <button class="xl:py-5 py-2 xl:px-16 px-6 border-color-orange 2xl:text-3xl lg:text-xl text-base font-semibold leading-loose text-color-orange focus:outline-none button-transparent border-2 border-color-orange b-r-10">Book A Table</button>
                                </a>
                            </div>
                            <div class="2xl:mt-24 mt-12 items-center 2xl:pl-16 xl:pl-16 lg:pl-12 md:pl-0 sm:pl-0 pl-16 md:flex hidden">
                                <a href="#" class="cursor-pointer">
                                    <div class="w-12 h-12 bg-white fb-hover flex items-center justify-center shadow-xl rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="32" viewBox="0 0 20 32" fill="white">
                                            <path d="M0.666664 12.6667V19.3334H5.66666V31.0001H12.3333V19.3334H17.3333L19 12.6667H12.3333V9.33339C12.3333 8.89137 12.5089 8.46744 12.8215 8.15488C13.134 7.84232 13.558 7.66673 14 7.66673H19V1.00006H14C11.7899 1.00006 9.67024 1.87803 8.10744 3.44084C6.54464 5.00364 5.66666 7.12326 5.66666 9.33339V12.6667H0.666664Z" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="cursor-pointer"
                                    ><div class="w-12 h-12 bg-white mx-6 twitter-hover flex items-center justify-center shadow-xl rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="28" viewBox="0 0 36 28" fill="white">
                                            <path
                                                d="M34.6667 0.683417C33 1.50008 31.3667 1.83175 29.6667 2.33342C27.7983 0.225083 25.0283 0.108417 22.3667 1.10508C19.705 2.10175 17.9617 4.53842 18 7.33342V9.00008C12.5917 9.13842 7.775 6.67508 4.66667 2.33342C4.66667 2.33342 -2.30333 14.7218 11.3333 20.6668C8.21333 22.7451 5.10167 24.1468 1.33333 24.0001C6.84667 27.0051 12.855 28.0384 18.0567 26.5284C24.0233 24.7951 28.9267 20.3234 30.8083 13.6251C31.3697 11.5879 31.6484 9.48318 31.6367 7.37008C31.6333 6.95508 34.1533 2.75008 34.6667 0.68175V0.683417Z"
                                                stroke="#0F0F0F"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            ></path>
                                        </svg></div
                                ></a>
                                <a class="cursor-pointer" href="#">
                                    <div class="w-12 h-12 bg-white shadow-xl rounded-full flex items-center justify-center insta-hover">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="38" height="38" viewBox="0 0 24 24" stroke-width="0.75" stroke="#0F0F0F" fill="white" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div class="flex mt-12 items-center justify-center md:hidden">
                                <a href="#" class="cursor-pointer">
                                    <div class="w-12 h-12 bg-white fb-hover flex items-center justify-center shadow-xl rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="32" viewBox="0 0 20 32" fill="white">
                                            <path d="M0.666664 12.6667V19.3334H5.66666V31.0001H12.3333V19.3334H17.3333L19 12.6667H12.3333V9.33339C12.3333 8.89137 12.5089 8.46744 12.8215 8.15488C13.134 7.84232 13.558 7.66673 14 7.66673H19V1.00006H14C11.7899 1.00006 9.67024 1.87803 8.10744 3.44084C6.54464 5.00364 5.66666 7.12326 5.66666 9.33339V12.6667H0.666664Z" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </a>
                                <a href="#" class="cursor-pointer"
                                    ><div class="w-12 h-12 bg-white mx-6 twitter-hover flex items-center justify-center shadow-xl rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="28" viewBox="0 0 36 28" fill="white">
                                            <path
                                                d="M34.6667 0.683417C33 1.50008 31.3667 1.83175 29.6667 2.33342C27.7983 0.225083 25.0283 0.108417 22.3667 1.10508C19.705 2.10175 17.9617 4.53842 18 7.33342V9.00008C12.5917 9.13842 7.775 6.67508 4.66667 2.33342C4.66667 2.33342 -2.30333 14.7218 11.3333 20.6668C8.21333 22.7451 5.10167 24.1468 1.33333 24.0001C6.84667 27.0051 12.855 28.0384 18.0567 26.5284C24.0233 24.7951 28.9267 20.3234 30.8083 13.6251C31.3697 11.5879 31.6484 9.48318 31.6367 7.37008C31.6333 6.95508 34.1533 2.75008 34.6667 0.68175V0.683417Z"
                                                stroke="#0F0F0F"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            ></path>
                                        </svg></div
                                ></a>
                                <a class="cursor-pointer" href="#">
                                    <div class="w-12 h-12 bg-white shadow-xl rounded-full flex items-center justify-center insta-hover">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="38" height="38" viewBox="0 0 24 24" stroke-width="0.75" stroke="#0F0F0F" fill="white" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="lg:w-1/2 height-main-hero xl:block hidden">
                            <img loading="lazy" src="https://i.ibb.co/qRq3XKm/hero1.png" class="w-full" />
                        </div>
                        <div class="xl:w-1/2 xl:hidden block">
                            <img loading="lazy" src="https://i.ibb.co/qRq3XKm/hero1.png" class="object-cover" />
                        </div>
                    </div>
                </div>
                <!-- Hero -->
            </div>
        </div>
        <!-- hero -->
        <!-- DishOfDay -->

        <div class="mx-auto container relative z-40 xl:px-0 px-4">
            <div class="flex items-center justify-center">
                <hr class="w-2.5 h-16 bg-color-orange" />
                <h1 class="text-4xl font-bold text-color-black pl-7">Dish<span class="text-2xl font-normal"> of the Day</span></h1>
            </div>
            <div class="flex items-center justify-center pt-12">
                <div class="relative">
                    <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/dishofday.png" class="relative" />
                    <div class="flex items-center relative justify-center w-full lg:hidden block">
                        <div class="absolute flex items-center justify-center -mt-40 -ml-48 md:-mt-64 md:-ml-64">
                            <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/text-text.png" alt="" class="absolute md:w-48 w-40" />
                            <p class="lg:text-2xl text-xs font-bold text-white ml-8 mr-2 relative">EGG FENEL SALAD</p>
                        </div>
                    </div>
                    <div class="absolute lg:block hidden bg-strip bottom-40 xl:left-20 left-10 xl:ml-8 xl:pt-0 pt-16">
                        <div class="flex items-center justify-center">
                            <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/text-text.png" alt="" class="absolute" />
                            <div class="text-2xl font-bold text-white relative">EGG FENEL SALAD</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DishOfDay -->
        <!-- takeALookAtMenu -->
        <div class="mx-auto container z-40 lg:mt-40 mt-20 lg:px-0 px-4">
            <div class="flex items-center justify-center">
                <hr class="w-2.5 h-16 bg-color-orange" />
                <h1 class="text-4xl font-bold text-color-black pl-7"><span class="text-2xl font-normal">Take a look at </span>Menu</h1>
            </div>
            <div class="lg:flex items-center justify-center mt-24 h-full">
                <div class="lg:w-1/4 relative">
                    <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/bg-menu.png" class="absolute left-0 top-0 z-0 -mt-7 lg:block hidden" />
                    <img loading="lazy" src="https://i.ibb.co/283p6kN/Rectangle-52-1.png" class="w-full h-full relative z-10 lg:pl-7 lg:my-0 my-4" />
                    <img loading="lazy" src="https://i.ibb.co/bz2MTXB/Rectangle-45-auto-x1.png" class="w-full h-full lg:pt-7 lg:my-0 my-4" />
                </div>
                <div class="lg:w-1/3 lg:mx-8">
                    <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/menu3.png" class="w-full h-full lg:-pt-4 lg:my-0 my-4" />
                    <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/menu4.png" class="w-full h-full lg:pt-3 lg:my-0 my-4" />
                </div>
                <div class="lg:w-1/4">
                    <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/menu5.png" class="w-full h-full lg:my-0 my-4 xl:block hidden" />
                    <img loading="lazy" src="https://i.ibb.co/283p6kN/Rectangle-52-1.png" class="w-full h-full lg:my-0 my-4 xl:hidden block" />
                    <div class="relative">
                        <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/menu6.png" class="w-full h-full lg:pt-7 relative z-10 lg:pr-7 lg:pb-7 lg:my-0 my-4" />
                        <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/bg-menu.png" class="lg:block hidden absolute right-0 bottom-0 z-0 2xl:h-72 h-48 lg:my-0 my-4" />
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center xl:mt-36 mt-12">
            <a href="./foodies-menu.html">
                <button class="py-2.5 lg:px-11 px-6 lg:text-3xl text-base font-semibold leading-loose text-color-orange focus:outline-none button-transparent border-2 border-color-orange b-r-10 lg:mr-10">Browse Menu</button>
            </a>
        </div>
        <!-- takeALookAtMenu -->
        <!-- servicesWeProvide -->
        <div class="mx-auto container mt-40 xl:px-0 px-4">
            <div class="flex items-center justify-center">
                <hr class="w-2.5 h-16 bg-color-orange" />
                <h1 class="text-4xl font-bold text-color-black pl-7">Services<span class="text-2xl font-normal"> We Provide</span></h1>
            </div>
            <div class="items-center justify-center mt-16 xl:flex hidden">
                <div class="card-width card-shadow cursor-pointer mr-7">
                    <div class="relative">
                        <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/dive-in.png" class="h-96 w-full" />
                        <div class="bg-white w-full">
                            <p class="p-f-f font-bold text-4xl text-color-black absolute -mt-7 ml-5">01.</p>
                            <p class="text-center text-2xl text-color-black py-8">Dine In/ Takeaway</p>
                        </div>
                    </div>
                </div>
                <div class="card-width card-shadow cursor-pointer mr-7">
                    <div class="relative">
                        <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/easy-reservation.png" class="h-96 w-full" />
                        <div class="bg-white w-full">
                            <p class="p-f-f font-bold text-4xl text-color-black absolute -mt-7 ml-5">02.</p>
                            <p class="text-center text-2xl text-color-black py-8">Easy Table Reservation</p>
                        </div>
                    </div>
                </div>
                <div class="card-width card-shadow cursor-pointer">
                    <div class="relative">
                        <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/delivery.png" class="h-96 w-full" />
                        <div class="bg-white w-full">
                            <p class="p-f-f font-bold text-4xl text-color-black absolute -mt-7 ml-5">03.</p>
                            <p class="text-center text-2xl text-color-black py-8">Free Home Delivery</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile -->
            <div class="block items-center justify-center mt-16 xl:hidden px-4">
                <div class="card-shadow cursor-pointer mb-8">
                    <div class="relative">
                        <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/dive-in.png" class="xl:h-96 h-full w-full" />
                        <div class="bg-white w-full">
                            <p class="p-f-f font-bold text-4xl text-color-black absolute -mt-7 ml-5">01.</p>
                            <p class="text-center text-2xl text-color-black py-8">Dine In/ Takeaway</p>
                        </div>
                    </div>
                </div>
                <div class="card-shadow cursor-pointer mb-8">
                    <div class="relative">
                        <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/easy-reservation.png" class="xl:h-96 h-full w-full" />
                        <div class="bg-white w-full">
                            <p class="p-f-f font-bold text-4xl text-color-black absolute -mt-7 ml-5">02.</p>
                            <p class="text-center text-2xl text-color-black py-8">Easy Table Reservation</p>
                        </div>
                    </div>
                </div>
                <div class="card-shadow cursor-pointer mb-8">
                    <div class="relative">
                        <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/delivery.png" class="xl:h-96 h-full w-full" />
                        <div class="bg-white w-full">
                            <p class="p-f-f font-bold text-4xl text-color-black absolute -mt-7 ml-5">03.</p>
                            <p class="text-center text-2xl text-color-black py-8">Free Home Delivery</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile -->
        </div>
        <!-- servicesWeProvide -->
        <!-- aboutUs -->
        <div class="mt-40">
            <div class="items-center justify-center xl:flex hidden">
                <div class="relative">
                    <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/bg-menu.png" class="absolute left-0 top-0 z-0 h-52 w-56" />
                    <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/about-us-1.png" class="mt-8 ml-8 relative z-10 abt-us-img" />
                    <div class="flex items-center transform -rotate-90 absolute left-0 bottom-0 -ml-20 mb-36">
                        <p class="text-lg font-semibold leading-snug text-justify text-color-orange mr-2">Restaurant</p>
                        <hr class="w-12 bg-color-orange h-1 border-color-orange mr-8" />
                    </div>
                </div>
                <div class="about-us-card py-14 px-7 border border-color-black mx-10">
                    <p class="text-2xl font-bold text-black text-center">About Us</p>
                    <p class="text-base leading-7 text-justify text-color-gray pt-4">Here is what you always need. View our food collection and order yummy and healthy food within minutes. Here is what you always need. View our food collection and order yummy and healthy food within minutes ....</p>
                </div>

                <div class="relative">
                    <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/about-us-2.png" class="abt-us-img -mt-8 mr-8 relative z-10" />
                    <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/bg-menu.png" class="absolute bottom-0 right-0 -mb-8 z-0 h-64" />
                    <div class="flex items-center transform -rotate-90 absolute right-0 top-0 -mr-14">
                        <hr class="w-12 bg-color-orange h-1 border-color-orange mr-2" />
                        <p class="text-lg font-semibold leading-snug text-justify text-color-orange mr-8">Owner</p>
                    </div>
                </div>
            </div>
            <!-- mobile -->
            <div class="items-center justify-center xl:hidden flex flex-col px-4">
                <div class="">
                    <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/about-us-1.png" />
                    <div class="flex items-center justify-end my-2">
                        <hr class="w-12 bg-color-orange h-1 border-color-orange mr-8" />
                        <p class="text-lg font-semibold leading-snug text-justify text-color-orange mr-2">Restaurant</p>
                    </div>
                </div>
                <div class="py-14 px-7 border border-color-black my-4">
                    <p class="text-2xl font-bold text-black text-center">About Us</p>
                    <p class="text-base leading-7 text-justify text-color-gray pt-4">Here is what you always need. View our food collection and order yummy and healthy food within minutes. Here is what you always need. View our food collection and order yummy and healthy food within minutes ....</p>
                </div>

                <div class="">
                    <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/about-us-2.png" />
                    <div class="flex items-center justify-end right-0 top-0 my-2">
                        <hr class="w-12 bg-color-orange h-1 border-color-orange mr-8" />
                        <p class="text-lg font-semibold leading-snug text-justify text-color-orange">Owner</p>
                    </div>
                </div>
            </div>
            <!-- mobile -->
        </div>
        <!-- aboutUs -->
        <!-- slider -->
        <div class="mx-auto container mt-44 xl:block hidden">
            <div class="flex items-center justify-center">
                <hr class="w-2.5 h-16 bg-color-orange" />
                <h1 class="text-4xl font-bold text-color-black pl-7"><span class="text-2xl font-normal"> Hear from Our </span>Customers</h1>
            </div>
            <div class="slider lg:relative lg:w-1/3 -mr-px">
                <div class="f-f-d-s text-2xl lg:text-6xl uppercase block xl:hidden leading-normal font-bold tracking-wide text-color-heading">Trending Products</div>

                <div class="slide-ana lg:relative">
                    <div class="flex relative ml-28" style="transform: translateX(-100%)">
                        <div class="w-5/12 relative mr-10 h-full mt-16">
                            <div class="relative h-96">
                                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/testi-right.png" class="absolute right-0 -mt-3 z-0 2xl:h-full h-80" />
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="51" viewBox="0 0 62 51" fill="none" class="absolute 2xl:ml-14 ml-8 -mt-8">
                                        <path
                                            d="M49.2001 51C44.0001 51 40.0667 48.8667 37.4001 44.6C35.1334 41 34.0001 36.6 34.0001 31.4C34.0001 24.7333 35.6667 18.7333 39.0001 13.4C42.4667 8.06666 47.6667 3.79999 54.6001 0.599988L56.4001 4.19999C52.2667 5.93332 48.6667 8.66666 45.6001 12.4C42.6667 16.1333 41.2001 19.9333 41.2001 23.8C41.2001 25.4 41.4001 26.8 41.8001 28C43.9334 26.2667 46.4001 25.4 49.2001 25.4C52.8001 25.4 55.8001 26.6 58.2001 29C60.7334 31.2667 62.0001 34.3333 62.0001 38.2C62.0001 41.8 60.7334 44.8667 58.2001 47.4C55.8001 49.8 52.8001 51 49.2001 51ZM15.2001 51C10.0001 51 6.06673 48.8667 3.40006 44.6C1.1334 41 6.17206e-05 36.6 6.17206e-05 31.4C6.17206e-05 24.7333 1.66673 18.7333 5.00006 13.4C8.46673 8.06666 13.6667 3.79999 20.6001 0.599988L22.4001 4.19999C18.2667 5.93332 14.6667 8.66666 11.6001 12.4C8.66673 16.1333 7.20006 19.9333 7.20006 23.8C7.20006 25.4 7.40006 26.8 7.80006 28C9.9334 26.2667 12.4001 25.4 15.2001 25.4C18.8001 25.4 21.8001 26.6 24.2001 29C26.7334 31.2667 28.0001 34.3333 28.0001 38.2C28.0001 41.8 26.7334 44.8667 24.2001 47.4C21.8001 49.8 18.8001 51 15.2001 51Z"
                                            fill="#0F0F0F"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col items-center justify-center relative z-20">
                                    <div class="pt-16">
                                        <img loading="lazy" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" class="w-16 h-16 rounded-full object-cover object-center" />
                                    </div>
                                    <div class="flex items-center pt-7 pb-11">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-base leading-snug text-justify text-color-black px-24">Here is what you always need. View our food collection and order yummy and healthy food within minutes. Here is what you always need. View our food collection and order yummy and healthy food within minutes.</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="51" viewBox="0 0 62 51" fill="none" class="absolute bottom-0 2xl:mr-14 mr-8 -mb-4">
                                        <path
                                            d="M12.8001 51C18.0001 51 21.9334 48.8667 24.6001 44.6C26.8667 41 28.0001 36.6 28.0001 31.4C28.0001 24.7333 26.3334 18.7333 23.0001 13.4C19.5334 8.06666 14.3334 3.79999 7.40006 0.599988L5.60006 4.19999C9.73339 5.93332 13.3334 8.66666 16.4001 12.4C19.3334 16.1333 20.8001 19.9333 20.8001 23.8C20.8001 25.4 20.6001 26.8 20.2001 28C18.0667 26.2667 15.6001 25.4 12.8001 25.4C9.20006 25.4 6.20006 26.6 3.80006 29C1.26673 31.2667 5.91278e-05 34.3333 5.91278e-05 38.2C5.91278e-05 41.8 1.26673 44.8667 3.80006 47.4C6.20006 49.8 9.20006 51 12.8001 51ZM46.8001 51C52.0001 51 55.9334 48.8667 58.6001 44.6C60.8667 41 62.0001 36.6 62.0001 31.4C62.0001 24.7333 60.3334 18.7333 57.0001 13.4C53.5334 8.06666 48.3334 3.79999 41.4001 0.599988L39.6001 4.19999C43.7334 5.93332 47.3334 8.66666 50.4001 12.4C53.3334 16.1333 54.8001 19.9333 54.8001 23.8C54.8001 25.4 54.6001 26.8 54.2001 28C52.0667 26.2667 49.6001 25.4 46.8001 25.4C43.2001 25.4 40.2001 26.6 37.8001 29C35.2667 31.2667 34.0001 34.3333 34.0001 38.2C34.0001 41.8 35.2667 44.8667 37.8001 47.4C40.2001 49.8 43.2001 51 46.8001 51Z"
                                            fill="#0F0F0F"
                                        ></path>
                                    </svg>
                                </div>

                                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/testi-left.png" class="absolute 2xl:h-full h-80 left-0 bottom-0 z-0 2xl:h-full h-80" />
                            </div>
                        </div>

                        <div class="w-5/12 relative mr-10 h-full mt-16">
                            <div class="relative h-96">
                                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/testi-right.png" class="absolute 2xl:h-full h-80 right-0 -mt-3 z-0" />
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="51" viewBox="0 0 62 51" fill="none" class="absolute 2xl:ml-14 ml-8 -mt-8">
                                        <path
                                            d="M49.2001 51C44.0001 51 40.0667 48.8667 37.4001 44.6C35.1334 41 34.0001 36.6 34.0001 31.4C34.0001 24.7333 35.6667 18.7333 39.0001 13.4C42.4667 8.06666 47.6667 3.79999 54.6001 0.599988L56.4001 4.19999C52.2667 5.93332 48.6667 8.66666 45.6001 12.4C42.6667 16.1333 41.2001 19.9333 41.2001 23.8C41.2001 25.4 41.4001 26.8 41.8001 28C43.9334 26.2667 46.4001 25.4 49.2001 25.4C52.8001 25.4 55.8001 26.6 58.2001 29C60.7334 31.2667 62.0001 34.3333 62.0001 38.2C62.0001 41.8 60.7334 44.8667 58.2001 47.4C55.8001 49.8 52.8001 51 49.2001 51ZM15.2001 51C10.0001 51 6.06673 48.8667 3.40006 44.6C1.1334 41 6.17206e-05 36.6 6.17206e-05 31.4C6.17206e-05 24.7333 1.66673 18.7333 5.00006 13.4C8.46673 8.06666 13.6667 3.79999 20.6001 0.599988L22.4001 4.19999C18.2667 5.93332 14.6667 8.66666 11.6001 12.4C8.66673 16.1333 7.20006 19.9333 7.20006 23.8C7.20006 25.4 7.40006 26.8 7.80006 28C9.9334 26.2667 12.4001 25.4 15.2001 25.4C18.8001 25.4 21.8001 26.6 24.2001 29C26.7334 31.2667 28.0001 34.3333 28.0001 38.2C28.0001 41.8 26.7334 44.8667 24.2001 47.4C21.8001 49.8 18.8001 51 15.2001 51Z"
                                            fill="#0F0F0F"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col items-center justify-center relative z-20">
                                    <div class="pt-16">
                                        <img loading="lazy" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" class="w-16 h-16 rounded-full object-cover object-center" />
                                    </div>
                                    <div class="flex items-center pt-7 pb-11">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-base leading-snug text-justify text-color-black px-24">Here is what you always need. View our food collection and order yummy and healthy food within minutes. Here is what you always need. View our food collection and order yummy and healthy food within minutes.</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="51" viewBox="0 0 62 51" fill="none" class="absolute bottom-0 2xl:mr-14 mr-8 -mb-4">
                                        <path
                                            d="M12.8001 51C18.0001 51 21.9334 48.8667 24.6001 44.6C26.8667 41 28.0001 36.6 28.0001 31.4C28.0001 24.7333 26.3334 18.7333 23.0001 13.4C19.5334 8.06666 14.3334 3.79999 7.40006 0.599988L5.60006 4.19999C9.73339 5.93332 13.3334 8.66666 16.4001 12.4C19.3334 16.1333 20.8001 19.9333 20.8001 23.8C20.8001 25.4 20.6001 26.8 20.2001 28C18.0667 26.2667 15.6001 25.4 12.8001 25.4C9.20006 25.4 6.20006 26.6 3.80006 29C1.26673 31.2667 5.91278e-05 34.3333 5.91278e-05 38.2C5.91278e-05 41.8 1.26673 44.8667 3.80006 47.4C6.20006 49.8 9.20006 51 12.8001 51ZM46.8001 51C52.0001 51 55.9334 48.8667 58.6001 44.6C60.8667 41 62.0001 36.6 62.0001 31.4C62.0001 24.7333 60.3334 18.7333 57.0001 13.4C53.5334 8.06666 48.3334 3.79999 41.4001 0.599988L39.6001 4.19999C43.7334 5.93332 47.3334 8.66666 50.4001 12.4C53.3334 16.1333 54.8001 19.9333 54.8001 23.8C54.8001 25.4 54.6001 26.8 54.2001 28C52.0667 26.2667 49.6001 25.4 46.8001 25.4C43.2001 25.4 40.2001 26.6 37.8001 29C35.2667 31.2667 34.0001 34.3333 34.0001 38.2C34.0001 41.8 35.2667 44.8667 37.8001 47.4C40.2001 49.8 43.2001 51 46.8001 51Z"
                                            fill="#0F0F0F"
                                        ></path>
                                    </svg>
                                </div>

                                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/testi-left.png" class="absolute 2xl:h-full h-80 left-0 bottom-0 z-0" />
                            </div>
                        </div>
                    </div>
                    <div class="flex relative ml-28" style="transform: translateX(0%)">
                        <div class="w-5/12 relative mr-10 h-full mt-16">
                            <div class="relative h-96">
                                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/testi-right.png" class="absolute 2xl:h-full h-80 right-0 -mt-3 z-0" />
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="51" viewBox="0 0 62 51" fill="none" class="absolute 2xl:ml-14 ml-8 -mt-8">
                                        <path
                                            d="M49.2001 51C44.0001 51 40.0667 48.8667 37.4001 44.6C35.1334 41 34.0001 36.6 34.0001 31.4C34.0001 24.7333 35.6667 18.7333 39.0001 13.4C42.4667 8.06666 47.6667 3.79999 54.6001 0.599988L56.4001 4.19999C52.2667 5.93332 48.6667 8.66666 45.6001 12.4C42.6667 16.1333 41.2001 19.9333 41.2001 23.8C41.2001 25.4 41.4001 26.8 41.8001 28C43.9334 26.2667 46.4001 25.4 49.2001 25.4C52.8001 25.4 55.8001 26.6 58.2001 29C60.7334 31.2667 62.0001 34.3333 62.0001 38.2C62.0001 41.8 60.7334 44.8667 58.2001 47.4C55.8001 49.8 52.8001 51 49.2001 51ZM15.2001 51C10.0001 51 6.06673 48.8667 3.40006 44.6C1.1334 41 6.17206e-05 36.6 6.17206e-05 31.4C6.17206e-05 24.7333 1.66673 18.7333 5.00006 13.4C8.46673 8.06666 13.6667 3.79999 20.6001 0.599988L22.4001 4.19999C18.2667 5.93332 14.6667 8.66666 11.6001 12.4C8.66673 16.1333 7.20006 19.9333 7.20006 23.8C7.20006 25.4 7.40006 26.8 7.80006 28C9.9334 26.2667 12.4001 25.4 15.2001 25.4C18.8001 25.4 21.8001 26.6 24.2001 29C26.7334 31.2667 28.0001 34.3333 28.0001 38.2C28.0001 41.8 26.7334 44.8667 24.2001 47.4C21.8001 49.8 18.8001 51 15.2001 51Z"
                                            fill="#0F0F0F"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col items-center justify-center relative z-20">
                                    <div class="pt-16">
                                        <img loading="lazy" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" class="w-16 h-16 rounded-full object-cover object-center" />
                                    </div>
                                    <div class="flex items-center pt-7 pb-11">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-base leading-snug text-justify text-color-black px-24">Here is what you always need. View our food collection and order yummy and healthy food within minutes. Here is what you always need. View our food collection and order yummy and healthy food within minutes.</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="51" viewBox="0 0 62 51" fill="none" class="absolute bottom-0 2xl:mr-14 mr-8 -mb-4">
                                        <path
                                            d="M12.8001 51C18.0001 51 21.9334 48.8667 24.6001 44.6C26.8667 41 28.0001 36.6 28.0001 31.4C28.0001 24.7333 26.3334 18.7333 23.0001 13.4C19.5334 8.06666 14.3334 3.79999 7.40006 0.599988L5.60006 4.19999C9.73339 5.93332 13.3334 8.66666 16.4001 12.4C19.3334 16.1333 20.8001 19.9333 20.8001 23.8C20.8001 25.4 20.6001 26.8 20.2001 28C18.0667 26.2667 15.6001 25.4 12.8001 25.4C9.20006 25.4 6.20006 26.6 3.80006 29C1.26673 31.2667 5.91278e-05 34.3333 5.91278e-05 38.2C5.91278e-05 41.8 1.26673 44.8667 3.80006 47.4C6.20006 49.8 9.20006 51 12.8001 51ZM46.8001 51C52.0001 51 55.9334 48.8667 58.6001 44.6C60.8667 41 62.0001 36.6 62.0001 31.4C62.0001 24.7333 60.3334 18.7333 57.0001 13.4C53.5334 8.06666 48.3334 3.79999 41.4001 0.599988L39.6001 4.19999C43.7334 5.93332 47.3334 8.66666 50.4001 12.4C53.3334 16.1333 54.8001 19.9333 54.8001 23.8C54.8001 25.4 54.6001 26.8 54.2001 28C52.0667 26.2667 49.6001 25.4 46.8001 25.4C43.2001 25.4 40.2001 26.6 37.8001 29C35.2667 31.2667 34.0001 34.3333 34.0001 38.2C34.0001 41.8 35.2667 44.8667 37.8001 47.4C40.2001 49.8 43.2001 51 46.8001 51Z"
                                            fill="#0F0F0F"
                                        ></path>
                                    </svg>
                                </div>

                                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/testi-left.png" class="absolute 2xl:h-full h-80 left-0 bottom-0 z-0" />
                            </div>
                        </div>

                        <div class="w-5/12 relative mr-10 h-full mt-16">
                            <div class="relative h-96">
                                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/testi-right.png" class="absolute 2xl:h-full h-80 right-0 -mt-3 z-0" />
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="51" viewBox="0 0 62 51" fill="none" class="absolute 2xl:ml-14 ml-8 -mt-8">
                                        <path
                                            d="M49.2001 51C44.0001 51 40.0667 48.8667 37.4001 44.6C35.1334 41 34.0001 36.6 34.0001 31.4C34.0001 24.7333 35.6667 18.7333 39.0001 13.4C42.4667 8.06666 47.6667 3.79999 54.6001 0.599988L56.4001 4.19999C52.2667 5.93332 48.6667 8.66666 45.6001 12.4C42.6667 16.1333 41.2001 19.9333 41.2001 23.8C41.2001 25.4 41.4001 26.8 41.8001 28C43.9334 26.2667 46.4001 25.4 49.2001 25.4C52.8001 25.4 55.8001 26.6 58.2001 29C60.7334 31.2667 62.0001 34.3333 62.0001 38.2C62.0001 41.8 60.7334 44.8667 58.2001 47.4C55.8001 49.8 52.8001 51 49.2001 51ZM15.2001 51C10.0001 51 6.06673 48.8667 3.40006 44.6C1.1334 41 6.17206e-05 36.6 6.17206e-05 31.4C6.17206e-05 24.7333 1.66673 18.7333 5.00006 13.4C8.46673 8.06666 13.6667 3.79999 20.6001 0.599988L22.4001 4.19999C18.2667 5.93332 14.6667 8.66666 11.6001 12.4C8.66673 16.1333 7.20006 19.9333 7.20006 23.8C7.20006 25.4 7.40006 26.8 7.80006 28C9.9334 26.2667 12.4001 25.4 15.2001 25.4C18.8001 25.4 21.8001 26.6 24.2001 29C26.7334 31.2667 28.0001 34.3333 28.0001 38.2C28.0001 41.8 26.7334 44.8667 24.2001 47.4C21.8001 49.8 18.8001 51 15.2001 51Z"
                                            fill="#0F0F0F"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col items-center justify-center relative z-20">
                                    <div class="pt-16">
                                        <img loading="lazy" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" class="w-16 h-16 rounded-full object-cover object-center" />
                                    </div>
                                    <div class="flex items-center pt-7 pb-11">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-base leading-snug text-justify text-color-black px-24">Here is what you always need. View our food collection and order yummy and healthy food within minutes. Here is what you always need. View our food collection and order yummy and healthy food within minutes.</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="51" viewBox="0 0 62 51" fill="none" class="absolute bottom-0 2xl:mr-14 mr-8 -mb-4">
                                        <path
                                            d="M12.8001 51C18.0001 51 21.9334 48.8667 24.6001 44.6C26.8667 41 28.0001 36.6 28.0001 31.4C28.0001 24.7333 26.3334 18.7333 23.0001 13.4C19.5334 8.06666 14.3334 3.79999 7.40006 0.599988L5.60006 4.19999C9.73339 5.93332 13.3334 8.66666 16.4001 12.4C19.3334 16.1333 20.8001 19.9333 20.8001 23.8C20.8001 25.4 20.6001 26.8 20.2001 28C18.0667 26.2667 15.6001 25.4 12.8001 25.4C9.20006 25.4 6.20006 26.6 3.80006 29C1.26673 31.2667 5.91278e-05 34.3333 5.91278e-05 38.2C5.91278e-05 41.8 1.26673 44.8667 3.80006 47.4C6.20006 49.8 9.20006 51 12.8001 51ZM46.8001 51C52.0001 51 55.9334 48.8667 58.6001 44.6C60.8667 41 62.0001 36.6 62.0001 31.4C62.0001 24.7333 60.3334 18.7333 57.0001 13.4C53.5334 8.06666 48.3334 3.79999 41.4001 0.599988L39.6001 4.19999C43.7334 5.93332 47.3334 8.66666 50.4001 12.4C53.3334 16.1333 54.8001 19.9333 54.8001 23.8C54.8001 25.4 54.6001 26.8 54.2001 28C52.0667 26.2667 49.6001 25.4 46.8001 25.4C43.2001 25.4 40.2001 26.6 37.8001 29C35.2667 31.2667 34.0001 34.3333 34.0001 38.2C34.0001 41.8 35.2667 44.8667 37.8001 47.4C40.2001 49.8 43.2001 51 46.8001 51Z"
                                            fill="#0F0F0F"
                                        ></path>
                                    </svg>
                                </div>

                                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/testi-left.png" class="absolute 2xl:h-full h-80 left-0 bottom-0 z-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end mr-28">
                <div class="rounded-full cursor-pointer w-8 h-8 border-color-black ease-in duration-150 flex items-center justify-center hover:bg-gray-200 border" id="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M19 12H5" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9 16L5 12" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9 8L5 12" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="rounded-full cursor-pointer w-8 h-8 hover:bg-gray-200 ease-in duration-150 border-color-black flex items-center justify-center border ml-4" id="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12H19" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 16L19 12" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 8L19 12" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- Mobile -->
        <div class="mx-auto container mt-44 xl:hidden block px-4">
            <div class="flex items-center justify-center">
                <hr class="w-2.5 h-16 bg-color-orange" />
                <h1 class="text-4xl font-bold text-color-black pl-7"><span class="text-2xl font-normal"> Hear from Our </span>Customers</h1>
            </div>
            <div class="slider2 lg:relative lg:w-1/3 -mr-px">
                <div class="slide-ana2 lg:relative">
                    <div class="flex relative" style="transform: translateX(-100%)">
                        <div class="relative h-full mt-16">
                            <div class="relative">
                                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/testi-right.png" class="absolute right-0 -mt-3 z-0 w-48" />
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 62 51" fill="none" class="absolute ml-14 -mt-8">
                                        <path
                                            d="M49.2001 51C44.0001 51 40.0667 48.8667 37.4001 44.6C35.1334 41 34.0001 36.6 34.0001 31.4C34.0001 24.7333 35.6667 18.7333 39.0001 13.4C42.4667 8.06666 47.6667 3.79999 54.6001 0.599988L56.4001 4.19999C52.2667 5.93332 48.6667 8.66666 45.6001 12.4C42.6667 16.1333 41.2001 19.9333 41.2001 23.8C41.2001 25.4 41.4001 26.8 41.8001 28C43.9334 26.2667 46.4001 25.4 49.2001 25.4C52.8001 25.4 55.8001 26.6 58.2001 29C60.7334 31.2667 62.0001 34.3333 62.0001 38.2C62.0001 41.8 60.7334 44.8667 58.2001 47.4C55.8001 49.8 52.8001 51 49.2001 51ZM15.2001 51C10.0001 51 6.06673 48.8667 3.40006 44.6C1.1334 41 6.17206e-05 36.6 6.17206e-05 31.4C6.17206e-05 24.7333 1.66673 18.7333 5.00006 13.4C8.46673 8.06666 13.6667 3.79999 20.6001 0.599988L22.4001 4.19999C18.2667 5.93332 14.6667 8.66666 11.6001 12.4C8.66673 16.1333 7.20006 19.9333 7.20006 23.8C7.20006 25.4 7.40006 26.8 7.80006 28C9.9334 26.2667 12.4001 25.4 15.2001 25.4C18.8001 25.4 21.8001 26.6 24.2001 29C26.7334 31.2667 28.0001 34.3333 28.0001 38.2C28.0001 41.8 26.7334 44.8667 24.2001 47.4C21.8001 49.8 18.8001 51 15.2001 51Z"
                                            fill="#0F0F0F"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col items-center justify-center relative z-20">
                                    <div class="pt-16">
                                        <img loading="lazy" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" class="w-16 h-16 rounded-full object-cover object-center" />
                                    </div>
                                    <div class="flex items-center pt-7 pb-11">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-base leading-snug text-justify text-color-black lg:px-24 px-6 lg:pb-0 pb-12">Here is what you always need. View our food collection and order yummy and healthy food within minutes. Here is what you always need. View our food collection and order yummy and healthy food within minutes.</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 62 51" fill="none" class="absolute bottom-0 mr-14 -mb-4">
                                        <path
                                            d="M12.8001 51C18.0001 51 21.9334 48.8667 24.6001 44.6C26.8667 41 28.0001 36.6 28.0001 31.4C28.0001 24.7333 26.3334 18.7333 23.0001 13.4C19.5334 8.06666 14.3334 3.79999 7.40006 0.599988L5.60006 4.19999C9.73339 5.93332 13.3334 8.66666 16.4001 12.4C19.3334 16.1333 20.8001 19.9333 20.8001 23.8C20.8001 25.4 20.6001 26.8 20.2001 28C18.0667 26.2667 15.6001 25.4 12.8001 25.4C9.20006 25.4 6.20006 26.6 3.80006 29C1.26673 31.2667 5.91278e-05 34.3333 5.91278e-05 38.2C5.91278e-05 41.8 1.26673 44.8667 3.80006 47.4C6.20006 49.8 9.20006 51 12.8001 51ZM46.8001 51C52.0001 51 55.9334 48.8667 58.6001 44.6C60.8667 41 62.0001 36.6 62.0001 31.4C62.0001 24.7333 60.3334 18.7333 57.0001 13.4C53.5334 8.06666 48.3334 3.79999 41.4001 0.599988L39.6001 4.19999C43.7334 5.93332 47.3334 8.66666 50.4001 12.4C53.3334 16.1333 54.8001 19.9333 54.8001 23.8C54.8001 25.4 54.6001 26.8 54.2001 28C52.0667 26.2667 49.6001 25.4 46.8001 25.4C43.2001 25.4 40.2001 26.6 37.8001 29C35.2667 31.2667 34.0001 34.3333 34.0001 38.2C34.0001 41.8 35.2667 44.8667 37.8001 47.4C40.2001 49.8 43.2001 51 46.8001 51Z"
                                            fill="#0F0F0F"
                                        ></path>
                                    </svg>
                                </div>

                                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/testi-left.png" class="absolute left-0 bottom-0 z-0 w-48" />
                            </div>
                        </div>
                    </div>
                    <div class="flex relative" style="transform: translateX(0%)">
                        <div class="relative h-full mt-16">
                            <div class="relative">
                                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/testi-right.png" class="absolute right-0 -mt-3 z-0 w-48" />
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 62 51" fill="none" class="absolute ml-14 -mt-8">
                                        <path
                                            d="M49.2001 51C44.0001 51 40.0667 48.8667 37.4001 44.6C35.1334 41 34.0001 36.6 34.0001 31.4C34.0001 24.7333 35.6667 18.7333 39.0001 13.4C42.4667 8.06666 47.6667 3.79999 54.6001 0.599988L56.4001 4.19999C52.2667 5.93332 48.6667 8.66666 45.6001 12.4C42.6667 16.1333 41.2001 19.9333 41.2001 23.8C41.2001 25.4 41.4001 26.8 41.8001 28C43.9334 26.2667 46.4001 25.4 49.2001 25.4C52.8001 25.4 55.8001 26.6 58.2001 29C60.7334 31.2667 62.0001 34.3333 62.0001 38.2C62.0001 41.8 60.7334 44.8667 58.2001 47.4C55.8001 49.8 52.8001 51 49.2001 51ZM15.2001 51C10.0001 51 6.06673 48.8667 3.40006 44.6C1.1334 41 6.17206e-05 36.6 6.17206e-05 31.4C6.17206e-05 24.7333 1.66673 18.7333 5.00006 13.4C8.46673 8.06666 13.6667 3.79999 20.6001 0.599988L22.4001 4.19999C18.2667 5.93332 14.6667 8.66666 11.6001 12.4C8.66673 16.1333 7.20006 19.9333 7.20006 23.8C7.20006 25.4 7.40006 26.8 7.80006 28C9.9334 26.2667 12.4001 25.4 15.2001 25.4C18.8001 25.4 21.8001 26.6 24.2001 29C26.7334 31.2667 28.0001 34.3333 28.0001 38.2C28.0001 41.8 26.7334 44.8667 24.2001 47.4C21.8001 49.8 18.8001 51 15.2001 51Z"
                                            fill="#0F0F0F"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col items-center justify-center relative z-20">
                                    <div class="pt-16">
                                        <img loading="lazy" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" class="w-16 h-16 rounded-full object-cover object-center" />
                                    </div>
                                    <div class="flex items-center pt-7 pb-11">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path
                                                d="M9.46571 14.9953C9.17423 14.8417 8.82579 14.8416 8.53416 14.9949L4.62161 17.052C3.88797 17.4377 3.03051 16.8147 3.17065 15.9978L3.91809 11.6406C3.97378 11.3159 3.86602 10.9847 3.62999 10.7549L0.460944 7.67017C-0.133331 7.09171 0.194274 6.08289 1.01503 5.96394L5.38652 5.33039C5.71238 5.28317 5.9941 5.07856 6.13982 4.78329L8.09631 0.818966C8.46312 0.075714 9.52298 0.0757149 9.88979 0.818967L11.8463 4.78329C11.992 5.07856 12.2737 5.28317 12.5996 5.33039L16.9711 5.96394C17.7918 6.08289 18.1194 7.09171 17.5252 7.67018L14.3561 10.7549C14.1201 10.9847 14.0123 11.3159 14.068 11.6406L14.815 15.9954C14.9553 16.8128 14.0969 17.4358 13.3633 17.0492L9.46571 14.9953Z"
                                                fill="#FFAC10"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-base leading-snug text-justify text-color-black lg:px-24 px-6 lg:pb-0 pb-12">Here is what you always need. View our food collection and order yummy and healthy food within minutes. Here is what you always need. View our food collection and order yummy and healthy food within minutes.</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 62 51" fill="none" class="absolute bottom-0 mr-14 -mb-4">
                                        <path
                                            d="M12.8001 51C18.0001 51 21.9334 48.8667 24.6001 44.6C26.8667 41 28.0001 36.6 28.0001 31.4C28.0001 24.7333 26.3334 18.7333 23.0001 13.4C19.5334 8.06666 14.3334 3.79999 7.40006 0.599988L5.60006 4.19999C9.73339 5.93332 13.3334 8.66666 16.4001 12.4C19.3334 16.1333 20.8001 19.9333 20.8001 23.8C20.8001 25.4 20.6001 26.8 20.2001 28C18.0667 26.2667 15.6001 25.4 12.8001 25.4C9.20006 25.4 6.20006 26.6 3.80006 29C1.26673 31.2667 5.91278e-05 34.3333 5.91278e-05 38.2C5.91278e-05 41.8 1.26673 44.8667 3.80006 47.4C6.20006 49.8 9.20006 51 12.8001 51ZM46.8001 51C52.0001 51 55.9334 48.8667 58.6001 44.6C60.8667 41 62.0001 36.6 62.0001 31.4C62.0001 24.7333 60.3334 18.7333 57.0001 13.4C53.5334 8.06666 48.3334 3.79999 41.4001 0.599988L39.6001 4.19999C43.7334 5.93332 47.3334 8.66666 50.4001 12.4C53.3334 16.1333 54.8001 19.9333 54.8001 23.8C54.8001 25.4 54.6001 26.8 54.2001 28C52.0667 26.2667 49.6001 25.4 46.8001 25.4C43.2001 25.4 40.2001 26.6 37.8001 29C35.2667 31.2667 34.0001 34.3333 34.0001 38.2C34.0001 41.8 35.2667 44.8667 37.8001 47.4C40.2001 49.8 43.2001 51 46.8001 51Z"
                                            fill="#0F0F0F"
                                        ></path>
                                    </svg>
                                </div>

                                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/testi-left.png" class="absolute left-0 bottom-0 z-0 w-48" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <div class="rounded-full cursor-pointer w-8 h-8 border-color-black ease-in duration-150 flex items-center justify-center hover:bg-gray-200 border" id="prev2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M19 12H5" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9 16L5 12" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9 8L5 12" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="rounded-full cursor-pointer w-8 h-8 hover:bg-gray-200 ease-in duration-150 border-color-black flex items-center justify-center border ml-4" id="next2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12H19" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 16L19 12" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 8L19 12" stroke="#0F0F0F" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- Mobile -->
        <!-- slider -->
        <!-- bookATable -->
        <div class="book-widht relative mx-auto container mt-44 xl:block hidden">
            <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/book-bg.png" class="absolute z-0 object-center object-fit h-full w-full" />
            <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/book1.png" class="absolute left-0 top-0 -mt-24 -ml-24" />
            <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/book-2.png" class="absolute right-0 bottom-0 -mb-24 -mr-28" />
            <div class="relative z-10">
                <div class="flex items-center justify-center pt-14">
                    <hr class="w-2.5 h-16 bg-color-orange" />
                    <h1 class="text-4xl font-bold text-color-black pl-7">Book<span class="text-2xl font-normal"> a Table </span></h1>
                </div>
                <div class="flex flex-col items-center justify-center pt-16">
                    <div class="flex items-start flex-wrap px-8">
                        <div class="flex flex-col pr-12">
                            <label class="text-2xl text-color-black pb-4">Date</label>
                            <input class="py-5 w-64 pl-4 border rounded-lg border-color-black" />
                            <div class="flex flex-col pr-12 py-12">
                                <label class="text-2xl text-color-black pb-4">Name</label>
                                <input class="py-5 w-64 pl-4 border rounded-lg border-color-black" />
                            </div>
                        </div>
                        <div class="flex flex-col pr-12">
                            <label class="text-2xl text-color-black pb-4">Time</label>
                            <input class="py-5 w-64 pl-4 border rounded-lg border-color-black" />
                            <div class="flex flex-col pr-12 py-12">
                                <label class="text-2xl text-color-black pb-4">Phone No.</label>
                                <input class="py-5 w-64 pl-4 border rounded-lg border-color-black" />
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="text-2xl text-color-black pb-4">Guests</label>
                            <input class="py-5 w-64 pl-4 border rounded-lg border-color-black" />
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center py-12">
                    <button class="py-3 px-12 border border-color-orange text-white bg-color-orange hover:opacity-90 b-r-10 focus:outline-none">Check Availability</button>
                </div>
            </div>
        </div>
        <!-- mobile -->
        <div class="xl:hidden block relative mx-auto container mt-44">
            <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/book-bg.png" class="absolute z-0 object-center object-cover h-full" />
            <!-- <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/book1.png" class="absolute left-0 top-0 -mt-24 -ml-24" />
            <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/book-2.png" class="absolute right-0 bottom-0 -mb-24 -mr-28" /> -->
            <div class="relative z-10 px-4 flex flex-col items-center justify-center">
                <div class="flex items-center justify-center pt-14">
                    <hr class="w-2.5 h-16 bg-color-orange" />
                    <h1 class="text-4xl font-bold text-color-black pl-7"><span class="text-2xl font-normal">Book a </span>Table</h1>
                </div>
                <div class="">
                    <div class="flex flex-col mt-8">
                        <label class="mt-4 text-2xl text-color-black pb-4">Date</label>
                        <input class="py-3 w-full pl-4 border rounded-lg border-color-black" />
                    </div>
                    <div class="flex flex-col">
                        <label class="mt-4 text-2xl text-color-black pb-4">Time</label>
                        <input class="py-3 w-full pl-4 border rounded-lg border-color-black" />
                    </div>
                    <div class="flex flex-col">
                        <label class="mt-4 text-2xl text-color-black pb-4">Guests</label>
                        <input class="py-3 w-full pl-4 border rounded-lg border-color-black" />
                    </div>
                </div>
                <div class="">
                    <div class="flex flex-col">
                        <label class="mt-4 text-2xl text-color-black pb-4">Name</label>
                        <input class="py-3 w-full pl-4 border rounded-lg border-color-black" />
                    </div>
                    <div class="flex flex-col">
                        <label class="mt-4 text-2xl text-color-black pb-4">Phone No.</label>
                        <input class="py-3 w-full pl-4 border rounded-lg border-color-black" />
                    </div>
                </div>
                <div class="flex items-center justify-center py-12">
                    <button class="py-3 px-12 border border-color-orange text-white bg-color-orange hover:opacity-90 b-r-10 focus:outline-none">Check Availability</button>
                </div>
            </div>
        </div>
        <!-- mobile -->
        <!-- bookATable -->
        <!-- Footer -->
        <div class="bg-color-black py-16 flex flex-col items-center justify-center f-f-l">
            <div class="w-44">
                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/foodies.png" />
            </div>
            <div class="flex items-center py-12">
                <a class="cursor-pointer" href="#"
                    ><svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none">
                        <path d="M1 8V12H4V19H8V12H11L12 8H8V6C8 5.73478 8.10536 5.48043 8.29289 5.29289C8.48043 5.10536 8.73478 5 9 5H12V1H9C7.67392 1 6.40215 1.52678 5.46447 2.46447C4.52678 3.40215 4 4.67392 4 6V8H1Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a class="cursor-pointer" href="#">
                    <div class="px-9">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18" fill="none">
                            <path d="M21 1.01001C20 1.50001 19.02 1.69901 18 2.00001C16.879 0.735013 15.217 0.665013 13.62 1.26301C12.023 1.86101 10.977 3.32301 11 5.00001V6.00001C7.755 6.08301 4.865 4.60501 3 2.00001C3 2.00001 -1.182 9.43301 7 13C5.128 14.247 3.261 15.088 1 15C4.308 16.803 7.913 17.423 11.034 16.517C14.614 15.477 17.556 12.794 18.685 8.77501C19.0218 7.55268 19.189 6.28987 19.182 5.02201C19.18 4.77301 20.692 2.25001 21 1.00901V1.01001Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </a>
                <a class="cursor-pointer" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="4" y="4" width="16" height="16" rx="4" />
                        <circle cx="12" cy="12" r="3" />
                        <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                    </svg>
                </a>
            </div>
            <div>
                <ul class="flex">
                    <a href="home.html">
                        <li class="lg:text-lg text-sm text-sm leading-5 lg:mr-10 mr-2 text-white flex flex-col items-end justify-end font-normal cursor-pointer text-hover">Home</li>
                    </a>
                    <a href="./foodies-menu.html">
                        <li class="lg:text-lg text-sm text-sm leading-5 lg:mr-10 mr-2 text-white relative font-normal cursor-pointer text-hover">Menu</li>
                    </a>
                    <a href="#">
                        <li class="lg:text-lg text-sm text-sm leading-5 lg:mr-10 mr-2 text-white flex flex-col items-end justify-end font-normal cursor-pointer text-hover">About</li>
                    </a>
                    <a href="./contact.html">
                        <li class="lg:text-lg text-sm text-sm leading-5 lg:mr-10 mr-2 text-white flex flex-col items-end justify-end font-normal cursor-pointer text-hover">Contact</li>
                    </a>
                    <a href="#">
                        <li class="lg:text-lg text-sm text-sm leading-5 text-white flex flex-col items-end justify-end font-normal cursor-pointer text-hover">Reservation</li>
                    </a>
                </ul>
            </div>
            <div class="pt-16 flex lg:items-start items-center">
                <img loading="lazy" src="https://cdn.tuk.dev/assets/templates/foodies/tm.png" class="pr-4" />
                <p class="lg:text-base text-xs text-white leading-5">2021 Foodies, All rights reserved</p>
            </div>
        </div>
        <!-- Footer -->
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
