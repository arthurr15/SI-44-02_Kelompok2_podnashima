@extends('component.layout')

@section('title')
    <link rel="stylesheet" href="{{ asset('auth.css') }}">
    <title>Masuk Akun</title>
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="bg-putih h-md-100">
        <form class="auth bg-oren" action="{{ route('login') }}" method="POST">
            @csrf
            <h5 class="text-center">Masuk</h5>
            {{-- <input type="text" placeholder="Email" name="email"> --}}
            <input type="email" id="email" name="email" placeholder="masukan email" />
            {{-- <input type="password" placeholder="Password" name="password"> --}}
            <input type="password" id="password" name="password" placeholder="masukan password" />
            <button type="submit" class="btn btn-primary">Masuk</button>
            <a href="{{ url('register') }}">Belum memiliki akun</a>
        </form>
    </div>
@endsection
