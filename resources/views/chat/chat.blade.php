<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Vue live chat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .chat-body{
            overflow-y: auto;
            height: 200px;
        }
    </style>
</head>
    <body>

        <div class="container">
            <div class="row" id="app">
                <div class="col-md-6">
                    <li class="list-group-item bg-info text-white"><h4>Chat Room</h4></li>
                    <ul class="list-group chat-body" v-chat-scroll>

                        <Chat v-for="value in chat.message"
                              :key="value.index"
                              color="info">
                            @{{ value }}
                        </Chat>


                    </ul>
                    <input type="text" class="form-control bg-light" placeholder="Type message"
                           v-model="message" @keyup.enter="send">
                </div>

                {{--<router-view></router-view>--}}
            </div>
        </div>


        ​<script src="{{ asset('js/app.js') }}" ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
