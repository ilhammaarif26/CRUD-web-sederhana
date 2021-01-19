@extends('layout.master')

@section('title', 'add product')
    
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
                    
                    <div class="card-header"><h3>New Product</h3></div>
                    <div class="card-body">
                        <form action="/product/store" class="form-group">
                            @csrf
                            <ul>
                                <li class="py-2">
                                    <label for="name">Nama:</label>
                                    <input type="text" class="form-control"  name="name" id="name" >
                                    {{-- dibawah merupakan validasi pada pengisian product, terdapat pada method store di productcontroller --}}
                                    @error('name')
                                        <div class="text-danger mt-2">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </li>
                                <li class="py-2">
                                    <label for="price">Price:</label>
                                    <input type="number" class="form-control"  name="price" id="price" >
                                    {{-- dibawah merupakan validasi pada pengisian product, terdapat pada method store di productcontroller --}}
                                    @error('price')
                                        <div class="text-danger mt-2">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </li>
                                <li class="py-2">
                                    <label for="category_id">Category:</label>
                                    <select name="category_id" id="category_id">
                                        <option value="">Pilih category </option>
                                        @foreach ($category as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                    {{-- dibawah merupakan validasi pada pengisian product, terdapat pada method store di productcontroller --}}
                                    @error('category_id')
                                        <div class="text-danger mt-2">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </li>
                                <li class="py-2">
                                    <label for="desc">Description:</label>
                                    <textarea  name="desc" id="desc" cols="30" rows="10" class="form-control "></textarea>
                                    @error('desc')
                                        <div class="text-danger mt-2">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </li>
                                
                                <li class="py-2">
                                    <button type="submit" onclick="mySubmit()" class="btn btn-primary">Create</button>
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