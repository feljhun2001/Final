<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Validation\Rules;





class HomeController extends Controller
{
    
    public function index()
    {
        return view('homes.home', [
            'header'    => 'Announcement',
            'home'     => Product::all()
        ]);
    }

    public function form()
    {
        return view('homes.homeform', [
            'header'    => 'Add Announcement',
        ]);
    }

    
    public function store(Request $request)
    {
         // For Validation
         $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        // For Storing after Validation
        Product::create($request->all());

        session()->flash('status', 'Added Announcement Successfully!');

        // Redirect to the List of Users
        return redirect('/home');
    }

    
    public function show($id)
    {
        $product = Product::find($id);

        return view('homes.homeform', [
                'header'    => 'Update User',
                'home'      => $home
            ]); 
    }

    
    public function update(Request $request, $id)
    {
         // For Validation
         $request->validate($request->all);

        $product = Product::find($id);

        $product->update($request->all());

        session()->flash('status', 'Updated User Successfully!');

        return redirect('/home');
    }

   
    public function destroy($id)
    {
        $product = Product::find($id);
        
        return view('homes.homeform', [
            'header'    => 'Delete Announcement',
            'home'      => $product
        ]);
    }

    public function delete(Request $request, $id)

    {
       
        $product = Product::find($id);

        $product->delete($request->all());

        session()->flash('status', 'Deleted Announcement Successfully!');

        return redirect('/home'); 


    }
}
