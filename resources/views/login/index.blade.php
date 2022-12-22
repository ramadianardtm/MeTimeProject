@extends('layouts.main')

@section('container')
<div class="login-page">
  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

    <div class="form">
        <h2> LOGIN </h2>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid
          @enderror" id="email" placeholder="name@example.com" autofocus required value="{{  old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button type="submit">login</button>
        <p class="message">Not registered? <a href="/register"> Sign Up Now!</a></p>
      </form>
    </div>
</div>
@endsection