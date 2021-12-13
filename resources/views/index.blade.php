@extends('templates.template')

@section('content')

        <div class="header center-container">
            <h1>To Do List</h1>
        </div>
        
        <div class="content">

            <div class="list">

                <div class="center-container">
                    <h2>Listagem de Afazeres</h2>
                </div>

                <div class="search-container">
                    <div class="input-container">
                        <label for="name-search">Filtrar</label>
                        <input type="name-search" name="name-search" id="name-search">
                    </div>

                    <div class="input-container">
                        <label for="category-search">Categoria</label>
                        <select name="category-search" id="category-search">
                            <option value="null"></option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button>Filtrar</button>
                </div>

                <div class="list-container">
                    <ul>
                    @foreach($tasks as $task)
                        @php
                            $category=$task->find($task->id)->relCategory;
                        @endphp
                        <li>
                            <form name="edit" id="edit" method="post" action="{{url('/')}}" >
                                @method('PUT')
                                @csrf
                            <div>
                                <input type="hidden" name="id" id="id" value="{{$task->id}}"/>
                                <input type="hidden" name="status" id="status" value="{{$task->status}}"/>
                                <input type="checkbox" id="done" name="done" value="{{$task->status}}" />
                                <p id="title">{{$task->description}}</p>
                                <div class="input-container">
                                    <label for="description">Descrição</label>
                                    <input type="text" name="description" id="description">
                                </div>
                            </div>

                            <ul>
                                <li>Categoria: {{$category->title}}</li>
                                <li class="input-container">
                                    <label for="category">Categoria</label>
                                    <select name="id_category" id="id_category">
                                        <option value="{{$task->relCategory->id ?? ''}}">{{$task->relCategory->title ?? 'categoria'}}</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </li>

                                <li>Cadastrado em 21/02/2021</li>
                            </ul>
                            <button class="js-del" id="{{$task->id}}" type="button">Deletar</button>
                            <button type="submit">Salvar</button>
                            </form> 
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>

            <div class="form">

                <div class="center-container">
                    <h2>Atualização de Afazeres</h2>
                </div>

                <form name="form" method="post" action="{{url('/')}}">
                    @csrf
                    <div class="input-container">
                        <label for="description">Descrição</label>
                        <input type="text" name="description" id="description">
                    </div>

                    <div class="input-container">
                        <label for="category">Categoria</label>
                        <select name="id_category" id="id_category">
                            <option value="null"></option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                             @endforeach
                        </select>
                    </div>

                    <div class="buttons-container">
                        <button onclick="cleanFunctions(event)">Limpar</button>
                        <button type="submit">Cadastrar</button>
                    </div>
                </form>
            </div>

        </div>

@endsection