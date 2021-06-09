@extends('layout')
@section('content')



    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        @foreach($products as $key => $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{$product->image}}" alt="image.png" />
                                        <h2>{{$product->price}}</h2>
                                        <p>{{$product->name}}</p>
                                        <a href="#" class="btn btn-default">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>

@endsection
