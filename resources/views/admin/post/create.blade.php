@extends('layouts.admin_layout')

@section('title', 'Добавить статью')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить сатью</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
            @if (session('errors'))
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('errors') }}</h4>
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
                        <form action="{{ route('post.store') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
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
                                            <label for="exampleInputEmail1">Sarlavha O'zbekcha</label>
                                            <input type="text" name="title_uz" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1" required>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('title_uz')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Qisqacha matn O'zbekcha</label>
                                            <textarea name="short_uz" rows="5" class="form-control @error('password') is-invalid @enderror" required></textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('short_uz')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Matn O'zbekcha</label>
                                            <textarea name="text_uz" class="editor" required></textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('text_uz')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Название Русский</label>
                                            <input type="text" name="title_ru" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1">
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('title_ru')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Кароткий текст Русский</label>
                                            <textarea name="short_ru" rows="5" class="form-control @error('password') is-invalid @enderror"></textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('short_ru')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Текст Русский</label>
                                            <textarea name="text_ru" class="editor"></textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('text_ru')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title English</label>
                                            <input type="text" name="title_en" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1">
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('title_en')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Short content English</label>
                                            <textarea name="short_en" rows="5" class="form-control @error('password') is-invalid @enderror"></textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('short_en')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Content English</label>
                                            <textarea name="text_en" class="editor"></textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('text_en')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Выберите категорию</label>
                                        <select name="category_id" class="form-control @error('password') is-invalid @enderror" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please fill a valid data.
                                        </div>
                                        @error('category_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                                </div>
                                <div class="form-group">
                                    <label for="feature_image">Изображение статьи</label>
                                    <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="img" class="form-control @error('password') is-invalid @enderror" id="feature_image"
                                        name="feature_image" value="" readonly>
                                    <div class="invalid-feedback">
                                        Please fill a valid data.
                                    </div>
                                    @error('img')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                                </div>
                            </div>
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
