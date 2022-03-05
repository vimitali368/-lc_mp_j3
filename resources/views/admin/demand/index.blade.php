@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Заявки</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Админка</a></li>
                            <li class="breadcrumb-item active">Заявки / Список</li>
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
                    <a href="{{ route('admin.demand.create') }}" type="button"
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
                                    <th>ФИО</th>
                                    <th>Номер телефона</th>
                                    <th>Локация</th>
                                    <th>Почта</th>
                                    <th>Удобное время</th>
                                    <th>Статус</th>
                                    <th colspan="3" class="text-center">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($demands as $demand)
                                    <tr>
                                        <td>{{ $demand->id }}</td>
                                        <td>{{ $demand->fio }}</td>
                                        <td>{{ $demand->phone_number }}</td>
                                        <td>{{ $demand->location }}</td>
                                        <td>{{ $demand->email }}</td>
                                        <td>{{ $demand->suitable_time }}</td>
                                        <td>{{ $demand->status }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.demand.show', $demand->id) }}"><i
                                                    class="far fa-eye"></i></a></td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.demand.edit', $demand->id) }}"
                                               class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                                        <td>
                                            <form action="{{ route('admin.demand.delete', $demand->id) }}"
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
