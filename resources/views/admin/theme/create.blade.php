@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление темы</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Админка</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.theme.index') }}">Темы</a></li>
                            <li class="breadcrumb-item active">Добавление</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row ml-3">
                <form action="{{ route('admin.theme.store') }}" method="POST" class="w-25">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Заголовок">
                        @error('title')
                        <div class="text-danger">
                            Это поле необходимо для заполнения
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="description" placeholder="Описание">
                    </div>
                    <div class="form-group">
                        <label>Выбирите клиента</label>
                        <select name="client_id" class="form-control">
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}"
                                    {{ $client->id == old('client_id') ? ' selected' : '' }}
                                >{{ $client->fio }}</option>
                            @endforeach
                        </select>
                        @error('client_id')
                        <div class="text-danger">
                            Это поле необходимо для заполнения
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
