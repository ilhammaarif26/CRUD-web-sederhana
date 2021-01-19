@extends('layout.master')

@section('title', 'add category')
    
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
                    
                    <div class="card-header text-center"><h3>Add Category</h3></div>
                    <div class="card-body">
                        <form action="/category/create" class="form-group" method="POST">
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
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control"  name="slug" id="slug" >
                                    {{-- dibawah merupakan validasi pada pengisian product, terdapat pada method store di productcontroller --}}
                                    @error('slug')
                                        <div class="text-danger mt-2">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </li>
                                <li class="py-2">
                                    <button type="submit"  class="btn btn-primary">Create</button>
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