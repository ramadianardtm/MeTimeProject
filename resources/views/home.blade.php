@extends('layouts.main')

@section('container')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url(https://images.pexels.com/photos/247314/pexels-photo-247314.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
      <div class="carousel-caption">
        <h5>TIMELINE</h5>
        <p>Share the complaints that are in you.</p>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('https://images.pexels.com/photos/4100679/pexels-photo-4100679.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')">
      <div class="carousel-caption">
        <h5>COUNSELLING</h5>
        <p>Consult all the problems that plague your life</p>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('https://images.pexels.com/photos/3755015/pexels-photo-3755015.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')">
      <div class="carousel-caption">
        <h5>PODCAST</h5>
        <p>Listen to something that makes you feel calm and safe.</p>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('https://images.pexels.com/photos/7249191/pexels-photo-7249191.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')">
      <div class="carousel-caption">
        <h5>RELIGION</h5>
        <p>Finding out that sticking to a religion is something very important in life.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>

<!-- Page Content -->
  <div class="content-1">
    <div class="content-1-text">
      <h2>What is Mental Health?</h2>
      <p>Mental health includes our emotional, psychological, and social well-being. It affects how we think, feel, and act. It also helps determine how we handle stress, relate to others, and make choices. Mental health is important at every stage of life, from childhood and adolescence through adulthood.</p>
    </div>
    <img src="img/mentalpic.jpg" alt="me">
  </div>

  <div class="article bg-primary">
    <div class="content-2">
      <div class="content-2-text">
      <h2>ARTICLES</h2>
      <p>Find out more about the mental health in your life</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img style="width: 320px;border-radius:5px; padding:10px 15px 5px 10px; margin:auto;" src="img/artikel1.jpg" alt="mental health artikel">
            <div class="card-body">
              <p class="card-text">Criticizing the Concept of Mental Health (Mental Health Criticisms)</p>
              <div class="btn-group1">
              <form action="/artikel" method="post"> 
                @csrf
                  <button type="submit" href="/artikel" class="btn btn-sm btn-outline-primary">Read More</button>
              </form>
    </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img style="width: 320px;border-radius:5px; padding:10px 15px 5px 10px; margin:auto;" src="img/artikel2.jpeg" alt="mental health artikel">
            <div class="card-body">
              <p class="card-text">
                Forgiveness: How to Let Go of Hurt So You Can Feel Better in 11 Steps</p>
                <div class="btn-group1">
                  <button type="button" class="btn btn-sm btn-outline-primary">Read More</button>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img style="width: 320px;border-radius:5px; padding:10px 15px 5px 10px; margin:auto;" src="img/artikel3.jpg" alt="mental health artikel">
            <div class="card-body">
              <p class="card-text">Why We Need To Stop Judging Mental Illness</p>
              <div class="btn-group1">
              <form action="/read" class="nav-link {{ Request()->is('read') ? 'active' : '' }}"  href="/read" method="">
                @csrf
                <button type="submit" class="btn btn-outline-primary" style="margin= center"> Read More</button>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>   
    </div>
  </div> 

  <div class="article bg-white">
    <div class="content-2">
      <div class="content-2-text-1">
      <h3>Let's consult with only 3 steps</h3>
      </div>
      <div class="row">
        <div class="col-md-4" style="border-radius:50px">
          <div class="card mb-4 box-shadow bg-light">
            <img style="width: 300px;border-radius:40px; padding:10px 15px 15px 10px; margin:auto;" src="img/login.jpg" alt="mental health artikel">
              <p class="card-text-1">Login pada web MeTime untuk memilih dan melakukan konsultasi</p>
            </div>
          </div>
        <div class="col-md-4" style="border-radius:50px">
          <div class="card mb-4 box-shadow bg-light" style="boarder-radius:50px">
            <img style="width: 300px;border-radius:40px; padding:10px 15px 15px 10px; margin:auto;" src="img/pilih.jpg" alt="mental health artikel">
              <p class="card-text-1">
                Pilih pskiater yang sesuai dengan masalahmu lalu atur jadwal dengannya</p>
            </div>
          </div>
        <div class="col-md-4" style="border-radius:50px">
          <div class="card mb-4 box-shadow bg-light" style="boarder-radius:50px">
            <img style="width: 300px;border-radius:40px; padding:10px 15px 15px 10px; margin:auto;" src="img/konsul.jpg" alt="mental health artikel">
              <p class="card-text-1">Lakukan konsultasimu dengan dokter dan pada waktu yang telah kamu pilih</p>
            </div>
          </div>
        </div>
      </div>   
    </div>


    <div class="container-5 bg-light">
      <div class="content-4" style="padding=0px 100px">
        <div class="content-4-text">
        <p> Pilih Salah Satu Cara Konsultasi </p>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <img class="bd-placeholder-img rounded-circle"  width="100" height="100" src="img/chat.png">
            <h6>Chat Personal</h6>
          </div><!-- /.col-lg-3 -->
          <div class="col-lg-3">
            <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="img/kamera.jpg">
            <h6>Video Call</h6>
          </div><!-- /.col-lg-3 -->
          <div class="col-lg-3">
            <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="img/rumahs.png">
            <h6>Bertemu Langsung</h6>
          </div><!-- /.col-lg-3 -->
        </div>
      </div>
    </div>

  <div class="container-4">
    <div class="content-3">
      <div class="content-3-text">
      <h2> OUR TEAMS DEVELOPMENT </h2>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <img class="bd-placeholder-img rounded-circle"  width="135" height="135" src="img/trisuri.png">
          <h6>Tri Suri Septiyani</h6>
          <p>1512620034</p>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3">
          <img class="bd-placeholder-img rounded-circle" width="135" height="135" src="img/fathiyyah.jpg">
          <h6>Fathiyyah Al Qash</h6>
          <p>1512620082</p>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3">
          <img class="bd-placeholder-img rounded-circle" width="135" height="135" src="img/yesaya.jpg">
          <h6> Yesaya Vanefraim</h6>
          <p>1512620069</p>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3">
        <svg class="bd-placeholder-img rounded-circle" width="135" height="135" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
          <h6>Zaki Dani Amrullah</h6>
          <p>	1512620059</p>
        </div><!-- /.col-lg-3 -->
      </div>
    </div>
  </div>
@endsection
