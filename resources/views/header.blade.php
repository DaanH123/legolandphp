<script src="https://cdn.tailwindcss.com"></script>
<script src="{{ mix('js/app.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<div class="block md:flex justify-evenly items-center bg-yellow-400 p-4 w-[100%]">
    <div class="flex justify-around items-center w-full md:w-auto">
        <div class="w-28">
            <img src="{{asset('LEGOLAND_PARKS_LOGO.svg')}}" alt="">
        </div>
        <div class="md:hidden">
            <button id="hamburger-button" class="text-white">&#9776;</button>
        </div>
    </div>
    <div id="menu" class="hidden md:block pt-4 md:pt-0 flex flex-col md:space-x-3 md:flex-row md:justify-evenly text-center text-white w-full md:w-auto">
        <a href="{{ route('home') }}">Home</a>
        <a href="">Over</a>
        <a href="{{ route('attractions') }}">Attracties</a>
        <a href="">Tickets</a>
        <a href="">Contact</a>
    </div>
</div>