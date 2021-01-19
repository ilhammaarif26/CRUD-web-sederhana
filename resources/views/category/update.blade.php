@extends('layout.master')

@section('title', 'update category')
    
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
                    
                    <div class="card-header text-center"><h3>Update Category</h3></div>
                    <div class="card-body">
                        <form action="/category/{{$category->id}}/update" class="form-group" method="POST">
                            @csrf
                            @method('patch')
                            <input type="hidden" name="id" id="id" value="{{$category->id}}">
                            <ul>
                                <li class="py-2">
                                    <label for="name">Nama:</label>
                                    <input type="text" class="form-control"  name="name" id="name" value="{{$category->name}}" >
                                    {{-- dibawah merupakan validasi pada pengisian product, terdapat pada method store di productcontroller --}}
                                    @error('name')
                                        <div class="text-danger mt-2">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </li>
                                <li class="py-2">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control"  name="slug" id="slug" value="{{$category->slug}}" >
                                    {{-- dibawah merupakan validasi pada pengisian product, terdapat pada method store di productcontroller --}}
                                    @error('slug')
                                        <div class="text-danger mt-2">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </li>
                                <li class="py-2">
                                    <button type="submit"  class="btn btn-primary">Update</button>
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