@extends('layouts.admin_layout')

@section('title', 'Редактировать страницу')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать страницу: {{ $page['title'] }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Cтраницы</a></li>
                        <li class="breadcrumb-item active">Редактировать страницу</li>
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
                    <div class="card card-primary card-outline card-outline-tabs">
                        <!-- form start -->
                        <form action="{{ route('pages.update', $page['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">O'zbekcha</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Русский</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">English</a>
                                </li>
                            </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Sarlavha o'zbekcha</label>
                                            <input type="text" name="title_uz" value="{{ $page['title_uz'] }}" class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите название статьи" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Matn o'zbekcha</label>
                                            <textarea name="text_uz" class="editor">{{ $page['text_uz'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Заголовок русский</label>
                                            <input type="text" name="title_ru" value="{{ $page['title_ru'] }}" class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите название статьи" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Текст русский</label>
                                            <textarea name="text_ru" class="editor">{{ $page['text_ru'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title english</label>
                                            <input type="text" name="title_en" value="{{ $page['title_en'] }}" class="form-control" id="exampleInputEmail1"
                                                placeholder="Введите название статьи" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Content english</label>
                                            <textarea name="text_en" class="editor">{{ $page['text_en'] }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">обновить</button>
                            </div>
                            </form>
                    <!-- /.card -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
