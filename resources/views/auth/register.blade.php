@extends('dashboard')
@section('menuContent')
    <div class="row">


        <div class="col-4 bg-white mx-2 p-3 rounded">
            <h4 class="text-center font-semibold">Make A New Admin</h4>
            <form method="POST" action="{{ route('registerAdmin') }}">
                @csrf
                <!-- Name -->
                <div>
                    <label class="block font-medium text-sm text-gray-700" for="name">
                        First Name
                    </label>
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="name" type="text" name="fName" required="required" autofocus="autofocus">
                </div>
{{--                last name--}}
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="email">
                        Last Name
                    </label>
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="name" type="text" name="lName" required="required">
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="email">
                        Email
                    </label>
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="email" type="email" name="email" required="required">
                </div>
                <!-- Password -->
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="password">
                        Password
                    </label>

                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="new-password" aria-autocomplete="list">
                </div>
                <!-- Confirm Password -->

                <div class="flex items-center justify-end mt-4">

                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4">
                        Register
                    </button>
                </div>
            </form>
        </div>


        <div class="col-7 bg-white mx-2 p-3 rounded">
            <h4 class="text-center font-semibold">Admin List</h4>

            @if(session('name'))
                <div class="text-success text-center">
                    {{session('name')}} added as a new admin now !
                </div>
            @endif

            <table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $item)
                    <tr v-for="user in users">
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td class="w-100">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-danger border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>

@endsection
