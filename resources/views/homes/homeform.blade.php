<x-app-layout>
        <x-slot name="header">
            <h2 class="font-bold text-xl text-black-800 dark:text-black-200 leading-tight">
                {{ $header }}
            </h2>
        </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-stone dark:bg-stone-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100"> 
                    
                    <form method="POST" action="{{ ( url()->current() == url('/home/add') ) ? url('/home/add'):url('/home/update/' . $announcement->id) }}">
                        @csrf

                        

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="( url()->current() == url('/home/add') ) ? old('name'):$announcement->name" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Description -->
                        <div class="mt-4 text-black">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="( url()->current() == url('/home/add') ) ? old('description'):$announcement->description" required />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ $header }}
                            </x-primary-button>
                        </div>
                
                    </form>
                </div>
            </div>
        </div>
    </div>                  
</x-app-layout>