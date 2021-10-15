@extends('layouts.app')


@section('content')    
<div class="container-fluid">  
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(count($pruductsInCategorie) > 0)
                <div class="card">
                    <div class="card-header">
                        <h1>{{$pruductsInCategorie->nameOfCategory}}</h1>
                    </div>
                    <div class="card-body"> 
                        @foreach($pruductsInCategorie as $pruductsInCategory)
                        <div class="well">
                            <h3><a href ="products/{{$pruductsInCategory->id}}">{{$pruductsInCategory->name}}</h3>                    
                        </div>
                    </div>
                </div>
            @endforeach
                
            @else
            <div class="card">
                <div class="card-header">
                    <h1>No Products available in this Category</h1>
                </div>        
            </div>
                
            @endif
        </div>
    </div>
</div>
@endsection