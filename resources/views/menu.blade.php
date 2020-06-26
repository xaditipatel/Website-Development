@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<main id="main_content">
            <div class="zig-zag-top">

            <div id="content2" class="main_content_header" style="background-image: none">
				<p>Welcome User</p>
				<a></a>&nbsp;&nbsp;&nbsp;&nbsp;<a></a>
                <h2>Elija su Hamburguesa</h2>
					<div id="main_content_2" class="grid-container">
				
					<div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Burgers In Our Store</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto; width:200px;">
                                <img src="{{ $pro->image }}"
                                     class="card-img-top mx-auto"
                                     style="height: 100px; width: 100px;display: block;"
                                     alt="{{ $pro->image }}"
                                >
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">{{ $pro->item_name }}</h6></a>
                                    <p style="color:black;">${{ $pro->price }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->item_no }}" id="item_no" name="item_no">
                                        <input type="hidden" value="{{ $pro->item_name }}" id="item_name" name="item_name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image }}" id="image" name="image">
                                        <input type="hidden" value="{{ $pro->item_no }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                                <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
            </div>
</div>
</div>
        </main>
@endsection
