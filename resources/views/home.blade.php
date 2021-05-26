@extends('layouts.app')
@section('css')

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <nav class="navbar navbar-expand-sm navbar-light bg-info">

                        <!-- Links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <router-link to="/" class=" nav-link text-white">Task List</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/create" class=" nav-link text-white">Create Task</router-link>
                            </li>

                        </ul>

                    </nav>
                </div>

                <div class="card-body" id="app">
                    {{--<router-view></router-view>--}}

                    <router-view></router-view>
                </div>

                <div class="card-footer" >

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
