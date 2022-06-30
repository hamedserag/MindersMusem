@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/css/LEGacy15to18.css">

<!--████████████ cover style ████████████-->

<style>
  .head-img {
    height: 60vh;
    background: url('images/legacy/season17/cover.jpg') no-repeat fixed top;
    background-size: contain;
    border-bottom-left-radius: 50% 20%;
    border-bottom-right-radius: 50% 20%;
  }

  @media only screen and (max-device-width : 768px) {
    .head-img {
      height: 20vh;
    }

  }
</style>

<!--████████████ cover ████████████-->
<section class="row">
  <div class="col-12 head-img">
  </div>
</section>


<!--████████████ memories ████████████-->
<div class="container memories mt-5">
  <div class="row justify-content-center py-5">
    <h1 class="display-4" style="color:#fdd401;">Memories</h1>
  </div>
  <div class="row">
    <div class="col-lg-6 -col-sm-12 row leftSection">
      <img class="mImg" src="images/legacy/season17/memories/m1.jpg" alt="">
    </div>
    <div class="col-lg-6 -col-sm-12 row rightSection">
      <img class="mImg col-12 p-0" src="images/legacy/season17/memories/m2.jpg" alt="">
      <img class="mImg col-12 p-0" src="images/legacy/season17/memories/m3.jpg" alt="">
    </div>
  </div>
</div>
<!--████████████ events ████████████-->
<div class="container events mt-5">
  <div class="row justify-content-center py-5">
    <h1 class="display-4" style="color:#fdd401;">Events</h1>
  </div>
  <!-- Recruitment -->
  <div class="row fs15 event">
    <div class="col-12 pl-0">
      <p class="eName display-4">Recruitment <sup>26<sup>th</sup>Oct</sup> </p>
    </div>
    <div class="col-lg-6 col-sm-12 row leftSection">
      <img class="eImg" src="images/legacy/season17/rec/rec1.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/rec/rec2.jpg" alt="">
    </div>
    <div class="col-lg-6 col-sm-12 row">
      <img class="eImg" src="images/legacy/season17/rec/rec3.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/rec/rec4.jpg" alt="">
    </div>
  </div>
</div>
<!-- Orientation -->
<div class="container events mt-5">
  <div class="row fs15 event">
    <div class="col-12 pl-0">
      <p class="eName display-4">Orientation <sup>1<sup>st</sup>Dec</sup> </p>
    </div>
    <div class="col-lg-6 col-sm-12 row leftSection">
      <img class="eImg" src="images/legacy/season17/ori/ori1.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/ori/ori2.jpg" alt="">
    </div>
    <div class="col-lg-6 col-sm-12 row">
      <img class="eImg" src="images/legacy/season17/ori/ori3.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/ori/ori4.jpg" alt="">
    </div>
  </div>
</div>
<!-- Opening Day -->
<div class="container events mt-5">
  <div class="row fs15 event">
    <div class="col-12 pl-0">
      <p class="eName display-4">Opening Day <sup>5<sup>th</sup>Feb</sup> </p>
    </div>
    <div class="col-lg-6 col-sm-12 row leftSection">
      <img class="eImg" src="images/legacy/season17/od/od1.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/od/od2.jpg" alt="">
    </div>
    <div class="col-lg-6 col-sm-12 row">
      <img class="eImg" src="images/legacy/season17/od/od3.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/od/od4.jpg" alt="">
    </div>
  </div>
</div>
<!-- E-circles -->
<div class="container events mt-5">
  <div class="row fs15 event">
    <div class="col-12 pl-0">
      <p class="eName display-4">E-circles M'17 conversion club <sup> Sep</sup></p>
    </div>
    <div class="col-lg-6 col-sm-12 row leftSection">
      <img class="eImg" src="images/legacy/season17/ec/ec1.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/ec/ec2.jpg" alt="">
    </div>
    <div class="col-lg-6 col-sm-12 row">
      <img class="eImg" src="images/legacy/season17/ec/ec3.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/ec/ec4.jpg" alt="">
    </div>
  </div>
</div>
<!-- Projects Day -->
<div class="container events mt-5">
  <div class="row fs15 event">
    <div class="col-12 pl-0">
      <p class="eName display-4">Projects Day <sup>26<sup>th</sup> March</sup></p>
    </div>
    <div class="col-lg-6 col-sm-12 row leftSection">
      <img class="eImg" src="images/legacy/season17/pd/pd1.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/pd/pd2.jpg" alt="">
    </div>
    <div class="col-lg-6 col-sm-12 row">
      <img class="eImg" src="images/legacy/season17/pd/pd3.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/pd/pd4.jpg" alt="">
    </div>
  </div>
</div>
<!-- First Step 4 -->
<div class="container events mt-5">
  <div class="row fs15 event">
    <div class="col-12 pl-0">
      <p class="eName display-4">First Step 4 <sup>12<sup>th</sup> Sep</sup></p>
    </div>
    <div class="col-lg-6 col-sm-12 row leftSection">
      <img class="eImg" src="images/legacy/season17/fs/fs1.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/fs/fs2.jpg" alt="">
    </div>
    <div class="col-lg-6 col-sm-12 row">
      <img class="eImg" src="images/legacy/season17/fs/fs3.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/fs/fs4.jpg" alt="">
    </div>
  </div>
</div>
<!-- Closing -->
<div class="container events mt-5">
  <div class="row fs15 event">
    <div class="col-12 pl-0">
      <p class="eName display-4">Closing <sup>2<sup>2n</sup> Oct</sup></p>
    </div>
    <div class="col-lg-6 col-sm-12 row leftSection">
      <img class="eImg" src="images/legacy/season17/closing/closing1.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/closing/closing2.jpg" alt="">
    </div>
    <div class="col-lg-6 col-sm-12 row">
      <img class="eImg" src="images/legacy/season17/closing/closing3.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/closing/closing4.jpg" alt="">
    </div>
  </div>
</div>
<!-- Welcome Day -->
<div class="container events mt-5">
  <div class="row fs15 event">
    <div class="col-12 pl-0">
      <p class="eName display-4">Welcome Day <sup>2<sup>nd</sup> Oct</sup></p>
    </div>
    <div class="col-lg-6 col-sm-12 row leftSection">
      <img class="eImg" src="images/legacy/season17/wd/wd1.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/wd/wd2.jpg" alt="">
    </div>
    <div class="col-lg-6 col-sm-12 row">
      <img class="eImg" src="images/legacy/season17/wd/wd3.jpg" alt="">
      <img class="eImg" src="images/legacy/season17/wd/wd4.jpg" alt="">
    </div>
  </div>
</div>
<!--████████████ Highboard ████████████-->
<!--<div class="container">-->
<!--  <div class="row justify-content-start">-->
<!--    <div class="col-10 hbTxt">-->
<!--      <p>Some Motivational Quotes From The Founding Believers...</p>-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="row justify-content-center mt-5">-->
<!--    <div class="col-6 row">-->
<!--      <div class="col-3">-->
<!--        <img class="hbimg rounded-circle" src="images/legacy/season17/hb/assi.jpg" alt="">-->
<!--      </div>-->
<!--      <div class="col-lg-8 col-sm-12">-->
<!--        <p class="hbHeader">Ahmed M. Elassi</p>-->
<!--        <p class="hbQuote">Dont Let Your Dreams Be Dreams</p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!-- hb row -->
<!--  <div class="row justify-content-center mt-4">-->
<!--    <div class="col-lg-6 col-sm-12 row">-->
<!--      <div class="col-3">-->
<!--        <img class="hbimg rounded-circle" src="images/legacy/season17/hb/assi.jpg" alt="">-->
<!--      </div>-->
<!--      <div class="col-lg-8 col-sm-12">-->
<!--        <p class="hbHeader">Ahmed M. Elassi</p>-->
<!--        <p class="hbQuote">Dont Let Your Dreams Be Dreams</p>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="col-lg-6 col-sm-12 row">-->
<!--      <div class="col-3">-->
<!--        <img class="hbimg rounded-circle" src="images/legacy/season17/hb/assi.jpg" alt="">-->
<!--      </div>-->
<!--      <div class="col-lg-8 col-sm-12">-->
<!--        <p class="hbHeader">Ahmed M. Elassi</p>-->
<!--        <p class="hbQuote">Dont Let Your Dreams Be Dreams</p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!-- hb row -->
<!--  <div class="row justify-content-center mt-4">-->
<!--    <div class="col-lg-6 col-sm-12 row">-->
<!--      <div class="col-3">-->
<!--        <img class="hbimg rounded-circle" src="images/legacy/season17/hb/assi.jpg" alt="">-->
<!--      </div>-->
<!--      <div class="col-lg-8 col-sm-12">-->
<!--        <p class="hbHeader">Ahmed M. Elassi</p>-->
<!--        <p class="hbQuote">Dont Let Your Dreams Be Dreams</p>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="col-lg-6 col-sm-12 row">-->
<!--      <div class="col-3">-->
<!--        <img class="hbimg rounded-circle" src="images/legacy/season17/hb/assi.jpg" alt="">-->
<!--      </div>-->
<!--      <div class="col-lg-8 col-sm-12">-->
<!--        <p class="hbHeader">Ahmed M. Elassi</p>-->
<!--        <p class="hbQuote">Dont Let Your Dreams Be Dreams</p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!-- hb row -->
<!--  <div class="row justify-content-center mt-4">-->
<!--    <div class="col-lg-6 col-sm-12 row">-->
<!--      <div class="col-3">-->
<!--        <img class="hbimg rounded-circle" src="images/legacy/season17/hb/assi.jpg" alt="">-->
<!--      </div>-->
<!--      <div class="col-lg-8 col-sm-12">-->
<!--        <p class="hbHeader">Ahmed M. Elassi</p>-->
<!--        <p class="hbQuote">Dont Let Your Dreams Be Dreams</p>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="col-lg-6 col-sm-12 row">-->
<!--      <div class="col-3">-->
<!--        <img class="hbimg rounded-circle" src="images/legacy/season17/hb/assi.jpg" alt="">-->
<!--      </div>-->
<!--      <div class="col-lg-8 col-sm-12">-->
<!--        <p class="hbHeader">Ahmed M. Elassi</p>-->
<!--        <p class="hbQuote">Dont Let Your Dreams Be Dreams</p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="row justify-content-end mt-5">-->
<!--    <div class="col-10 tyTxt">-->
<!--      <p>Every Minders Believer was a part of this journey and a part of this success <br> Thank You.</p>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

@endsection