<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
        <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <meta charset="UTF-8">
    <title>TIKETMU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->

</head>
<body class="bg-gray-100">
    <header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
    <div class="container mx-auto flex items-center justify-between px-4 py-3">
       <a href="#" class="logo flex items-center text-xl font-bold text-black">
    TIKETMU
</a>
<!-- navbar -->
              <ul id="nav-menu" class="hidden md:flex nav-links flex-col md:flex-row md:items-center md:space-x-6 absolute md:static top-16 left-0 w-full md:w-auto bg-[#564AB1] md:bg-transparent shadow md:shadow-none px-6 md:px-0 py-4 md:py-0 transition-all duration-300">
            <li>
                <a href="/" class="flex items-center gap-2 {{ Request::is('/') ? 'text-black font-semibold active' : 'text-black' }} hover:text-gray-300">
                    <svg class="w-5 h-5 md:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m-4 0h4"></path></svg>
                    Home
                </a>
            </li>
            <li>
                <a href="/about" class="flex items-center gap-2 {{ Request::is('/about') ? 'text-black font-semibold active' : 'text-black' }} hover:text-gray-300">
                    <svg class="w-5 h-5 md:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m-4 0h4"></path></svg>
                    about
                </a>
            </li>

              <li>
                <a href="/even-creator" class="flex items-center gap-2 {{ Request::is('/event-creator') ? 'text-black font-semibold active' : 'text-black' }} hover:text-gray-300">
                    <svg class="w-5 h-5 md:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m-4 0h4"></path></svg>
                    Event Creator
                </a>
            </li>

              <li>
                <a href="/review" class="flex items-center gap-2 {{ Request::is('/review') ? 'text-black font-semibold active' : 'text-black' }} hover:text-gray-300">
                    <svg class="w-5 h-5 md:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m-4 0h4"></path></svg>
                    Review
                </a>
            </li>

                  <li>
                <a href="/contact" class="flex items-center gap-2 {{ Request::is('/contact') ? 'text-black font-semibold active' : 'text-black' }} hover:text-gray-300">
                    <svg class="w-5 h-5 md:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m-4 0h4"></path></svg>
                    Contact
                </a>
            </li>
            <li class="md:hidden flex flex-col space-y-2 mt-2">
                <a href="/login">
                    <button class="login w-full">Login</button>
                </a>
                <a href="/register">
                    <button class="signup w-full">Sign Up</button>
                </a>
            </li>
        </ul>
        <!-- Auth Buttons Desktop -->
        <div class="auth-buttons hidden md:flex space-x-3">
            <a href="/login">
                <button class="login">Login</button>
            </a>
            <a href="/register">
                <button class="signup">Sign Up</button>
            </a>
        </div>
    </div>
    </header>

    <main class="p-6">
        @yield('content')
    </main>
    <script src="/js/headerfooter.js"></script>
</body>
</html>
