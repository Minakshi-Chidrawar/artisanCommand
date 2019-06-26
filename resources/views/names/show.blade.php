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

        <div class="col-3 text-center" style="margin-top:10%;">
            <button type="submit" class="btn btn-primary"  onclick="window.location='{{ route("names.show") }}'">Select 5 Winners</button>
        </div>

        <div class="col-4 rounded" id ="winners">
            <h3>Winner List</h3>
            <ul class="list-unstyled pl-3">
                @foreach($randomNames as $randomName)
                    <div class="row">
                        <li>{{ $randomName }}</li>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
@endsection