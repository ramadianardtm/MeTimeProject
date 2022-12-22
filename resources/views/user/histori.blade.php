@extends('layouts.main')

@section('container')
<div class="article">
  <div class="container-choose">
    <div class="col col-lg-12">
      <div class="card card-primary card-outline w-100">
        <div class="card-header">
          <h3 class="card-title">Riwayat Konsultasi</h3>
        </div>
        @if($user->count() == 0)
        <div class="text-center" style="padding: 60px;margin-bottom:50px;">
          <a href=""><i class="fas fa-exclamation-circle" style="font-size: 100px;color:#ffec58"></i></a>
          <br>
          <h5 style="margin-top: 20px;font-weight:bold;">Tidak ada jadwal konsultasi</h5>
        </div>
        @else
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Dokter</th>
                  <th>Tanggal</th>
                  <th>Jam</th>
                  <th>Metode</th>
                  <th>Tempat</th>
                </tr>
              </thead>
              @foreach($user as $index => $us)
              <tbody>
                <tr>
                <td>{{ $index +1 }}</td>
                  <td>
                    {{$us->dokter}}
                  </td>
                  <td>
                    {{$us->tanggal}}
                  </td>
                  <td>
                    {{$us->waktu}}
                  </td>
                  <td>
                    {{$us->tempat}}
                  </td>
                  <td>
                    {{$us->namars}}
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
        @endif
        <form action="/profile" class="nav-link {{ Request()->is('profile') ? 'active' : '' }}" href="/profile" method="">
          @csrf
          <button type="submit" class="btn btn-primary" style="margin-bottom:10px"> Back </button>
        </form>
      </div>
    </div>
  </div>
  @endsection