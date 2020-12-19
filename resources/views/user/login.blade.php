@extends('layout.master')

@section('title', 'add product')
    
@section('head')
    <style>
        ul li{
            list-style: none;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><h3>New Product</h3></div>
                    <div class="card-body">
                        <form action="/product/store" class="form-group">
                            @csrf
                            <ul>
                                <li>
                                    <label for="name">Nama:</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </li>
                                <li>
                                    <label for="desc">Description:</label>
                                    <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
                                </li>
                                <li>
                                    <button type="submit" onclick="mySubmit()" class="btn btn-primary">Add Product</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    
@endsection