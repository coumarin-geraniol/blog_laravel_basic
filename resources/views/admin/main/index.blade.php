@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Home Page</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-gradient-info">
                            <div class="inner">
                                <h3>{{ $data['usersCount'] }}</h3>
                                <p>Users</p>
                            </div>
                            <div class="icon">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <a href="{{ route('admin.user.index') }}" class="small-box-footer">More Info  <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-gradient-success">
                            <div class="inner">
                                <h3>{{ $data['postsCount'] }}</h3>
                                <p>Posts</p>
                            </div>
                            <div class="icon">
                                <i class="fa-regular fa-share-from-square"></i>
                            </div>
                            <a href="{{ route('admin.post.index') }}" class="small-box-footer">More Info  <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-gradient-danger">
                            <div class="inner">
                                <h3>{{ $data['categoriesCount'] }}</h3>
                                <p>Categories</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-bars-staggered"></i>
                            </div>
                            <a href="{{ route('admin.category.index') }}" class="small-box-footer">More Info  <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-gradient-orange text-white">
                            <div class="inner">
                                <h3>{{ $data['tagsCount'] }}</h3>
                                <p>Tags</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-hashtag"></i>
                            </div>
                            <a href="{{ route('admin.tag.index') }}" class="small-box-footer">More Info  <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
