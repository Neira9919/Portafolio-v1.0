@extends('layouts.plantilla')
@section('title', 'Sebastian Neira - Programador / Desarrollador web')
@section('estilos')
    <style>
        .imagen {
            background-image: url("{{ asset('img/Background.jpg') }}");
            background-position: right top;
            height: 100vh;
            width: auto;
        }

        .italic {
            font-style: italic;
        }

        body {
            background-color: #f9f7f9;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='152' height='152' viewBox='0 0 152 152'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='temple' fill='%238c2a86' fill-opacity='0.16'%3E%3Cpath d='M152 150v2H0v-2h28v-8H8v-20H0v-2h8V80h42v20h20v42H30v8h90v-8H80v-42h20V80h42v40h8V30h-8v40h-42V50H80V8h40V0h2v8h20v20h8V0h2v150zm-2 0v-28h-8v20h-20v8h28zM82 30v18h18V30H82zm20 18h20v20h18V30h-20V10H82v18h20v20zm0 2v18h18V50h-18zm20-22h18V10h-18v18zm-54 92v-18H50v18h18zm-20-18H28V82H10v38h20v20h38v-18H48v-20zm0-2V82H30v18h18zm-20 22H10v18h18v-18zm54 0v18h38v-20h20V82h-18v20h-20v20H82zm18-20H82v18h18v-18zm2-2h18V82h-18v18zm20 40v-18h18v18h-18zM30 0h-2v8H8v20H0v2h8v40h42V50h20V8H30V0zm20 48h18V30H50v18zm18-20H48v20H28v20H10V30h20V10h38v18zM30 50h18v18H30V50zm-2-40H10v18h18V10z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

    </style>
@endsection
@section('content')
    <div class="imagen bg-cover bg-fixed shadow-inner relative">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div></div>
                <div class="text-white mt-10 ml-4">
                    <h1 class="font-ail font-bold text-5xl text-center antialiased">Quieres crear una pagina web?</h1>
                    <h2 class="text-kh_clair font-ail font-bold text-2xl mt-8 antialiased">Hola!
                        Mi nombre es Sebastian Neira, desarrollador web,</h2>
                    <p class="font-ail font-normal text-lg md:text-xl mt-4 antialiased"> Trabajo actualmente en proyectos como
                        freelancer, desarrollando soluciones web modernas utilizando Laravel.<br>Egrese de Inacap como
                        Analista Programador el año 2020, desde entonces me dedico a desarrollar proyectos a pedido,
                        mientras sigo actualizando mis conocimientos en php, bases de datos relacionales como mySQL y
                        diferentes frameworks de CSS y JS. <br> Desde Single-page hasta E-commerce y proyectos a medida, ¡No
                        dudes en contactarme para darle forma a tus ideas! </p>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 inset-x-0 mx-auto mb-20">
            <svg xmlns="http://www.w3.org/2000/svg" class="animate-bounce text-white h-8 w-8 mx-auto" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
            </svg>
        </div>
    </div>
    <div class="container mx-auto mt-8">

        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="p-4 bg-white mx-4 my-4 rounded-md shadow">
                <img class="mt-8" src="{{ asset('img/gantt.png') }}" alt="Carta Gantt">
                <h2 class="text-kh_main text-center font-ail font-bold text-2xl mt-6">Planificacion por Etapas</h2>
                <p class="pb-4 font-ail text-center text-gray-600 font-normal mt-4 mx-auto mb-4 ">Trabajo con una metodologia
                    basada en
                    prototipos. Esto permite que el resultado final cumpla con tus expectativas y con plasos cortos y
                    realistas.</p>
            </div>
            <div class="p-4 bg-kh_clair mx-4 my-4 rounded-md shadow">
                <img src="{{ asset('img/position.png') }}" alt="Posicionamiento y Funcionalidad">
                <h2 class="text-white text-center font-ail font-bold text-2xl ">Posicionamiento y Funcionalidad</h2>
                <p class="text-white pb-4 font-ail text-center font-normal mt-4 mx-auto mb-4 ">Las aplicaciones que
                    desarrollo son de simple administracion y de simple uso, rapidas y bien posicionadas en buscadores e
                    indexadores.</p>
            </div>
            <div class="p-4 bg-white mx-4 my-4 rounded-md shadow">
                <img class="p-4" src="{{ asset('img/responsive.png') }}" alt="Diseño Responsivo">
                <h2 class="text-kh_main text-center font-ail font-bold text-2xl ">Diseño Moderno y Responsivo</h2>
                <p class="pb-4 font-ail text-center text-gray-600 font-normal mt-4 mx-auto mb-4 ">Utilizo tecnogias modernas,
                    como Laravel
                    y TailwindCSS, lo que me permite emplear un diseño moderno, simple, y adaptable a todas las plataformas
                    de uso común.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 my-8">
            <div class="p-4 mx-4 my-auto">
                <div class="grid grid-cols-2">
                    <div
                        class="p-4 transition duration-300 mx-auto my-auto w-48 h-48 xl:w-64 xl:h-64 transform hover:scale-110">
                        <img src="{{ asset('img/laravel.jpg') }}" alt="Laravel">
                    </div>
                    <div
                        class="p-4 transition duration-500 mx-auto my-auto w-48 h-48 xl:w-64 xl:h-64 transform hover:scale-110">
                        <img src="{{ asset('img/js.png') }}" alt="JavaScript">
                    </div>
                    <div
                        class="p-4 transition duration-700 mx-auto my-auto w-48 h-48 xl:w-64 xl:h-64 transform hover:scale-110">
                        <img src="{{ asset('img/mySQL.jpg') }}" alt="MySQL">
                    </div>
                    <div
                        class="p-4 transition duration-1000 mx-auto my-auto w-48 h-48 xl:w-64 xl:h-64 transform hover:scale-110">
                        <img src="{{ asset('img/CSS3.jpg') }}" alt="CSS3">
                    </div>
                </div>

            </div>
            <div class="p-4 bg-white mx-4 my-4 rounded-md shadow">
                <h2 class="text-kh_main text-center font-ail font-bold text-2xl mt-4 mb-2">Tecnologias que utilizo</h2>
                <p class="pb-4 font-ail text-normal text-lg text-center text-gray-600 mt-4 mx-auto">
                    Soy un entusiasta de aprender nuevas tecnologias, que me permitan crear soluciones de calidad de forma
                    eficiente. Esta lista esta en constante cambio, tanto adquiriendo nuevas habilidades, como reforzando
                    las tecnologias que conosco
                </p>
                <ul class="ml-8 p-4 font-ail text-gray-500 font-light list-outside list-disc antialiased">
                    <li class="mt-2">CSS3 y diferentes framework (Tailwind CSS, Bootstrap 4)</li>
                    <li class="mt-2">Laravel Framework (PHP)</li>
                    <li class="mt-2">JS Nativo y diferentes framework. (Livewire, LeafletJS, AlpineJS, Vue)</li>
                    <li class="mt-2">Bases de datos relacionales (MySQL y SQLserver)</li>
                    <li class="mt-2">Git y GItHub (Sistema de control de versiones.)</li>
                    <li class="mt-2">Mercado Pago API (Pasarela de pagos de Mercado Libre)</li>
                    <li class="mt-2">Linux</li>
                </ul>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 my-8 bg-opacity-25 bg-gradient-to-r from-red-500 via-pink-500 to-kh_main ">
        <div>
            <h2 class="text-white text-center font-ail font-bold text-xl mx-4 my-8">¿Quieres hechar un vistazo a mi CV?
                <br>Aqui puedes acceder a una copia actualziada.</h2>
        </div>
        <div class="mx-auto my-8">
            <div>@livewire('descargar-cv')</div>
        </div>
    </div>
    
    <div class="container mx-auto mt-8">
        <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden mb-8 flex flex-col md:flex-row">
            <div class="w-full md:w-2/5 h-100">
                <img class="object-center object-cover w-full h-full" src="{{ asset('img/I.jpg') }}" alt="photo">
            </div>
            <div class="w-full md:w-3/5 text-left p-6 md:p-4 space-y-2">
                <p class="text-xl text-gray-700 font-ail text-2xl font-bold">Acerca de mi</p>
                <p class="text-base text-kh_clair font-ail text-lg font-light">Analista Programador / Desarrollador Web</p>
                <p class="text-base leading-relaxed font-ail text-gray-500 font-normal mt-8">
                    Entre en el mundo de las TI cuando era pequeño, arreglando equipos e investigando al respecto. Quise
                    aprender a desarrollar videojuegos e hice varios proyectos y prototipos. Ya en Inacap me interese por la
                    programación web, campo en el que sigo especializándome. Creo paginas webs rápidas, de simple uso,
                    acorde a tus necesidades y multiplataforma.
                    <br><br>Soy bastante metódico y poseo buenas habilidades blandas. Me encanta buscar soluciones y cosas
                    nuevas, explorar posibilidades, disfruto de los procesos creativos. Mi personalidad es de tipo ENFP.
                    <br><br> Siempre me han gustado diversas diciplinas, como las artes visuales, literatura, música y la
                    fotografía. Realice un curso de fotografía en la Universidad de los Lagos, realizando un foto reportaje
                    sobre el patrimonio cotidiano de la ciudad de Osorno. La narrativa también es algo que me apasiona, toda
                    mi vida he escrito cuentos, historias, guiones y poesía. En general me gusta aprender de todo y intento
                    complementar mis proyectos con los diferentes conocimientos que he adquirido con el paso del tiempo.
                </p>
            </div>
        </div>
    </div>
@endsection
