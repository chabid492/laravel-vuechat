@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <nav class="navbar navbar-expand-lg navbar-light bg-success">
                        <div class="collapse navbar-collapse">
                            <div class="navbar-nav">
                                <router-link to="/" class="nav-item nav-link text-white ">Task List</router-link>
                                <router-link to="/create" class="nav-item nav-link text-white">Create Task</router-link>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="card-body" id="app">
                    <router-view></router-view>
                </div>

                <div class="card-footer" >

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
