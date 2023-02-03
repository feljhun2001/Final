<x-app-layout>
       <x-slot name="header">
            <h2 class="font-bold text-xl text-black-800 dark:text-black-200 leading-tight">
                {{ __('Users') }} 
            </h2>
        </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-stone dark:bg-stone-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <h2 class="float-left">
                        {{ $header }}
                    </h2>                                       
                    <button class="float-right rounded-lg bg-red-400 border-2 border-white p-1 hover:bg-red-800" >
                        Add Users
                    </button>

                    
                    



                </div>
            </div>
        </div>
    </div>
</x-app-layout>