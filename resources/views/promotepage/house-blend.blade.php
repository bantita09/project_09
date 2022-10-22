@extends('layouts.promote')
@section('content')

<style>
  h5 {
    font-family: "Open Sans", sans-serif;
    font-weight: 500;
  }

  .card {
    color: black;
    font-family: "Poppins", sans-serif;
  }

  .btn {
    color: white;
    background-color: #d9ba85;
    border: #d9ba85;
    transition-duration: 0.5s;
    cursor: pointer;
  }

  .btn:hover {
    background-color: #cda45e;
    color: black;
  }

  .overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
  }

  .overlay:target {
    visibility: visible;
    opacity: 1;
  }

  .popup {
    margin: 10%;
    padding: 20px;
    background: #fff;
    border-radius: 15px;
    width: 80%;
    position: relative;
    transition: all 5s ease-in-out;
    align-items: center;
  }

  .popup h5 {
    color: black;
    font-size: xx-large;
  }

  .popup span {
    color: black;
    font-size: large;
  }

  .popup .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }

  .popup .close:hover {
    color: #06D85F;
  }

  .popup .content {
    padding: 5%;
    max-height: 75%;
    overflow: auto;
  }

  @media screen and (max-width: 70px) {
    .popup {
      width: 100%;
    }
  }
</style>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-8">
        <h1>House <span>Blend</span></h1>
      </div>
    </div>
  </div>
</section>
<!-- End Hero -->

<!-- Main -->
<main id="main">

  <section>
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('template/promote/assets/img/house-blend/HB-01.png') }}" class="img-fluid rounded-start" alt="">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">House Blend : Black</h5>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                  <a href="#popup1" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('template/promote/assets/img/house-blend/HB-02.png') }}" class="img-fluid rounded-start" alt="">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">House Blend : White</h5>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                  <a href="#popup2" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('template/promote/assets/img/house-blend/HB-03.png') }}" class="img-fluid rounded-start" alt="">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">House Blend : Espresso<h5>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                      <a href="#popup3" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('template/promote/assets/img/house-blend/HB-04.png') }}" class="img-fluid rounded-start" alt="">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">House Blend : Old School</h5>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                  <a href="#popup4" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('template/promote/assets/img/house-blend/HB-05.png') }}" class="img-fluid rounded-start" alt="">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">House Blend : Gentleman</h5>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                  <a href="#popup5" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('template/promote/assets/img/house-blend/HB-06.png') }}" class="img-fluid rounded-start" alt="">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">House-blend : Vanilla Sky</h5>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                  <a href="#popup6" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('template/promote/assets/img/house-blend/HB-07.png') }}" class="img-fluid rounded-start" alt="">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">House-blend : Twilight Sky</h5>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                  <a href="#popup7" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- pop up -->
        <div id="popup1" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/house-blend/HBD-01.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>House Blend : Black</h5>
                  <span>Testing Note : Nutty, Chocolate</span><br>
                  <span>Price : 250g. | 250.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup2" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/house-blend/HBD-02.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>House Blend : White</h5>
                  <span>Testing Note : Nutty, Chocolate, Caramel, Smooth</span><br>
                  <span>Price : 250g. | 310.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup3" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/house-blend/HBD-03.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>House Blend : Espresso</h5>
                  <span>Testing Note : Chocolate, Balance, Hard body</span><br>
                  <span>Price : 250g. | 185.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup4" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/house-blend/HBD-04.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>House Blend : Old School</h5>
                  <span>Testing Note : Mocha, Chocolate, Smooth, Balance body</span><br>
                  <span>Price : 250g. | 200.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup5" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/house-blend/HBD-05.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>House Blend : Gemtlle Man</h5>
                  <span>Testing Note : Whisky rum, Chocolate, Smooth Body</span><br>
                  <span>Price : 250g. | 435.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup6" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/house-blend/HBD-06.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>House Blend : Vanilla Sky</h5>
                  <span>Testing Note : Whisky, Vanilla, Berries, Sweet&Smooth</span><br>
                  <span>Price : 250g. | 480.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup7" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/house-blend/HBD-07.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>House Blend : Twilight Sky</h5>
                  <span>Testing Note : Whisky, Vanilla, Chocolate, Nutty, Smooth</span><br>
                  <span>Price : 250g. | 480.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End pop up -->
      </div>

    </div>

  </section>
</main>
<!-- End #main -->
@stop