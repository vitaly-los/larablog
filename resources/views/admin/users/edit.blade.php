@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить пользователя
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            {{Form::open( ['route' => ['user.update', $user->id], 'method' => 'put', 'files' => true ] )}}
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавляем пользователя</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputName">Имя</label>
                            <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPass">Пароль</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPass" placeholder="">
                        </div>
                        <div class="form-group">
                            <img src="{{$user->getImage()}}" alt="" width="200" class="img-responsive">
                            <label for="exampleInputFile">Аватар</label>
                            <input type="file" id="exampleInputFile" name="avatar">

                            <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-default">Назад</button>
                    <button class="btn btn-warning pull-right">Изменить</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
