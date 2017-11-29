@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">

        <div class="col-md-6">

            <h2 class="text-md-center mb-5 mt-5">Create New Profile</h2>

            <form method="post" action="/profile" enctype="multipart/form-data">

                {{ csrf_field() }}
            
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ old('name')}}">
                </div>
            
                <div class="form-group">
                    <label class="custom-file form-control">
                        <input type="file" name="avatar" class="custom-file-input" value="{{ old('avatar') }}">

                        <span class="custom-file-control"></span>
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control">Create</button>
                </div>

                <div class="form-group">
                    <a href="/profiles" class="btn btn-success">View Profiles</a>
                </div>
            
            </form>
        
            @include('layouts.errors')

        </div>
        
    </div>

</div>

@endsection