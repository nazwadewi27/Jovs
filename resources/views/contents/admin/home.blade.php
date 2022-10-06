@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card bg-primary text-white card-rounded">
            <div class="card-body text-center pt-4" style="background: #61678b">
                <h4 class="card-title">
                    <b><i class="fas fa-check me-1"></i></b> 
                    Selamat Datang Admin, <b>{{ auth()->user()->name }}</b>
                </h4>
                <a href="{{ route('home.index') }}" target="_blank" class="btn btn-lg mt-2" style="background: #61678b; color: #dedeea">
                    <i class="fas fa-rocket me-2"></i> Lihat Website
                </a>
            </div>
        </div>
    </div>
@endsection
