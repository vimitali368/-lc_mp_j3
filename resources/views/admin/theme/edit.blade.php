@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование темы</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Админка</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.theme.index') }}">Темы</a></li>
                            <li class="breadcrumb-item active">Редактирование</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row ml-3">
                <form action="{{ route('admin.theme.update', $theme->id ) }}" method="POST" class="w-25">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Заголовок"
                               value="{{ $theme->title }}">
                        @error('title')
                        <div class="text-danger">
                            Это поле необходимо для заполнения
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="description" placeholder="Описание"
                               value="{{ $theme->description }}">
                    </div>
{{--                    @dd($theme->client_id)--}}
                    <div class="form-group">
                        <label>Выберите клиента</label>
                        <select class="form-control" name="client_id">
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}"
                                    {{ $client->id == $theme->client_id ? ' selected' : '' }}
                                >{{ $client->fio }}</option>
                            @endforeach
                        </select>
                        @error('client_id')
                        <div class=" text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Обновить">
                    </div>
                </form>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
