@extends('layout')

@section('title', 'Name List')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Names List</h1>
            <p><a href="names/create">Add New Name</a></p>
        </div>
    </div>

    <!-- @foreach($names as $name)
        <div class="row">
            <div class="col-2">
                {{ $name }}
            </div>
        </div>
    @endforeach -->

    <!-- <div class="card-deck">
        <div class="card">
            <div class="card-body">
                @foreach($names as $name)
                    <div class="row">
                        <div class="">
                            {{ $name }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Select 5 Winners</button>

        <div class="card">
            <div class="card-body">
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-4 rounded">
            <ul class="list-unstyled pl-3">
                @foreach($names as $name)
                    <div class="row">
                        <li>{{ $name }}</li>
                    </div>
                @endforeach
            </ul>
        </div>

        <div class="col-4 text-center" style="margin-top:10%;">
            <button type="submit" class="btn btn-primary">Select 5 Winners</button>
        </div>

        <div class="col-4 rounded" id ="winners">
            <p>Test</p>
        </div>
    </div>
@endsection