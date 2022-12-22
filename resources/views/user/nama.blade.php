@extends('layouts.main')

@section('container')
<div class="container-pro">

  <div class="col-md-8">
    <div class="card mb-3 bg-light">
      <div class="card card-outline-blok-primary">
        <div class="card-header" href="/user.profile">{{ __('Profile') }}</div>
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="bd-placeholder-img rounded-circle" width="75" height="75" img="img/{{ auth()->user()->photo }}">
          </div>
          <table class="lengkap">
            <thead>
              <tr>
                <th width="200px">
                  <hr>
                  <p> Nama </p>
                  <hr>
                  <p> Username </p>
                  <hr>
                  <p> email </p>
                </th>
                <th width="400px">
                  <hr>
                  <p> : {{ auth()->user()->name }} </p>
                  <hr>
                  <p> : {{ auth()->user()->username }} </p>
                  <hr>
                  <p> : {{ auth()->user()->email }} </p>
                </th>
              </tr>
            </thead>
          </table>
          <div class="row">
            <div class="col-sm-3">
                <a href="/user.edit" type="button" class="btn btn-primary"> Edit Profile</a>
            </div>
            <div class="col-sm-3">
              <form class="btn-group3" action="/profile" class="nav-link {{ Request()->is('profile') ? 'active' : '' }}" href="/profile" method="">
                @csrf
                <button type="submit" class="btn btn-primary"> Back </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection