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
                                <h5><label for="name" class="form-label">Name Of Product</label></h5>
                                <input type=" text" id="nameOfProduct" class="form-control" name="nameOfProduct">
                                <br>
                                <h5><label for="name" class="form-label">Description</label></h5>
                                <textarea type="text" id="description" class="form-control" rows="5" name="description"></textarea>
                                <br>
                                @if(count($categories) > 0)
                                <div class="form-group">
                                <select name= "catergoryOfProduct "class="form-control" >
                                <option class="font-weight-bold" ><b>Select Category</b></option>
                                @foreach ($categories as $category)
                                    <option class="font-weight-bold" value="{{ $category->id }}"}}> 
                                        <b>{{$category->nameOfCategory}}</b>
                                    </option>
                                @endforeach  
                                </select>
                                </div>                               
                                @else
                                <a href="{{route('category.create')}}">
                                    <h4>NO CATEGORIES AVAILABLE, PLEASE REGISTER SOME CATEGORIES</h4>
                                </a>                                
                                @endif
                                <br>
                                <br>
                                <h5><label name="image" for="formFileMultiple" class="form-label">Upload Product Images</label></h5>
                                <input name="image" class="form-control" type="file" id="formFileMultiple" multiple />
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
