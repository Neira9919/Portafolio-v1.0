<div>
    <button wire:click="$set('open', true)"
    class="ml-4 mt-2 rounded-md font-ail text-lg bg-transparent font-bold text-white border-2 border-white transition-all duration-200 group-hover:w-full ease transform hover:scale-110 py-2 px-4 inline-flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 -ml-2" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd" />
      </svg>
    Actualizar CV
</button>

<x-jet-dialog-modal wire:model="open">

    <x-slot name="title">
        <h2 class=" text-kh_main font-ail font-bold text-2xl">Actualizar CV</h2>
    </x-slot>

    <x-slot name="content">
        <div class="mb-4">
            <x-jet-label class="mt-2" value="Añadir nuevo CV" />
            <div class="font-ail font-light mt-2">
                <input type="file" wire:model="cv">
                @error('cv') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
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
        <button wire:click="CV_upload" wire:loading.attr="disabled" wire:target="CV_upload, cv"
            class=" ml-4 mt-2 rounded-md shadow font-ail text-lg bg-white font-normal border-b-2 border-green-600 transition-all duration-200 group-hover:w-full ease hover:border-white hover:text-white hover:bg-green-600 py-2 px-6 inline-flex items-center disabled:opacity-25 disabled:cursor-not-allowed">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 -ml-2" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                    clip-rule="evenodd" />
            </svg>
            Subir CV
        </button>
    </x-slot>

</x-jet-dialog-modal>
</div>
