@extends('layout')

@section('title', 'Name List')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Names List</h1>
            <p><a href="names/create">Add New Name</a></p>
        </div>
    </div>

    <div class="row">
        @include('nameList')
        @include('winnerButton')

        <div class="col-4 rounded" id ="winners">
            <h3>Winner List</h3>            
        </div>
    </div>
@endsection