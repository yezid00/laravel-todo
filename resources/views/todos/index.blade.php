<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Todo') }}</title>

        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div class="container">
            <div>
                <div class="jumbotron bar">
                    <h2>This is a todo app</h2>
                    <p>Built with Laravel</p>
                    <h4>By Yezid</h4>
                </div>
            </div>
            
            <div>
                {!! Form::open(['action'=>'TodoController@store','method'=>'POST']) !!}
                    <div class="input-group mb-3">
                        <input type="text" name="todo" class="form-control" placeholder="Enter Task">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary">Submit</button>
                        </div>
                    </div>
                {!! form::close() !!}
            </div>
            <div>
                @foreach($todos as $todo)
                    <ul>
                        <li class="todo-list-item">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="" name="check">
                                <label class="strike"><h3>{{ $todo->todo }}<h3></label>
                            </div>
                            {{-- <button class="del">X</button> --}}
                            <div class="del-button">
                                {!! Form::open(['action'=>['TodoController@destroy',$todo->id],'method'=>'DELETE']) !!}
                                {{ form::submit('X',['class'=>'del']) }}
                            {!! Form::close() !!}
                            </div>
                            
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>


        
    </body>
</html>
