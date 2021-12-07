<div>
    <button wire:click="$set('open', true)"
        class="ml-4 mt-2 rounded-md shadow font-ail text-lg bg-kh_main font-normal text-white border-b-2 border-white transition-all duration-200 group-hover:w-full ease hover:border-kh_main hover:text-black hover:bg-white py-2 px-6 inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 -ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                clip-rule="evenodd" />
        </svg>
        Añadir Proyecto
    </button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            <h2 class=" text-kh_main font-ail font-bold text-2xl">Crear nuevo Proyecto</h2>
        </x-slot>

        <x-slot name="content">
            <div class="mb-4 rounded">
                <div class="flex justify-center">
                    <img wire:loading wire:target="img" src="{{ asset('img/svg/oval.svg') }}" class="w-30 p-10">
                </div>
                @if ($img)
                    <img src="{{ $img->temporaryUrl() }}">
                @endif
            </div>
            <div class="mb-4">
                <div class="font-ail font-light ">
                    <input placeholder="Nombre"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        type="text" wire:model="nombre">
                    @error('nombre') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="font-ail font-light ">
                    <input placeholder="Url"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        type="text" wire:model="url">
                    @error('url') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="font-ail font-light ">
                    <input placeholder="Tecnologias Utilizadas"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        type="text" wire:model="tech">
                    @error('tech') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="font-ail font-light ">
                    <textarea placeholder="Descripcion ..."
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        wire:model="descripcion"" rows=" 10"></textarea>
                    @error('descripcion') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="font-ail font-light mt-2">
                    <input type="file" wire:model="img">
                    @error('img') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <button wire:click="cerrar"
                class="ml-4 mt-2 rounded-md shadow font-ail text-lg bg-white font-normal border-b-2 border-red-600 transition-all duration-200 group-hover:w-full ease hover:border-white hover:text-white hover:bg-red-600 py-2 px-6 inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 -ml-2" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
                Cancelar
            </button>
            <button wire:click="submit" wire:loading.attr="disabled" wire:target="submit, img"
                class=" ml-4 mt-2 rounded-md shadow font-ail text-lg bg-white font-normal border-b-2 border-green-600 transition-all duration-200 group-hover:w-full ease hover:border-white hover:text-white hover:bg-green-600 py-2 px-6 inline-flex items-center disabled:opacity-25 disabled:cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 -ml-2" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                        clip-rule="evenodd" />
                </svg>
                Crear Proyecto
            </button>
        </x-slot>

    </x-jet-dialog-modal>
</div>
