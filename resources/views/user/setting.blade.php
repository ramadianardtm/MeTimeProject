@extends('layouts.main')

@section('container')
<div class="container-pro">
    <div class=" row justify-content-center">
        <div class="col md-4">
            <div class="card mb-3 bg-light">
                <p> Pengaturan </p>
                <hr>
                    <li>Buku Panduan</li>
                    <li>Customer Service</li>
                    <li>FAQ</li>
                    <li>About Us</li>
                    <li>Contact Us</li>
                    <form action="/profile" class="nav-link {{ Request()->is('profile') ? 'active' : '' }}" href="/profile"method="">
                        @csrf
                <button type="submit" class="btn btn-primary"> Back</button>
              </form>
            </div>
    </div>
</div>
</div>
@endsection