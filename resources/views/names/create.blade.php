@extends('layout')

@section('title', 'Add New Name')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Name</h1>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-12">
            <form action="/names" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    <div>{{ $errors->first('name') }}</div>
                </div>

                <button type="submit" class="btn btn-primary">Add Customer</button>
            </form>
        </div>
    </div> -->

    <div class="row">
        <div class="col-6 mb-5">
            <form action="/names" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    <div>{{ $errors->first('name') }}</div>
                </div>

                <button type="submit" class="btn btn-primary">Add Customer</button>
                @csrf
            </form>
        </div>
    </div>
@endsection