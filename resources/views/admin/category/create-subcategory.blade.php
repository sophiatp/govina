@extends('admin.master')
@section('contentHeader')
    <section class="content-header">
        <h1>
            Quản lý danh mục
            <small>Thêm danh mục con</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Quản lý danh mục</a></li>
            <li class="active">Thêm danh mục con</li>
        </ol>
    </section>
@stop
@section('content')
    <div class="row">
        <div class="col-md-offset-2 col-md-8" style="text-align: center;">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm danh mục con</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        {!! Form::label('name', 'Tên sản phẩm: ', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-8">
                            {!! Form::text('name', null, ['class' => 'form-control','required ' => 'required']) !!}
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 50px";>
                        {!! Form::label('category_id', 'Danh mục cha: ', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-8">
                            {!! Form::text('category_id', null, ['class' => 'form-control','required ' => 'required']) !!}
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <button class="btn btn-warning">Cancel</button>
                    <button class="btn btn-primary">Save</button>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop
