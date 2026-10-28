@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Profil Petugas</div>
        <div class="card-body">
            <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Akun Dibuat:</strong> {{ Auth::user()->created_at->diffForHumans() }}</p>
        </div>
    </div>
</div>
@endsection