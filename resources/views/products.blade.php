<x-app-layout>
       <x-slot name="header">
            <h2 class="font-bold text-xl text-white dark:text-black-200 leading-tight">
                {{ __('Products') }} 
            </h2>
        </x-slot>

    <div class="py-12">
        <div>
            <div>
                <div class="bg-yellow-500 text-2xl p-5 text-white dark:text-black-100">
                    
                    <h1 class="text-center">Cooked Products</h1>

                    <table class="table-auto w-full m-5">
                        <thead>
                            <tr>
                            <th class="text-left p-6">Menu Items</th>
                            <th>Prize</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fried Chicken (11 pcs)</td>
                                <td class="text-center">₱199</td>
                            </tr>
                            <tr>
                                <td>Fried Chicken (5 pcs)</td>
                                <td class="text-center">₱199</td>
                            </tr>
                            <tr>
                                <td>Fried Chooks Hot & Spicy Jumbo</td>
                                <td class="text-center">₱300</td>
                            </tr>
                            <tr>
                                <td>Fried Chooks Pepper Jumbo</td>
                                <td class="text-center">₱300</td>
                            </tr>
                            <tr>
                                <td>Fried Chooks Sweet Jumbo</td>
                                <td class="text-center">₱300</td>
                            </tr>
                            <tr>
                                <td>Hot & Spicy Roast Jumbo</td>
                                <td class="text-center">₱300</td>
                            </tr>
                            <tr>
                                <td>Juicy Liempo</td>
                                <td class="text-center">₱260</td>
                            </tr>
                            <tr>
                                <td>Kinulob Na Itik</td>
                                <td class="text-center">₱265</td>
                            </tr>
                            <tr>
                                <td>Pepper Roast Jumbo</td>
                                <td class="text-center">₱300</td>
                            </tr>
                            <tr>
                                <td>Sweet Roast Jumbo</td>
                                <td class="text-center">₱300</td>
                            </tr>
                            <tr>
                                <td>UR Hot & Spicy</td>
                                <td class="text-center">₱300</td>
                            </tr>
                            <tr>
                                <td>UR Inasal Classic</td>
                                <td class="text-center">₱300</td>
                            </tr>
                            <tr>
                                <td>UR Sweet & Spicy</td>
                                <td class="text-center">₱300</td>
                            </tr>
                        </tbody>
                    </table>

                    <h1 class="text-center">Frozen Products</h1>

                    <table class="table-auto w-full m-5">
                        <thead>
                            <tr>
                            <th class="text-left p-6">Menu Items</th>
                            <th>Prize</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Adobo Flakes (320g)</td>
                                <td class="text-center">₱160</td>
                            </tr>
                            <tr>
                                <td>Chicken nuggets</td>
                                <td class="text-center">₱90</td>
                            </tr>
                            <tr>
                                <td>Marinado - Fried Chicken</td>
                                <td class="text-center">₱135</td>
                            </tr>
                            <tr>
                                <td>Marinado - Pepper</td>
                                <td class="text-center">₱125</td>
                            </tr>
                            <tr>
                                <td>Marinado - Spicy</td>
                                <td class="text-center">₱125</td>
                            </tr>
                            <tr>
                                <td>Marinado - Sweet</td>
                                <td class="text-center">₱125</td>
                            </tr>
                            <tr>
                                <td>Spicy Neck</td>
                                <td class="text-center">₱105</td>
                            </tr>
                        </tbody>
                    </table>
                    






                </div>
            </div>
        </div>
    </div>
</x-app-layout>