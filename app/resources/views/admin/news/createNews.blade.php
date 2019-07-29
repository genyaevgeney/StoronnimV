@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>НОВИНИ</h1>
@stop

@section('content')
    <div class="row">
        <form method="post" action="/news/store" enctype="multipart/form-data">
            @csrf
            <div class="box box-default">
                <div class="box-header with-border">
                    <h4>Заповніть форму щоб додати новину</h4>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('flash_message'))
                    <div class="callout callout-{{session('flash_message')[0]}}">
                        <h4>{{session('flash_message')[1]}}</h4>
                    </div>
                @endif
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input class="form-control" id="title" type="text" name="title" required
                               value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Зміст новини</label>
                        <input class="form-control" id="content" type="text" name="content" required 
                               value="{{ old('content') }}">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="hidden" id="type" name="type" value="news" placeholder="Новина">
                    </div>
                    <div class="form-group">
                        <label for="title_image">Фото</label>
                        <input class="form-control" id="title_image"
                               type="file" name="title_image" required value="{{ old('title_image') }}">
                    </div>
                    <div class="form-group">
                        <label for="alt">Додайте опис фото</label>
                        <input class="form-control" id="alt" type="text" name="alt" required
                               value="{{ old('alt') }}">
                    </div>
                    <div class="form-group">
                        <label for="tag">Теги</label>
                        <input class="form-control" id="tag" type="text" name="tag" required
                               value="{{ old('tag') }}">
                    </div>
                <div class="box-footer">
                    <button class="btn btn-primary" type="submit">
                        Зберегти
                    </button>                    
                </div>
                </div>
                
            </div>
        </form>
    </div>

@stop