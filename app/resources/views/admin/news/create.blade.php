@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>НОВОСТИ</h1>
@stop

@section('content')
    <div class="row">
        <form method="post" action="/news/store" enctype="multipart/form-data">
            @csrf
            <div class="box box-default">
                <div class="box-header with-border">
                    <h4>Заполните форму для добаления новости или анонса</h4>
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
                        <label for="tag">Теги</label>
                        <input class="form-control" id="tag" type="text" name="tag" required
                        	   value="{{ old('tag') }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Содержание</label>
                        <input class="form-control" id="content" type="text" name="content" required 
                               value="{{ old('content') }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Анонс/Новость</label>
                        <!-- ПРОРАБОТАТЬ ВЫВОД ПРЕЖНЕГО ВЫБОРА -->
                        <select class="form-control" id="type" name="type">
                            <option value="{{ 'announce' }}">Анонс</option>
                            <option value="{{ 'news' }}">Новость</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title_image">Фото</label>
                        <input class="form-control" id="title_image"
                               type="file" name="title_image" required value="{{ old('title_image') }}">
                    </div>
                    <!-- <div class="form-group">
                        <label for="type">@lang('request.notes')</label>
                        <input class="form-control" id="note"
                               type="text" name="note"  value="{{ old('note') }}">
                    </div>
                    @if(Auth::user()->type == 'director')
                        <div class="form-group">
                            <label for="type">@lang('request.user_id')</label>
                            <select class="form-control" id="user_id" name="user_id">
                                <option value="{{ old('user_id') }}"></option>
                                @foreach ($users as $name => $id)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>                        
                        </div>
                    @endif
                    @if(Auth::user()->type == 'manager')
                        <div class="form-group">
                            <label for="type">@lang('request.user_id')</label>
                            <select class="form-control" id="user_id" name="user_id">
                                <option value="{{ old('user_id') }}"></option>
                                <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                            </select>                        
                        </div>
                    @endif -->
                <div class="box-footer">
                    <button class="btn btn-primary" type="submit">
                        Сохранить
                    </button>                    
                </div>
                </div>
                
            </div>
        </form>
    </div>

@stop