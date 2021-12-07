<div>
    <button wire:click="$set('open', true)"
        class="ml-4 mt-2 rounded-md font-ail bg-blue-500 font-normal text-white border-2 border-white transition-all duration-200 group-hover:w-full ease hover:border-blue-500 hover:text-blue-500 hover:bg-white py-2 px-4 inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 -ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd" />
        </svg>
        Ver
    </button>
    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            <h2 class="text-kh_main font-ail font-bold text-2xl">Informacion de Contacto</h2>
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <div class="font-ail font-light ">
                    <x-jet-label class="mt-2" value="Fecha de Contacto" />
                    <input wire:model="contacto.created_at" placeholder="Fecha de Contacto"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        type="text" readonly>
                </div>
                <div class="font-ail font-light ">
                    <x-jet-label class="mt-2" value="Nombre" />
                    <input wire:model="contacto.nombre" placeholder="Nombre"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        type="text" readonly>
                </div>
                <div class="font-ail font-light ">
                    <x-jet-label class="mt-2" value="Telefono" />
                    <input wire:model="contacto.telefono" placeholder="Telefono"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        type="text" readonly>
                </div>
                <div class="font-ail font-light ">
                    <x-jet-label class="mt-2" value="Email" />
                    <input wire:model="contacto.email" placeholder="Email"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        type="text" readonly>
                </div>
                <div class="font-ail font-light ">
                    <x-jet-label class="mt-2" value="Descripcion" />
                    <textarea wire:model="contacto.desc" placeholder="Descripcion ..."
                        class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                    rows="10" readonly></textarea>
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
                Cerrar
            </button>
        </x-slot>

    </x-jet-dialog-modal>
</div>
