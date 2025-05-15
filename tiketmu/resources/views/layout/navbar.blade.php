<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ITQOM header-footer</title>
    {{-- tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css1/home.css" />
    {{-- aos --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
    <div class="container mx-auto flex items-center justify-between px-4 py-3">
       <a href="#" class="logo flex items-center text-xl font-bold text-black">
    TIKETMU
</a>
        <!-- Hamburger Icon -->
        <button id="hamburger" class="md:hidden flex flex-col justify-center items-center w-10 h-10 focus:outline-none">
            <span class="block w-6 h-0.5 bg-white mb-1"></span>
            <span class="block w-6 h-0.5 bg-white mb-1"></span>
            <span class="block w-6 h-0.5 bg-white"></span>
        </button>
        <!-- Navigation Links -->
        <ul id="nav-menu" class="hidden md:flex nav-links flex-col md:flex-row md:items-center md:space-x-6 absolute md:static top-16 left-0 w-full md:w-auto bg-[#564AB1] md:bg-transparent shadow md:shadow-none px-6 md:px-0 py-4 md:py-0 transition-all duration-300">
            <li>
                <a href="/" class="flex items-center gap-2 {{ Request::is('/') ? 'text-black-300 font-semibold active' : 'text-white' }} hover:text-purple-300">
                    <svg class="w-5 h-5 md:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m-4 0h4"></path></svg>
                    home
                </a>
            </li>
            <li>
                <a href="/about" class="flex items-center gap-2 {{ Request::is('about') ? 'text-black-300 font-semibold active' : 'text-black' }} hover:text-purple-300">
                    <svg class="w-5 h-5 md:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 01-8 0M12 14v7m-7-7a7 7 0 0114 0v7H5v-7z"></path></svg>
                    about
                </a>
            </li>
            <li>
                <a href="/event creator" class="flex items-center gap-2 {{ Request::is('event creator') ? 'text-black-300 font-semibold active' : 'text-black' }} hover:text-purple-300">
                    <svg class="w-5 h-5 md:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 20h9"></path><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m0 0H3"></path></svg>
                    event creator
                </a>
            </li>
            <li>
                <a href="/review" class="flex items-center gap-2 {{ Request::is('review') ? 'text-black-300 font-semibold active' : 'text-black' }} hover:text-purple-300">
                    <svg class="w-5 h-5 md:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8M12 8v8"></path></svg>
                    review
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
    <button class="bg-[#564AB1] text-white py-2 px-4 rounded hover:bg-purple-700 transition">
        Login
    </button>
</a>

           <a href="/Signup">
    <button class="bg-[#564AB1] text-white py-2 px-4 rounded hover:bg-purple-700 transition">
        Signup  
    </button>
</a>

        </div>
    </div>
</header>
</body>

</html>
<script src ="/js/navbar.js"></script>
