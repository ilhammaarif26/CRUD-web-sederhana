@extends('layout.master')

@section('title', 'product')
    
@section('head')
    
@endsection

@section('content')
    <!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>

    <!-- Boxed -->
    <div class="page-title parallax parallax1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">Shop</h1>
                    </div><!-- /.page-title-heading -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop-3col.html">Shop</a></li>
                            <li><a href="shop-3col.html">Fullwidth Shop</a></li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <section class="flat-row main-shop">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-shop clearfix">
                        <p class="showing-product">
                            Showing {{$products->count()}} | <a href="product/create" class="btn btn-danger">add product</a>
                        </p>
                        <ul class="flat-filter-search">
                            <li>
                                <a href="#" class="show-filter">Filters</a>
                            </li>
                            <li class="search-product"><a href="#">Search</a></li>
                        </ul>
                    </div><!-- /.filte-shop -->
                    <div class="box-filter slidebar-shop">
                        <div class="btn-close"><a href="#"><i class="fa fa-times"></i></a></div>
                        <div class="widget widget-sort-by">
                            <h5 class="widget-title">
                                Sort By
                            </h5>
                            <ul>
                                <li><a href="#" class="active">Default</a></li>
                                <li><a href="#">Popularity</a></li>
                                <li><a href="#">Average rating</a></li>
                                <li><a href="#">Newness</a></li>
                                <li><a href="#">Price: low to high</a></li>
                                <li><a href="#">Price: high to low</a></li>
                            </ul>
                        </div><!-- /.widget-sort-by -->
                        <div class="widget widget-price">
                            <h5 class="widget-title">Price</h5>
                            <ul>
                                <li><a href="#" class="active">$0.00 - $50.00</a></li>
                                <li><a href="#">$50.00 - $100.00</a></li>
                                <li><a href="#">$100.00 - $150.00</a></li>
                                <li><a href="#">$150.00 - $200.00</a></li>
                                <li><a href="#">$200.00 - 250.00</a></li>
                                <li><a href="#">250.00+</a></li>
                            </ul>
                        </div><!-- /.widget -->
                        <div class="widget widget-color">
                            <h5 class="widget-title">
                               Colors
                            </h5>
                            <ul class="flat-color-list icon-left">
                                <li><a href="#" class="yellow"></a><span>Yellow</span></li>
                                <li><a href="#" class="pink"> </a><span>White</span></li>
                                <li><a href="#" class="red active"></a><span>Red</span> </li>
                                <li><a href="#" class="black"></a><span>Black</span></li>
                                <li><a href="#" class="blue"></a><span>Green</span></li>
                                <li><a href="#" class="khaki"></a><span>Orange</span></li>
                            </ul>
                        </div><!-- /.widget-color -->
                        <div class="widget widget-size">
                            <h5 class="widget-title">Size</h5>
                            <ul>
                                <li><a href="#">L</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">XL</a></li>
                                <li><a href="#">XXL</a></li>
                                <li><a href="#">Over Size</a></li>
                            </ul>
                        </div><!-- /.widget -->
                        <div class="widget widget_tag">
                            <h5 class="widget-title">
                                Tags
                            </h5>
                            <div class="tag-list">
                                <a href="#">All products</a>
                                <a href="#" class="active">Bags</a>
                                <a href="#">Chair</a>
                                <a href="#">Decoration</a>
                                <a href="#">Fashion</a> 
                                <a href="#">Tie</a>
                                <a href="#">Furniture</a>
                                <a href="#">Accesories</a> 
                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.box-filter -->
                    <div class="shop-search clearfix">            
                        <form role="search" method="get" class="search-form" action="#">
                            <label>                                    
                                <input type="search" class="search-field" placeholder="Searching …" value="" name="s">
                            </label>
                        </form>       
                    </div><!-- /.top-serach -->
                   
                    <div class="product-content product-threecolumn clearfix">
                        <ul class="product">
                            @foreach ($products as $p)
                            <li class="product-item">
                                <div class="product-thumb clearfix">
                                    <a href="#">
                                        <img src="images/shop/sh-3/1.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="product-info clearfix">
                                <span class="product-title">{{$p->name}}</span>
                                    <div class="price">
                                        <ins>
                                            <span class="amount">{{$p->price}}</span>
                                        </ins>
                                    </div>
                                    <div>
                                        <ins>
                                            <span><p>{{$p->desc}}</p></span>
                                        </ins>
                                    </div>
                                    <div>
                                        <ins>
                                            <span class="amount">{{$p->created_at->diffForHumans()}}</span>
                                        </ins>
                                    </div>
                                    
                                    <ul class="flat-color-list">
                                        <li>
                                            <a href="#" class="red"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="blue"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="black"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="add-to-cart justify-content-between">
                                    <a href="product/{{$p->id}}/update" >Update</a> || 
                                    <a href="product/{{$p->id}}/delete" onclick="myDelete()">Delete</a>
                                </div>
                                
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                            @endforeach
                            
                            
                        </ul><!-- /.product -->
                    </div><!-- /.product-content -->
                    <div class="product-pagination text-center margin-top-11 clearfix">
                        <ul class="flat-pagination">
                            <li class="prev">
                                <a href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#" title="">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul><!-- /.flat-pagination -->
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->

    <section class="flat-row mail-chimp">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text">
                        <h3>Sign up for Send Newsletter</h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="subscribe clearfix">
                        <form action="#" method="post" accept-charset="utf-8" id="subscribe-form">
                            <div class="subscribe-content">
                                <div class="input">
                                    <input type="email" name="subscribe-email" placeholder="Your Email">
                                </div>
                                <div class="button">
                                    <button type="button">SUBCRIBE</button>
                                </div>
                            </div>
                        </form>
                        <ul class="flat-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul><!-- /.flat-social -->
                    </div><!-- /.subscribe -->
                </div>
            </div>
        </div>
    </section><!-- /.mail-chimp -->
@endsection

@section('javascript')
    <script >
        function myDelete()
        {
            alert('<h3> are you sure want to delete this product</h3>');
        }
    </script>
@endsection