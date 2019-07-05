@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Blog Login
    </div>
    @if (Session::has('login-fail'))
        <div class="login-fail">
            <p class="text-danger">{{ Session::get('login-fail') }}</p>
        </div>
    @endif

    <!-- Hiển thị trạng thái chưa đăng nhập -->
    @if (Session::has('not-login'))
        <div class="not-login">
            <p class="text-danger">{{ Session::get('not-login') }}</p>
        </div>
    @endif
    <div class="links">
        <a href="{{ route('show.login') }}">
            <button type="button" class="btn btn-outline-primary">Đăng Nhập</button>
        </a>
    </div>
@endsection