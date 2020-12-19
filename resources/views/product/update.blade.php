@extends('layout.master')

@section('title', 'edit product')
    
@section('head')
    <style>
        ul li{
            list-style: none;
        }

        p{
            color: red;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header"><h3>Update Product : {{$product->name}} </h3></div>
                    <div class="card-body">
                        <form action="/product/{{$product->id}}/update" class="form-group" method="POST" autocomplete="off">
                            @method('patch')
                            @csrf
                            <input type="hidden" name="" id="" value="{{$product->id}}">
                            <ul>
                                <li class="py-2">
                                    <label for="name">Nama:</label>
                                    <input type="text" class="form-control" value="{{ old('name') ?? $product->name}}" name="name" id="name" >
                                    {{-- dibawah merupakan validasi pada pengisian product, terdapat pada method store di productcontroller --}}
                                    @error('name')
                                        <div class="text-danger mt-2">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </li>
                                <li class="py-2">
                                    <label for="desc">Description:</label>
                                    <textarea  name="desc" id="desc" cols="30" rows="10" class="form-control ">{{ old('desc') ?? $product->desc}}</textarea>
                                    @error('desc')
                                        <div class="text-danger mt-2">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </li>
                                
                                <li class="py-2">
                                    <button type="submit" onclick="mySubmit()" class="btn btn-primary">Update</button>
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