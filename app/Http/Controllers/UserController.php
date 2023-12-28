<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;




class UserController extends Controller
{
    
    public function index()
    {
        return view('users.users', [
            'header'    => 'Users Management',
            'users'     => User::all()
        ]);
    }

    public function form()
    {
        return view('users.form', [
            'header'    => 'Add User',
        ]);
    }

    public function store(Request $request)
    {
        // For Validation
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        // For Storing after Validation
        User::create([
            'name'  =>  $request->name,
            'email'  =>  $request->email,
            'password'  =>  Hash::make($request->password),
        ]);

        session()->flash('status', 'Added User Successfully!');

        // Redirect to the List of Users
        return redirect('/users');
    }

   
    public function show($id)
    {
        $user = User::find($id);

        return view('users.form', [
                'header'    => 'Update User',
                'user'      => $user
            ]); 
    }

    public function update(Request $request, $id)
    {
        // For Validation
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $user = User::find($id);

        $user->update($request->all());

        session()->flash('status', 'Updated User Successfully!');

        return redirect('/users');
    }

    
    public function destroy($id)
    {
        $user = User::find($id);
        
        return view('users.form', [
            'header'    => 'Delete User',
            'user'      => $user
        ]);
        

    }

    public function delete(Request $request, $id)

    {
       
        $user = User::find($id);

        $user->delete($request->all());

        session()->flash('status', 'Deleted User Successfully!');

        return redirect('/users'); 


    }

    public function search()

    {
        $search_text = $_GET['search'];
        $users = User::where('name', 'LIKE', '%'.$search_text.'%')->get();
        $users = User::where('email', 'LIKE', '%'.$search_text.'%')->get();
        
        return view('users.search', compact('users'));
    }




}    
