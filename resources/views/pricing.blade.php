<x-app-layout>
       <x-slot name="header">
            <h2 class="font-bold text-xl text-white dark:text-black-200 leading-tight">
            {{ __('Home') }} 
            </h2>
        </x-slot>

    <div class="py-12">
        <div>
            <div>
                <div class="bg-yellow-500 text-2xl p-5 text-white dark:text-black-100">
                    


                    <table class="table-auto w-full m-5">
                        <thead>
                            <tr>
                            <th>Product</th>
                            <th>Prize</th>
                            <th></th>
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
                    






                </div>
            </div>
        </div>
    </div>
</x-app-layout>