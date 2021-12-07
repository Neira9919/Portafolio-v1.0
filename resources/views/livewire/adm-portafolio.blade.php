<div>
    @section('title', 'ADM Portafolio | Sebastian Neira - Programador / Desarrollador web')
    <div class="container mx-auto mt-8 p-4">
        <x-table>
            <!--aqui va el buscador y la opcion crear nuevo registro -->
            <div class="relative px-6 py-4 flex items-center">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="text-kh_main pointer-events-none h-5 w-5 absolute top-1/2 transform -translate-y-1/3 left-8"
                    viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd" />
                </svg>
                <input placeholder="    Buscar..."
                    class="block w-auto px-4 pr-2 pl-8 mt-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-kh_clair focus:outline-none "
                    type="text" wire:model="search">
                @livewire('create-proyecto')
                <div class="absolute right-4">
                    <div class="flex items-center font-ail">
                        <span class="mr-2">Mostrar</span>
                        <select wire:model="l_amount"
                        class="text-gray-700 bg-white border border-gray-600 rounded-md focus:border-kh_clair focus:outline-none">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span class="ml-2">entradas</span>
                    </div>
                </div>
            </div>
            @if ($proyectos->count())
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="order('id')">
                                ID

                                @if ($sort == 'id')
                                    @if ($direction == 'asc')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-5 w-5 -mt-0.5"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z" />
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-5 w-5 -mt-0.5"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h7a1 1 0 100-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" />
                                        </svg>
                                    @endif
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-5 w-5 -mt-0.5"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                @endif

                            </th>
                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="order('nombre')">
                                Nombre

                                @if ($sort == 'nombre')
                                    @if ($direction == 'asc')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-5 w-5 -mt-0.5"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z" />
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-5 w-5 -mt-0.5"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h7a1 1 0 100-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" />
                                        </svg>
                                    @endif
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-5 w-5 -mt-0.5"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                @endif
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Url
                            </th>
                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="order('tech')">
                                Tech

                                @if ($sort == 'tech')
                                    @if ($direction == 'asc')
                                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-5 w-5 -mt-0.5"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z" />
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-5 w-5 -mt-0.5"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h7a1 1 0 100-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" />
                                        </svg>
                                    @endif
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-5 w-5 -mt-0.5"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                @endif
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Opciones</span>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($proyectos as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $item->id }}
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $item->nombre }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href={{ $item->url }}>
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            {{ $item->url }}
                                        </span>
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $item->tech }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    @livewire('edit-proyecto', ['proyecto' => $item], key($item->id))
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else

                <h2 class="text-red-600 font-ail p-4 text-center mx-auto font-bold text-xl">No se encontraron registros
                    coincidentes.</h2>
            @endif
            @if ($proyectos->hasPages())
            <div class="px-6 py-3">
                {{$proyectos->links()}}
            </div>
            @endif

        </x-table>
    </div>
</div>
