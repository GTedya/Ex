@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{$category->title}}</h1>
                        <a href="{{route('admin.category.edit', $category->id)}}" class="text-success"><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{route('admin.category.delete', $category->id)}}"
                              method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-trash text-danger" role="button"></i>
                            </button>
                        </form>
                    </div><!-- /.col --><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="col-12">
                            <div class="col-12">
                                <div class="card">
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>ID</td>
                                                    <td>{{$category->id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Title</td>
                                                    <td>{{$category->title}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Date</td>
                                                    <td>{{$category->created_at}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection