@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Arts</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li> 
            <li class="breadcrumb-item active">Edit Arts</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form method="post" action="{{ route('admin.arts.update', $arts->id) }}" enctype="multipart/form-data">
            @method('PUT')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Title</label>
                        <div class="col-md-6"><input type="text" name="title" class="form-control" value="{{ $arts->title }}"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Category</label>
                        <div class="col-md-6">
                        <select name="category_id" class="form-control">
                                <option value="">Choose Category</option>
                                @foreach($categories as $c)
                                    <option value="{{ $c->id }}"
                                    
                                    @if($c->id == $arts->category_id)
                                        selected
                                    @endif
                                    
                                    >{{ $c->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Image</label>
                        <div class="col-md-9"><input type="file" name="image"></div>
                        <div class="clearfix"></div>
                        @if($arts->image)
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <img src="{{ asset('public/storage/arts/'.$arts->image) }}" style="width:150px;">
                        </div>
                        <div class="clearfix"></div>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Description</label>
                        <div class="col-md-6">
                            <textarea name="description" class="form-control" value="{{ $arts->description }}"></textarea>
                        </div>
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