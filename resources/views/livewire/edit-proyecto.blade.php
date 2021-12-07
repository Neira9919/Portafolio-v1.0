<div>
    <button wire:click="$set('open', true)"
        class="ml-4 mt-2 rounded-md font-ail bg-blue-500 font-normal text-white border-2 border-white transition-all duration-200 group-hover:w-full ease hover:border-blue-500 hover:text-blue-500 hover:bg-white py-2 px-4 inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 -ml-2" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
        </svg>
        Editar
    </button>
    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            <h2 class="text-kh_main font-ail font-bold text-2xl">Editar Proyecto</h2>
        </x-slot>

        <x-slot name="content">
            <div class="mb-4 rounded">
                <div class="flex justify-center">
                    <img wire:loading wire:target="img" src="{{ asset('img/svg/oval.svg') }}" class="w-30 p-10">
                </div>
                @if ($old_img && !$img)
                    <img class="rounded" src="{{ $old_img->url }}">
                @else
                    @if ($img)
                    <img class="rounded" src="{{ $img->temporaryUrl() }}">
                    @endif
                @endif
            </div>
            <div class="mb-4">
                <div class="font-ail font-light ">
                    <x-jet-label class="mt-2" value="Nombre" />
                    <input wire:model="proyecto.nombre" placeholder="Nombre"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        type="text">
                    @error('proyecto.nombre') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="font-ail font-light ">
                    <x-jet-label class="mt-2" value="Url" />
                    <input wire:model="proyecto.url" placeholder="Url"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        type="text">
                    @error('proyecto.url') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="font-ail font-light ">
                    <x-jet-label class="mt-2" value="Tecnologias Utilizadas" />
                    <input wire:model="proyecto.tech" placeholder="Tecnologias Utilizadas"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        type="text">
                    @error('proyecto.tech') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="font-ail font-light ">
                    <x-jet-label class="mt-2" value="Descripcion" />
                    <textarea wire:model="proyecto.descripcion" placeholder="Descripcion ..."
                        class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        rows=" 10"></textarea>
                    @error('proyecto.descripcion') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
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
                Guardar Cambios
            </button>
        </x-slot>

    </x-jet-dialog-modal>

</div>
