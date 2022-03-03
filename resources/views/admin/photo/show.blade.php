@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{ $photo->path }}</h1>
                        <a href="{{ route('admin.photo.edit', $photo->id) }}" class="text-success">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('admin.photo.delete', $photo->id) }}"
                              method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-trash text-danger" role="button"></i>
                            </button>
                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Админка</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.photo.index') }}">Фото</a></li>
                            <li class="breadcrumb-item active">Карточка</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $photo->id }}</td>
                                </tr>
                                <tr>
                                    <td>Путь к фото</td>
                                    <td>{{ $photo->path }}</td>
                                </tr>
                                <tr>
                                    <td>Url фото</td>
                                    <td>{{ $photo->url }}</td>
                                </tr>
                                <tr>
                                    <td>Размер фото</td>
                                    <td>{{ $photo->size }}</td>
                                </tr>
                                <tr>
                                    <td>Описание фото</td>
                                    <td>{{ $photo->description }}</td>
                                </tr>
                                <tr>
                                    <td>ID темы</td>
                                    <td>{{ $photo->theme_id }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
