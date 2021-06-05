@extends('frontend.layouts.main')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div id="my-cart">
                @include('frontend.component.cart-table')
            </div>
        </div>
    </section> <!--/#cart_items-->
@endsection
