<div>
    <nav class="bg-kh_main" x-data="{open: false}">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a class="text-3xl font-ail text-white font-bold font-heading inline-flex items-center" href="{{route('home')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                          </svg>
                        Sebastian Neira
                      </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <a href="{{route('home')}}"
                            class="{{request()->routeIs('home') ? 'bg-kh_clair' : ''}} font-ail text-xl bg-kh_main text-white font-normal border-b-2 border-kh_clair transition-all duration-200 group-hover:w-full ease hover:border-white hover:bg-kh_clair py-2 px-6 inline-flex items-center">Home</a>
                        <a href="{{route('portafolio.proyectos')}}"
                            class="{{request()->routeIs('portafolio.proyectos') ? 'bg-kh_clair' : ''}} font-ail text-xl bg-kh_main text-white font-normal border-b-2 border-kh_clair transition-all duration-200 group-hover:w-full ease hover:border-white hover:bg-kh_clair py-2 px-6 inline-flex items-center">Portafolio</a>
                        <a href="{{route('contactos.index')}}"
                            class="{{request()->routeIs('contactos.index') ? 'bg-kh_clair' : ''}} font-ail text-xl bg-kh_main text-white font-normal border-b-2 border-kh_clair transition-all duration-200 group-hover:w-full ease hover:border-white hover:bg-kh_clair py-2 px-6 inline-flex items-center">Contacto</a>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" x-on:click="open=!open"
                        class="bg-kh_mate inline-flex items-center justify-center p-2 rounded-md text-white hover:text-kh_mate hover:bg-kh_mate focus:outline-none focus:ring-2 focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
                Heroicon name: outline/menu
  
                Menu open: "hidden", Menu closed: "block"
              -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!--
                Heroicon name: outline/x
  
                Menu open: "block", Menu closed: "hidden"
              -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="open" class="md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white">
                <a href="{{route('home')}}"
                    class="{{request()->routeIs('home') ? 'bg-kh_clair' : ''}} font-ail text-black font-normal text-lgnormalgray-100 transition-all duration-200 group-hover:w-full ease hover:bg-kh_mate hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>

                <a href="{{route('portafolio.proyectos')}}"
                    class="{{request()->routeIs('portafolio.proyectos') ? 'bg-kh_clair' : ''}} font-ail text-black font-normal text-lgnormalnsition-all duration-200 group-hover:w-full ease hover:bg-kh_mate hover:text-white block px-3 py-2 rounded-md text-base font-medium">Portafolio</a>

                <a href="{{route('contactos.index')}}"
                    class="{{request()->routeIs('contactos.index') ? 'bg-kh_clair' : ''}} font-ail text-black font-normal text-lgnormalnsition-all duration-200 group-hover:w-full ease bg-gray-100 hover:bg-kh_mate hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contacto</a>
            </div>
        </div>
    </nav>
</div>
