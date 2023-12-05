<header class="bg-neutral-750">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8 border-b-8 border-green-600" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-20 w-auto" src="/images/logoSportFind.png" alt="logoSportFind">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-100">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">

            <a href="{{ route('documento.list') }}" class="text-xl font-semibold leading-6 text-gray-200">Documentos</a>
            <a href="{{ route('cliente.list') }}" class="text-xl font-semibold leading-6 text-gray-200">Clientes</a>
            <a href="{{ route('espaco.list') }}" class="text-xl font-semibold leading-6 text-gray-200">Espaços</a>
            <a href="{{ route('reserva.list') }}" class="text-xl font-semibold leading-6 text-gray-200">Reservas</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        </div>
        <a href="{{ Auth::logout() }}">logout</a>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
</header>
