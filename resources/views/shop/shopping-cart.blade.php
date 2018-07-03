@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
                <ul class="list-group:">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{$product['qty']}}</span>
                            <strong>{{$product['item']['title']}}</strong>
                            <span class="label label-success">{{ $product['price'] }}</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Reduce by 1</a></li>
                                    <li><a href="#">Reduce all</a></li>
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
                <strong>Total: {{$totalPrice}}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
                <button class="btn btn-success">Checkout</button>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
                <h2>No items in Cart</h2>
            </div>
        </div>
    @endif
@endsection