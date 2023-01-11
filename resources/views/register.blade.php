@extends('component.layout')

@section('title')
    <link rel="stylesheet" href="{{ asset('auth.css') }}">
    <title>Registrasi Akun</title>
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
        <form class="auth bg-oren" action="{{ url('register') }}" method="POST">
            @csrf
            <h5 class="text-center">Registrasi</h5>

            <input type="text" class="form-control form-control-lg" name="name" placeholder="Nama" required />

            <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" required />

            <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required />

            <input type="password" class="form-control form-control-lg" name="password_confirmation"
                placeholder="Ulangi Password" required />

            <button type="submit" class="btn btn-primary">Registrasi</button>
            <a href="{{ url('login') }}">Sudah memiliki akun</a>
        </form>
    </div>
@endsection
