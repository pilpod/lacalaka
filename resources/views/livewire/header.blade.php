<header class="bg-gray-900 p-3 grid-rows-2">
    <div>
    <img class="relative z-10 w-2000" style="background-image:url(https://w7.pngwing.com/pngs/785/778/png-transparent-beautiful-color-lights-colour-beautiful-hang-lamp.png)">

    <div class="flex justify-between items-center mb-5">
        <a href="{{route('home')}}">
            <img src="https://images.vexels.com/media/users/3/184839/isolated/lists/075c413496f834ab41b55c283434f614-calavera-mexicana-calavera-plana.png" class="w-20 h-20 mr-2">
        </a>
        <h1 class="uppercase text-center tracking-wide font-bold font-cursive text-center text-2xl md:text-4xl lg:text-6xl text-gray-500 mx-3">Fiestas a la Carta</h1>
        
        <h3 class="relative mx-3 text-base font-bold md:block md:text-2xl lg:text-3xl text-gray-400"><i class="mdi mdi-skull"></i> La Calaka</h3>
        
    </div>
</div>
    <nav class="flex justify-between">

        @if (Route::has('login'))
        <div class="sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-lg md:text-xl text-gray-200 underline"><i class="mdi mdi-skull"></i>Dashboard</a>
            @else
            <div class="flex-row">
            <a href="{{ route('login') }}" class="text-lg md:text-xl text-gray-200"><i class="mdi mdi-skull"></i>
                Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-lg md:text-xl text-gray-200 "><i class="mdi mdi-sunglasses"></i>
                Register</a>
            </div>
            @endif
            @endauth
        </div>
        @endif
        <div x-data="{ showPartyStyles: false }" class="relative">
            <button @click="showPartyStyles = true" class="inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-1 py-0 md:px-2 md:py-1 lg:px-4 lg:py-2 bg-#6F2232 text-sm text-gray-200 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="options-menu" aria-haspopup="true" aria-expanded="true""> Filter By Styles</button>
            <ol class=" origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10" id=" dropdownPartyStyles" x-show="showPartyStyles" @click.away="showPartyStyles = false">
                @foreach($partyStyles as $partyStyle)
                <li class="text-center">
                <button wire:click="filterByStyle('{{$partyStyle}}')">
                {{$partyStyle}}
                </button>
                </li>
                @endforeach
                </ol>
        </div>
    </nav>
</header>