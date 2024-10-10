@extends('master')

@section('content')

<h2>Edit</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif
<form class="flex flex-col justify-center items-center min-h-screen space-y-4" action="{{route('users.update', ['user' => $user->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input  class="border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="name" value="{{ $user->name }}">
    <input  class="border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="email" value="{{ $user->email }}">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Update</button>
</form>
@endsection            