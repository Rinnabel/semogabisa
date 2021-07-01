@extends('master')

@section('content')

<div class="container">
    <div class="profile ml-4">
        <section class="row">
            <div>
                <img src="img/koceng.jpg" alt="Profile Pic" class="rounded-circle mr-3" style="width:90px">
            </div>
            <header class="mt-3">
                <h2>uehehe</h2>
                <p class="mt-n2">@uahaha</p>
            </header>
        </section>
    </div>
    <div class="navbar navbar-expand-lg mt-5">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active mx-3">
                <a class="nav-link border-bottom border-dark text-dark" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-dark" href="#">Link</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-dark" href="#">Disabled</a>
            </li>
        </ul>
    </div>
    
</div>

@yield('menu')
@yield('upload')

@endsection
