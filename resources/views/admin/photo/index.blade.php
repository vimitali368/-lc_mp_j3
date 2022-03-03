@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Фото</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Админка</a></li>
                            <li class="breadcrumb-item active">Фото / Список</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-2 mb-3">
                    <a href="{{ route('admin.photo.create') }}" type="button"
                       class="btn btn-block btn-primary">Добавить</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Путь к фото</th>
                                    <th>Url фото</th>
                                    <th>Размер фото</th>
                                    <th>Описание фото</th>
                                    <th>ID темы</th>
                                    <th colspan="3" class="text-center">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($photos as $photo)
                                    <tr>
                                        <td>{{ $photo->id }}</td>
                                        <td>{{ $photo->path }}</td>
                                        <td>{{ $photo->url }}</td>
                                        <td>{{ $photo->size }}</td>
                                        <td>{{ $photo->description }}</td>
                                        <td>{{ $photo->theme_id }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.photo.show', $photo->id) }}"><i
                                                    class="far fa-eye"></i></a></td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.photo.edit', $photo->id) }}"
                                               class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                                        <td>
                                            <form action="{{ route('admin.photo.delete', $photo->id) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fas fa-trash text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
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
