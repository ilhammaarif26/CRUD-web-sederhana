@extends('layout.master')

@section('title', 'details')

@section('head')
    
@endsection
    
@section('content')
<div class="container">
  <h3 class="h3 text-center">Details Product</h3>
  <hr>
  <div class="row">
    <div class="col-sm-12">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <input type="hidden" name="id" id="id">
          <h5 class="card-title">{{$product->name}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$product->price}}</h6>
          <p class="card-text">{{$product->desc}}</p>
          <div class="text-secondary">
            <label for="">Category : </label>
            <a href="/categories/{{$product->category->slug}}">{{$product->category->name}}</a> 
            <br>
            <label for="">Published : </label>
            {{$product->created_at->format("d  F, Y")}}
          </div>
          <a href="\allproducts" class="card-link"><i class="fas fa-backward"></i> &nbsp; Back</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')
    
@endsection