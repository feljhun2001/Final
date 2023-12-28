<x-app-layout>
       <x-slot name="header">
            <h2 class="font-bold text-xl text-white dark:text-black-200 leading-tight">
                {{ __('Home') }} 
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
                <div class="bg-yellow-500 text-2xl p-5 text-white dark:text-black-100">
         
                    <a href="{{ url('/home/add') }}">
                        <button class="float-right rounded-full border-black border-2 bg-red-900 p-1 hover:bg-sky-700">
                            Add Announcement
                        </button>
                    </a>
                    
                    <h1>Announcement</h1>

                    <table class="table-auto w-full m-5 p-6">
                        <thead>
                            <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($home as $announcement)
                                <tr>
                                    <td> {{ $announcement->name }} </td>
                                    <td class="text-center">{{ $announcement->description }}</td>
                                        <td class="text-center">
                                            <a href="{{ url('/home/update/' . $announcement->id) }}">
                                                <button class="rounded-full bg-red-900 border-black border-2 p-1 hover:bg-sky-700">Update</button>
                                            </a>
                                            <a href="{{ url('/home/delete/' . $announcement->id) }}">
                                                <button class="rounded-full bg-red-900 border-black border-2 p-1 hover:bg-sky-700">Delete</button>
                                            </a>
                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="content-center p-28">
                        <img src="assets/img/portfolio/CTG Announcement.png"/>
                    </div>
                    






                </div>
            </div>
        </div>
    </div>
</x-app-layout>