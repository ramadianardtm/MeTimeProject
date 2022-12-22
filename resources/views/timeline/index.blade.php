@extends('layouts.main')

@section('container')
<div class="container">
<div class="shadow-lg p-3 mb-5 bg-white rounded mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 py-5">
            <div class="container-forms">
                <div class="row-2">
                    <div class="col-md-8 col-sm-12  ">
                        <div class="well"> 
                            <form action="{{ route('post.store') }}" method="post" class="form-horizontal">
                                @csrf
                                <h4><i class='fas fa-edit'></i>
                                Diary Zone</h4>
                                <div class="form-group">
                                    <textarea type="text" name="body" rows="7" placeholder="Write here for what do you feel..." class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">POST</button>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-4 py-5">
            <div class="card border-primary mb-2" style="max-width: 12rem; margin-left: 120px;">
                <div class="card-header">
                    <a href="#" type="submit" class="btn btn-primary">Visit &nbsp;<i class='fas fa-angle-right'></i></a>
                </div>
                <div class="card-body text-primary">
                  <h5 class="card-title"><i class='fas fa-headset'></i>&nbsp;PODCAST</h5>
                </div>
            </div>
              
            <div class="card border-primary mb-2" style="max-width: 12rem; margin-left: 120px;">
                <div class="card-header">
                    <a href="#" type="submit" class="btn btn-primary">Visit &nbsp;<i class='fas fa-angle-right'></i></a>
                </div>
                <div class="card-body text-primary">
                  <h5 class="card-title"><i class='fas fa-praying-hands'></i>&nbsp;RELIGION</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    @foreach ($posts as $post)
    <div class="mx-auto my-3 w-100 d-flex justify-content-center">
        <div class="col-md-11 py-1">
            <div class="card shadow-sm w-100 p-1 mb-2 bg-white rounded">
                <div class="card-body">
                    <h6 class="card-title">{{ auth()->user()->name }} | <span style="font-size:12px; color:#0000ff89;">{{ auth()->user()->username }}</span></h6>
                    <span style="font-size: 10px; font-style:italic; color:rgba(0,0,0, 0.4);"><p>{{ $post->created_at->diffForHumans() }}.</p></span>
                  <p class="card-text" style="text-align: left; font-weight:normal; font-family: tahoma; font-size:15px">{{ $post->body }}</p>
                  <form method="POST" class="d-inline" onsubmit="return confirm('Move diary to trash?')" action="{{route('destroy', [$post->id])}}">
                    @csrf
                    <input type="hidden" value="DELETE" name="_method">
                    <button type="submit" class="btn btn-danger pull-right" style="font-size: 10px"> ​ <i class='fas fa-trash-alt'></i> &nbsp; Delete</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection