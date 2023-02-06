<x-app-layout>
       <x-slot name="header">
            <h2 class="font-bold text-xl text-white dark:text-black-200 leading-tight">
                {{ __('Users') }} 
            </h2>
        </x-slot>

        <div class="py-12">
            @if ( session('status') )
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                    <div class="p-4 mb-4 text-sm text-red-600 bg-red-100 rounded-lg dark:bg-gray-800 dark:text-red-300" role="alert">
                        <span class="font-medium">Success Alert!</span> {{ session('status') }}
                    </div> 
                </div>
            @endif
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-yellow-500 dark:bg-stone-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-white dark:text-gray-100">
                        
                        <h2 class="float-left">
                            {{ $header }}
                        </h2>
                        
                        <a href="{{ url('/users/add') }}">
                            <button class="float-right rounded-full border-black border-2 bg-red-900 p-1 hover:bg-slate-400">
                                Add Users
                            </button>
                        </a>
                        

                        <table class="table-auto w-full m-5">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>                               
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td> {{ $user->name }} </td>
                                        <td class="text-center">{{ $user->email }}</td>
                                            <td class="text-center">
                                                <a href="{{ url('/users/update/' . $user->id) }}">
                                                    <button class="rounded-full bg-red-900 border-black border-2 p-1 hover:bg-sky-700">Update</button>
                                                </a>
                                                <a href="{{ url('/users/delete/' . $user->id) }}">
                                                    <button class="rounded-full bg-red-900 border-black border-2 p-1 hover:bg-sky-700">Delete</button>
                                                </a>
                                            </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>