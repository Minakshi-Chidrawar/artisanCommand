@extends('layout')

@section('title', 'Name List')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Names List</h1>
            <p><a href="names/create">Add New Name</a></p>
        </div>
    </div>

    @foreach($names as $name)
        <div class="row">
            <div class="col-2">
                {{ $name }}
            </div>
        </div>
    @endforeach
@endsection