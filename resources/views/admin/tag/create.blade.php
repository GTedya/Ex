@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление тэга</h1>
                    </div><!-- /.col -->
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
                        <form action=" {{route('admin.tag.store')}}" method="POST" class="w-25">
                            @csrf
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter tag">
                            </div>
                            <input type="submit" class="btn btn-primary">
                        </form>
                        @error('title')
                        <div class="text-danger">Это поле необходимо заполнить </div>
                        @enderror
                    </div>
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection