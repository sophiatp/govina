@extends('admin.master')
@section('contentHeader')
    <section class="content-header">
        <h1>
            Quản lý sản phẩm
            <small>Thêm sản phẩm</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('products.index') }}">Quản lý sản phẩm</a></li>
            <li class="active">Thêm sản phẩm</li>
        </ol>
    </section>
@stop
@section('content')
    <div class="row">
        <div class="col-md-offset-2 col-md-8" style="text-align: center;">
            <div class="box">
                {!! Form::open(['route' => 'products.store', 'method' => 'POST', 'files' => true]) !!}
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm sản phẩm</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        {!! Form::label('sub_id', 'Thuộc danh mục: ', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-8">
                            {!! Form::select('sub_id', $subCategories, ['style' => 'float:left; width: 50%']) !!}
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 50px">
                        {!! Form::label('name', 'Tên sản phẩm: ', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-8">
                            {!! Form::text('name', null, ['class' => 'form-control','required ' => 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 100px";>
                        {!! Form::label('code', 'Mã sản phẩm: ', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-8">
                            {!! Form::text('code', null, ['class' => 'form-control','required ' => 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 150px";>
                        {!! Form::label('price', 'Giá sản phẩm: ', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-8">
                            {!! Form::text('price', null, ['class' => 'form-control','required ' => 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 200px;">
                        {!! Form::label('image', 'Upload ảnh:', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-8">
                            {{--{!! Form::file('image', ['required ' => 'required']) !!}--}}
                            {!! Form::file('image') !!}
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 250px;">
                        {!! Form::label('sub_title', 'Đặc điểm nổi bật:', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-8">
                            {!! Form::textarea('sub_title', null, ['style' => 'float: left; width: 100%', 'required ' => 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 500px;">
                        {!! Form::label('description', 'Mô tả:', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-8">
                            {!! Form::textarea('description', null, ['style' => 'float: left; width: 100%', 'required ' => 'required']) !!}
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ Form::button('<i class="fa fa-refresh"></i> ' . 'Clear', ['type' => 'reset', 'class' => 'btn btn-warning']) }}
                    {{ Form::button('<i class="fa fa-plus-circle"></i> ' . 'Save', ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop
