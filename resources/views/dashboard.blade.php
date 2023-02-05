<x-app-layout>
       <x-slot name="header">
            <h2 class="font-bold text-xl text-white dark:text-black-200 leading-tight">
            {{ __('Dashboard') }} 
            </h2>
        </x-slot>

    <div class="py-12">
        <div>
            <div>
                <div class="bg-yellow-500 text-2xl p-5 text-white dark:text-black-100">
                    
                    
                    
                    <h1>Welcome! {{ Auth::user()->name }}, How can we help you?</h1>
                    
                    <div class="w-full" >
                        <img src="assets/img/portfolio/Chicken 1.png" width="900px" />
                        <img src="assets/img/portfolio/Chicken 2.png" width="900px" />
                        <img src="assets/img/portfolio/Chicken 3.png" width="900px" />
                        <img src="assets/img/portfolio/Chicken 4.png" width="900px" />
                        <img src="assets/img/portfolio/Chicken 5.png" width="900px" />
                        <img src="assets/img/portfolio/Chicken 6.png" width="900px" />
                        <img src="assets/img/portfolio/Chicken 7.png" width="900px" />
                        <img src="assets/img/portfolio/Chicken 8.png" width="900px" />
                        <img src="assets/img/portfolio/Chicken 9.png" width="900px" />
                        <img src="assets/img/portfolio/Chicken 10.png" width="900px" />
                    </div>    
                    

                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
