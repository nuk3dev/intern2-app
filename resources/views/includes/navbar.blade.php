<header class="flex items-center justify-between px-8 py-4 font-bold text-white bg-gray-800">
    <div class="flex items-center">
        <img src="{{ asset('images/HOBO_logo.png') }}" class="h-12">
    </div>
    <nav class="justify-center space-x-6 max-sm:hidden md:flex">
        <a href="{{ url('') }}" class="hover:text-[#92d051]">Home</a>
        <a href="{{ url('contact') }}" class="hover:text-[#92d051]">Contact</a>
    </nav>
    <button aria-controls="mobile-menu" aria-expanded="false" class="text-white md:hidden">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>
    <div class="items-center ml-4 max-sm:hidden md:flex">
        @if(!Auth::check())
            <a href="/login" class="ml-4 text-white hover:text-[#92d051]">Login</a>
        @else
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="ml-4 text-white hover:text-[#92d051]">Logout</button>
            </form>
            <a href="/profile" class="ml-4 text-white hover:text-[#92d051]">Profile</a>
        @endif
    </div>
</header>
<nav id="mobile-menu" class="flex flex-col hidden px-8 py-4 space-y-4 text-white bg-black md:hidden">
    <a href="{{ url('') }}" class="hover:text-[#92d051]">Home</a>
    <a href="{{ url('contact') }}" class="hover:text-[#92d051]">Contact</a>
    @if(!Auth::check())
        <a href="/login" class="text-white hover:text-[#92d051]">Login</a>
    @else
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="text-white hover:text-[#92d051]">Logout</button>
        </form>
        <a href="/profile" class="text-white hover:text-[#92d051]">Profile</a>
    @endif
</nav>
