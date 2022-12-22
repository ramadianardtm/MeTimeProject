@extends('layouts.main')

@section('container')
    <div class="consult">
      <div class="consult-text">
      <h2>CONSULTATION</h2>
      <p>Choose a psychiatrist that fits your problem</p>
      </div>
    </div>
     
        @foreach($counselling as $choose)
        <div class="article">
          <div class="consult1">
            <div class="row">
              <div class="col-md-6">
              <div class="card mb-3 bg-light">
                 <table class="table">
                  <thead>
                    <tr>
                    <th><img style="height: 150px; border-radius:5px; position=relative "   
                    src={{ $choose->image }} alt="dokter metime"></th>
                    <th width="700px"><div class="card-nama">
                    <p margin="30px 0px 0px 0px">{{ $choose->name }}</p>
                    <h5>{{ $choose->rs }}</h5>
                    <h5>{{ $choose->daerah }} </h1>
                      <ul>
                        <li>{{ $choose->spesial1 }}</li>
                        <li>{{ $choose->spesial2 }}</li>
                        <li>{{ $choose->spesial3 }}</li>
                      </ul>
                    </div></th>
                    </tr>
                    </thead>
                  </table>
                  <div class="btn-group">
                    <a href="/counselling.choose/{{ $choose->id }}"  class="btn btn-primary" style="padding= 5px 10px 5px 200px"> Choose</a>
                </div>
                   </div> 
          </div>
          <div class="col-md-6">
            <div class="card mb-3 bg-light">
               <table class="table">
                <thead>
                  <tr>
                  <th><img style="height: 150px; border-radius:5px; position=relative "   
                  src={{ $choose->image }} alt="dokter metime"></th>
                  <th width="700px"><div class="card-nama">
                  <p margin="30px 0px 0px 0px">{{ $choose->name }}</p>
                  <h5>{{ $choose->rs }}</h5>
                  <h5>{{ $choose->daerah }} </h1>
                    <ul>
                      <li>{{ $choose->spesial1 }}</li>
                      <li>{{ $choose->spesial2 }}</li>
                      <li>{{ $choose->spesial3 }}</li>
                    </ul>
                  </div></th>
                  </tr>
                  </thead>
                </table>
                <div class="btn-group">
                <a href="/counselling.choose/{{ $choose->id }}"  class="btn btn-primary" style="padding= 5px 10px 5px 200px"> Choose</a>
              </div>
          </div> 
        </div>
        </div>
        </div>
      </div>
@endforeach
@endsection