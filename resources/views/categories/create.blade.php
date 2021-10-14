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

                        <form method="POST" action="{{route('product.store')}}">
                            @csrf
                            <!-- {{ csrf_field() }} -->
                            <div class="form-outline mb-4">
                                <h5><label for="name" class="form-label">Name</label></h5>
                                <input type=" text" id="name" class="form-control" name="name">
                                
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

