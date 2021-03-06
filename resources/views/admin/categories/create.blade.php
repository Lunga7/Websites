@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Add Categories</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li> 
            <li class="breadcrumb-item active">Add Categories</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form method="post" action="{{ route('admin.categories.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Title</label>
                        <div class="col-md-6"><input type="text" name="title" class="form-control"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Save">
                <i class="fas fa-arrow-circle-left"></i>
                <a href="{{ url()->previous() }}" > Previous</a>
            </div>
        </form>
    </div>
</section>


@endsection