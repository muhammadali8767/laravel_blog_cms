@extends('layouts.admin_layout')

@section('title', 'Добавить медиа')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить медиа</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Медиа</a></li>
                        <li class="breadcrumb-item active">Добавить медиа</li>
                    </ol>
                </div>

            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('media.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Kategoriya nomini kiriting" required>
                                </div>
                                <div class="form-group">
                                    <label>Тип</label>
                                    <select name="type" class="form-control">
                                        <option value="photo">Фото</option>
                                        <option value="video">Видео</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Медиа</label>
                                    <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="media"
                                        class="form-control @error('password') is-invalid @enderror" id="feature_image"
                                        name="feature_image" value="" readonly>
                                    <div class="invalid-feedback">
                                        Please fill a valid data.
                                    </div>
                                    @error('media')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
