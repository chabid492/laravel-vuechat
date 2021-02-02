@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">

                            <ul class="nav navbar-nav d-block">
                                <li class="nav-item d-inline-block">
                                    <router-link  to="/">
                                        <a>Tasks</a>
                                    </router-link>
                                </li>
                                <li class="nav-item d-inline-block ml-3">
                                    <router-link  to="/profile">
                                        <a>Profile</a>
                                    </router-link>
                                </li>
                            </ul>
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
