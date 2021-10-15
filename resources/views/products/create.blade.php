@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Add a Product</h1>
                </div>
                    <div class="card-body">

                        <form method="POST" action="{{url('products/store')}}">
                            @csrf
                            <!-- {{ csrf_field() }} -->
                            <div class="form-outline mb-4">
                                <h5><label for="name" class="form-label">Name</label></h5>
                                <input type=" text" id="name" class="form-control" name="name">
                                <br>
                                <h5><label for="name" class="form-label">Description</label></h5>
                                <textarea type="text" id="description" class="form-control" rows="5" name="description"></textarea>
                                <br>
                                <select class="form-select" aria-label=".form-select-sm example">
                                    <option selected>Select Category</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <br>
                                <br>
                                <h5><label for="formFileMultiple" class="form-label">Upload Product Images</label></h5>
                                <input class="form-control" type="file" id="formFileMultiple" multiple />
                                <br>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-7">
                                    <button type="submit" class="btn btn-primary btn-block">Create</button>  
                                </div> 
                            </div>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
