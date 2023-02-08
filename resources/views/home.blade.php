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
                        <button class="float-right rounded-full border-black border-2 bg-red-900 p-1 hover:bg-slate-400">
                            Add Announcement
                        </button>
                    </a>

                    <h1>Announcements</h1>
                    
                    <table class="table-auto w-full m-5">
                        <thead>
                            <tr>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td>Malcolm Lockyer</td>
                                <td>1961</td>
                            </tr>
                            <tr>
                                <td>Witchy Woman</td>
                                <td>The Eagles</td>
                                <td>1972</td>
                            </tr>
                            <tr>
                                <td>Shining Star</td>
                                <td>Earth, Wind, and Fire</td>
                                <td>1975</td>
                            </tr>
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