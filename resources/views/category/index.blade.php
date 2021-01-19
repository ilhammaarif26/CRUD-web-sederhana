@extends('layout.master')

@section('title', 'category')

@section('head')
    
@endsection
    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table">
                    <thead class="table-dark">
                      <tr class="text-center">
                          <th>No</th>
                          <th>name</th>
                          <th>Description</th>
                          <th>Publihsed</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <?php $i=1; ?>
                    <tbody>
                      @foreach ($category as $c)
                      <tr class="text-center">
                        <td>{{$i++}}</td>
                        <td>{{$c->name}}</td>
                        <td>{{$c->slug}}</td>
                        <td>{{$c->created_at->format('d F, Y')}}</td>    
                        <td><a href="\category/{{$c->id}}/update" class="btn btn-sm btn-primary">update</a> | 
                            <a href="\category/{{$c->id}}/delete" class="btn btn-sm btn-danger">delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="row">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                      <div class="text-right">
                        <a href="\category/create" class="btn btn-info text-right">add category</a>
                      </div>    
                    </div>
                  </div>
                  
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    
@endsection