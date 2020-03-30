@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Arts</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li> 
            <li class="breadcrumb-item active">Arts</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <p>
            <a href="{{ route('admin.arts.create') }}" class="btn btn-primary">Add New Art</a>
        </p>
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            @if(count($arts))
            @foreach($arts as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->title }}</td>
                    <td><a href="{{ route('admin.arts.edit', $c->id) }}" class="btn btn-info">Edit</a> 
                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                    <form action="{{ route('admin.arts.destroy',$c->id) }}" method="post">
                        @method('DELETE')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                    </td>
                </tr>
            @endforeach
            @else
            <tr><td colspan="3">No Arts Found</td></tr>
            @endif
        </table>

    </div>
</section>


@endsection