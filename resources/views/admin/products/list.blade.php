@extends('admin.master')
@section('contentHeader')
    <section class="content-header">
        <h1>
            Quản lý sản phẩm
            <small>Danh sách sản phẩm</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('products.index') }}">Quản lý sản phẩm</a></li>
            <li class="active">Danh sách sản phẩm</li>
        </ol>
    </section>
@stop
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách sản phẩm</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Danh mục</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Mã SP</th>
                            <th>Ảnh</th>
                            <th>Action</th>
                        </thead>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product['id']}}</td>
                            <td>{{$product->subcategory->name}}</td>
                            <td>{{$product['name']}}</td>
                            <td>{{$product['price']}}</td>
                            <td>{{$product['code']}}</td>
                            <td class="images_1_of_4">
                                <img src="{{asset('images/'. $product['image'])}}" alt="Image">
                            </td>
                            <td>
                                <button class="btn btn-warning">Sửa</button>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- pagination -->
            <div class="pagination pull-right">
                {!! $products->appends(Request::except('page'))->links() !!}
            </div>
        </div>
    </div>
@stop
