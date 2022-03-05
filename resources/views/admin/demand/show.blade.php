@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{ $demand->fio }}</h1>
                        <a href="{{ route('admin.demand.edit', $demand->id) }}" class="text-success">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('admin.demand.delete', $demand->id) }}"
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
                            <li class="breadcrumb-item"><a href="{{ route('admin.demand.index') }}">Заявки</a></li>
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
                                    <td>{{ $demand->id }}</td>
                                </tr>
                                <tr>
                                    <td>ФИО</td>
                                    <td>{{ $demand->fio }}</td>
                                </tr>
                                <tr>
                                    <td>Номер телефона</td>
                                    <td>{{ $demand->phone_number }}</td>
                                </tr>
                                <tr>
                                    <td>Локация</td>
                                    <td>{{ $demand->location }}</td>
                                </tr>
                                <tr>
                                    <td>Почта</td>
                                    <td>{{ $demand->email }}</td>
                                </tr>
                                <tr>
                                    <td>Удобное время</td>
                                    <td>{{ $demand->suitable_time }}</td>
                                </tr>
                                <tr>
                                    <td>Статус</td>
                                    <td>{{ $demand->status }}</td>
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
