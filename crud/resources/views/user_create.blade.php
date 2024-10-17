@extends('master')

@section('content')

<h2>Create</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<!-- 
@if  ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif -->

<form action="{{route('users.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Your name">
    <input type="text" name="email" placeholder="Your email">
    <input type="text" name="password" placeholder="Your password">
    <button type="submit">Create</button>
</form>
@endsection            