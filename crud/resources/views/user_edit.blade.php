@extends('master')

@section('content')

<h2>Edit</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif
<div class="flex justify-center items-center h-screen">
    <div class="container bg-gray-100 rounded-xl w-8/12 h-4/6 flex justify-center items-center">
        <form class="flex flex-col justify-center items-center space-y-8 w-full" action="{{route('users.update', ['user' => $user->id])}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <label for="name">Name</label>
            <input class="border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 w-5/12" type="text" name="name" value="{{ $user->name }}">
            <label for="email">Email</label>
            <input class="border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 w-5/12" type="text" name="email" value="{{ $user->email }}">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-5/12" type="submit">Update</button>
        </form>
    </div>
</div>
@endsection
