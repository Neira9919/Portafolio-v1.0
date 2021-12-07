<x-app-layout>
    @section('title', 'Dashboard | Sebastian Neira - Programador / Desarrollador web')
    <div class="container mx-auto mt-8">
        <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden mb-8 flex flex-col md:flex-row">
            <div class="w-full md:w-2/5 h-100">
                <img class="object-center object-cover w-full h-full" src="{{ asset('img/I.jpg') }}" alt="photo">
            </div>
            <div class="w-full md:w-3/5 text-left p-6 md:p-4 space-y-2">
                <p class="text-xl text-gray-700 font-ail font-bold">Acerca de mi</p>
                <p class="text-base text-kh_clair font-ail font-normal">Analista Programador / Desarrollador Web</p>
                <p class="text-base leading-relaxed font-ail text-gray-500 font-light mt-8">
                    Entre en el mundo de las TI cuando era pequeño, arreglando equipos e investigando al respecto. Quise
                    aprender a desarrollar videojuegos e hice varios proyectos y prototipos. Ya en Inacap me interese
                    por la
                    programación web, campo en el que sigo especializándome. Creo paginas webs rápidas, de simple uso,
                    acorde a tus necesidades y multiplataforma.
                    <br><br>Soy bastante metódico y poseo buenas habilidades blandas. Me encanta buscar soluciones y
                    cosas
                    nuevas, explorar posibilidades, disfruto de los procesos creativos. Mi personalidad es de tipo ENFP.
                    <br><br> Siempre me han gustado diversas diciplinas, como las artes visuales, literatura, música y
                    la
                    fotografía. Realice un curso de fotografía en la Universidad de los Lagos, realizando un foto
                    reportaje
                    sobre el patrimonio cotidiano de la ciudad de Osorno. La narrativa también es algo que me apasiona,
                    toda
                    mi vida he escrito cuentos, historias, guiones y poesía. En general me gusta aprender de todo y
                    intento
                    complementar mis proyectos con los diferentes conocimientos que he adquirido con el paso del tiempo.
                </p>

            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 my-8 bg-opacity-25 bg-gradient-to-r from-red-500 via-pink-500 to-kh_main ">
        <div>
            <h2 class="text-white text-center font-ail font-bold text-xl mx-4 my-8">¿Quieres actualizar tu CV?
                <br>Sube una copia en formato pdf ---></h2>
        </div>
        <div class="mx-auto my-8">
            <div>@livewire('actualizar-cv')</div>
        </div>
    </div>


</x-app-layout>
