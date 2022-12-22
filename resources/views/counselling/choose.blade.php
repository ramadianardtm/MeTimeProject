@extends('layouts.main')

@section('container')

<div class="container-choose">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" href="/counselling.counselling">{{ __('Select Schedule') }}</div>
                <div class="card-body">
                    <div class="col-md-8">

                        <form action="/counselling.choose/{id}" method="post" action="/user.profile" enctype="multipart/form-data">
                            @csrf
                            <input id="dokter" type="hidden" class="form-control" name="dokter" value="{{$consult->name}}">
                            <input id="namars" type="hidden" class="form-control" name="namars" value="{{$consult->rs}}">
                            <div class="row justify-content-center">
                                <label for="tanggal" class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>
                                <div class="col-md-6">
                                    <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" required autocomplete="tanggal">
                                    @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <label for="waktu" class="col-md-4 col-form-label text-md-end">{{ __('Time') }}</label>
                                <div class="col-md-6">
                                    <input id="waktu" type="time" class="form-control @error('waktu') is-invalid @enderror" name="waktu" required autocomplete="waktu">
                                    @error('waktu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="form-group">
                                    <label for="tempat">Room</label> <br>
                                    <label for="tempat" class="form-control @error('waktu') is-invalid @enderror">
                                        <input type="radio" name="tempat" value="Chat Personal" id="tempat">Chat Personal
                                        <input type="radio" name="tempat" value="Video Call" id="tempat">Video Call
                                        <input type="radio" name="tempat" value="Meet Onsite" id="tempat">Meet Onsite
                                    </label>
                                </div>
                            </div>
                            <div class="btn-group2">
                                <div class="row mb-0 mt-3">
                                    <div class="col-md-6 offset-md-4" margin="right">
                                        <button type="submit" class="btn btn-primary">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="btn-group">
                            <a href="/counselling" type="button" class="btn btn-primary"> Back </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection