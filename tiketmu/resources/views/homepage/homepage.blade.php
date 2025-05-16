@extends('layout.navbar')

@section('content')
<section class="bg-purple text-black px-10 py-24 flex justify-start items-center min-h-[80vh]">

    <div class="bg-purple text-left max-w-xl">
        <h1 class="text-3xl font-bold mb-6">Selamat Datang di Tiketmu</h1>
        <p class="text-gray-600 mb-6">Platform untuk membuat dan memesan tiket acara dengan mudah.</p>
        <a href="/event" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition mr-2">Lihat Event</a>
        <a href="/event" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Lihat Selengkapnya</a>
    </div>

</section>

<section class="bg-purple text-black px-10 py-24 flex justify-center items-center min-h-[80vh]">
    <div class="bg-purple text-center max-w-xl">
        <h1 class="text-3xl font-bold mb-6">Selamat Datang di Tiketmu</h1>
        <p class="text-gray-600 text-left mb-6">Platform untuk membuat dan memesan tiket acara dengan mudah.</p>
    </div>

</section>



@endsection
