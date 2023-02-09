<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Validation\Rules;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('homes.home', [
            'header'    => 'Announcement',
            'home'     => Announcement::all()
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
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255', 'unique:'.Announcement::class],
        ]);

        // For Storing after Validation
        Announcement::create([
            'name'  =>  $request->name,
            'description'  =>  $request->description,
        ]);

        session()->flash('status', 'Added Announcement Successfully!');

        // Redirect to the List of Users
        return redirect('/home');
    }

    
    public function show($id)
    {
        $announcement = Announcement::find($id);

        return view('homes.homeform', [
                'header'    => 'Update Announcement',
                'announcement'      => $announcement
            ]); 
    }

    
    public function update(Request $request, $id)
    {
        // For Validation
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);

        $announcement = Announcement::find($id);

        $announcement->update($request->all());

        session()->flash('status', 'Updated Announcement Successfully!');

        return redirect('/home');
    }

   
    public function destroy($id)
    {
        $announcement = Announcement::find($id);
        
        return view('homes.homeform', [
            'header'    => 'Delete Announcement',
            'home'      => $announcement
        ]);
    }

    public function delete(Request $request, $id)

    {
       
        $announcement = Announcement::find($id);

        $announcement->delete($request->all());

        session()->flash('status', 'Deleted Announcement Successfully!');

        return redirect('/home'); 


    }
}
