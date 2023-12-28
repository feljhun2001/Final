
@extends('users.users')

@section('footer')

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
@endsection