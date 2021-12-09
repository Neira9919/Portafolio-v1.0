<div>
    <div class="container mt-4 mx-auto p-4">
        @foreach ($proyectos as $item)
        <div class="mt-4 grid grid-cols-1 lg:grid-cols-3 shadow bg-white rounded-md">
            <div class="col-span-1 md:col-span-2 p-4 mx-4 my-auto rounded-md">
                @foreach ($fotos as $foto)
                    @if ($foto->proyecto_id == $item->id)
                    <img class="rounded-md shadow transition duration-700 transform hover:scale-105" src="{{asset($foto->url)}}">
                    @endif
                @endforeach
            </div>
            <div class="col-span-1 px-4 py-4 mx-4 my-auto rounded-md">
                <h2 class="text-kh_main text-center font-ail font-bold text-2xl mt-6">{{$item->nombre}}</h2>
                <p class="pb-4 font-ail text-center text-gray-600 font-normal mt-4 mx-auto mb-4 ">{{$item->descripcion}}</p>
                <h2 class="text-kh_clair text-center font-ail text-xl font-bold mt-6">Tecnologias utilizadas</h2>
                <p class="pb-4 font-ail text-center text-gray-600 font-normal mt-4 mx-auto mb-4 ">{{$item->tech}}</p>
                <div class="flex justify-end">
                <a href={{$item->url}} class=" my-auto font-ail text-lg bg-white text-gray-800 font-normal rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                    <span class="mx-auto my-auto">Visitar Proyecto</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                        <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                      </svg>
                </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
