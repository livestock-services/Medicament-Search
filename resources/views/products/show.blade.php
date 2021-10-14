@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Product</h1></div>
                
                <div class="card-body">

                <table  class="table table-hover">
                    <tbody>
                    @if(count($products) > 0)
                    @foreach($products as $product)
                        <div class="well">
                            <tr>
                                <form method="GET" action="{{ route('showUserproductInZone.show') }}">
                                    @csrf
                                    <!-- {{ csrf_field() }} -->
                                    <div class="form-group row">                                            
                                        <input type="hidden" value={{ $product->id }} id="productId" class="form-control"
                                            name="productId">
                                        <button type="submit" class="btn btn-primary btn-block">SELECT</button>
                                    </div>
                                </form>
                            </tr>
                        </div>
                    @endforeach
                    {{$products->links()}}

                    @else
                    <h1>Products</h1>    
                        <h4>No Product</h4>
                    @endif
                    </tbody>
                </table>                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
