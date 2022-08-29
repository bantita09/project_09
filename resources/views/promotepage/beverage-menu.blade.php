@extends('layouts.promote')
@section('content')

<style>
  .card {
    margin: 5%;
}
</style>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
                <h1>Beverage <span>Menu</span></h1>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">

  <section>
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-4">
          <div class="card" style="width: 80%;">
            <img src="{{asset ('template/promote/assets/img/bev-menu/bev-01.png') }}" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-4">
          <div class="card" style="width: 80%;">
            <img src="{{asset('template/promote/assets/img/bev-menu/bev-02.png')}}" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-4">
          <div class="card" style="width: 80%;">
            <img src="{{asset('template/promote/assets/img/bev-menu/bev-03.png')}}" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-4">
          <div class="card" style="width: 80%;">
            <img src="{{asset('template/promote/assets/img/bev-menu/bev-04.png')}}" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-4">
          <div class="card" style="width: 80%;">
            <img src="{{asset('template/promote/assets/img/bev-menu/bev-05.png')}}" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-4">
          <div class="card" style="width: 80%;">
            <img src="{{asset('template/promote/assets/img/bev-menu/bev-06.png')}}" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-4">
          <div class="card" style="width: 80%;">
            <img src="{{asset('template/promote/assets/img/bev-menu/bev-07.png')}}" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-4">
          <div class="card" style="width: 80%;">
            <img src="{{asset('template/promote/assets/img/bev-menu/bev-08.png')}}" class="card-img-top" alt="">
          </div>
        </div>

      </div>

    </div>

  </section>
</main><!-- End #main -->
@stop