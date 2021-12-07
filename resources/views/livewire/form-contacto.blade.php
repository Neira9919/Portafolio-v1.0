<div>

    <div class="container mx-auto my-auto">
        <div class="grid grid-cols-1">
            <div class="p-4 bg-white mx-4 my-4 rounded-md shadow"">
                <h1 class="mx-auto font-ail text-kh_main font-bold text-4xl text-center">Pongamonos en contacto</h1>

            <h2 class="text-kh_clair font-ail font-bold text-xl mt-8">Dime que tienes en mente, me pondre en contacto
                contigo a la brevedad.<br></h2>

            <form wire:submit.prevent="submit">
                <div class="font-ail font-light ">
                    <input placeholder="Nombre"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        type="text" wire:model="nombre">
                    @error('nombre') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="font-ail font-light ">
                    <input placeholder="Email"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        type="text" wire:model="email">
                    @error('email') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="font-ail font-light ">
                    <input placeholder="Telefono"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        type="text" wire:model="tel">
                    @error('tel') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="font-ail font-light ">
                    <textarea placeholder="Mensaje ..."
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-600 rounded-md focus:border-blue-400 focus:outline-none focus:ring"
                        wire:model="mensaje"" rows=" 10"></textarea>
                    @error('mensaje') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="flex justify-end">
                    <button wire:click="clear"
                        class="mt-2 mr-2 font-ail text-lg bg-white text-gray-800 font-normal rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-2">Limpiar</span>
                    </button>
                    <button type="submit"
                        class="mt-2 font-ail text-lg bg-white text-gray-800 font-normal rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        <span class="ml-2">Enviar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
