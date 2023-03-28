@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 mt-3">
                        <h1 class="m-0">Edit Tag</h1>

                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid mt-2">


                <div class="row">


                    <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST" class="w-25 mt-3">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Enter title"
                            value="{{ $tag->title }}">
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Edit tag">

                    </form>
                    <div class="col-1">
                        <a href="{{ route('admin.tag.index') }}" class="btn btn-block btn-primary mt-3">Back</a>
                    </div>

                </div>

            </div>

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
