@extends('layouts.main')

@section('container')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-4 col-md-4">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="bd-placeholder-img rounded-circle" width="75" height="75" img="img/{{ auth()->user()->photo }}">
          </div>
          <h3 class="profile-username text-center">{{ auth()->user()->username }}</h3>
          <hr>
          <strong>
            <a class="dropdown-item {{ Request()->is('user.nama') ? 'active' : ''}}" href="/user.nama" class="text-decoration-none">
              <i class="fas fa-user mr-2"></i>
              Profile </a>
          </strong>
          <hr>
          <strong>
            <a class="dropdown-item {{ Request()->is('user.histori') ? 'active' : ''}}" href="/user.histori" class="text-decoration-none">
              <i class="fas fa-scroll mr-2"></i>
              History Consult </a>
          </strong>
          <hr>
          <strong>
            <a class="dropdown-item {{ Request()->is('user.setting') ? 'active' : ''}}" href="/user.setting" class="text-decoration-none">
              <i class="fas fa-gear mr-2"></i>
              Setting </a>
          </strong>
          <hr>
          <strong>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class='fas fa-sign-out-alt'></i> &nbsp; Logout</a></button>
            </form>
          </strong>

        </div>
      </div>
    </div>
    <div class="col col-lg-8 col-md-8">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Jadwal Konsultasi</h3>
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
                  <td>
                    {{ $index +1 }}
                  </td>
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
      </div>
    </div>
  </div>
</div>
</div>
@endsection