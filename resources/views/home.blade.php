@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="container">                    
                        <div class="row ">
                            <h1>
                                Medicaments Products 
                            </h1>
                            <div class="float-right">
                                <form class="form-inline float-right">
                                    <input class="form-control pull-right" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>                
                    <div class="card-body" > 
                    <div class="row justify-content-center">                  
                    @if(count($categories) > 0)
                    @foreach($categories as $categorie)
                        <div class="well">  
                        <a href="categories/{{$categorie->id}}">                          
                            <form method="POST" action="">
                                @csrf
                                <!-- {{ csrf_field() }} -->                                   
                                <div class="col-sm">
                                <!--h3></h3>--->
                                <div class="card float-left" style="width: 14rem;  height: 10rem; margin-bottom: 2rem" >
                                        <div class="card-body" >                                            
                                            <h4 class="card-title">{{$categorie->nameOfCategory	}}</h4>
                                                <div class="form-group row">                                            
                                                    <input type="hidden" value="{{ $categorie->id }}" id="categorieId" class="form-control"
                                                        name="categorieId">
                                                    <!--<button type="submit" class="btn btn-primary btn-block">SELECT</button>-->
                                                </div>                                                
                                        </div>
                                    </div>
                                
                                </div>                                                                   
                            </form>  
                            </a>                          
                        </div>                        
                    @endforeach
                    <br>
                    @else
                    <h1>categories</h1>    
                        <h4>No Cateregories available at the moment</h4>
                    @endif                                        
                </div>               
            </div>
        </div>
    </div>
</div>
@endsection
