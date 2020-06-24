
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
                <form action="{{ route('postTodo') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="todo" class="form-control" placeholder="Enter Todo">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                @foreach($todo as $todo)
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="" name="check">
                                <span><label class="strike"><h3>{{-- {{ $todo }} --}}<h3></label></span>
                            </div>
                            <button class="del">X</button>
                        </li>
                    </ol>
                {{-- @endforeach --}}
            </div>
        </div>


        {{-- div class="container">
            <div class="row">
                {!! Form::open(['action'=>route('/'), 'method'=>'POST']) !!}
                    <div class="form-group">
                        {{ form::text('todo',null,['class'=>'form-control']) }}
                    </div>
                {!! form::close() !!}

            </div>
        </div> --}}
    </body>
</html>
