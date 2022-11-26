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

    <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">
        <div class="row menu-container">

            @foreach ($products as $hp)
                <div class="col-6 menu-item filter-starters">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('admin/upload/hbproduct') . '/' . $hp->image }}" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">{{ $hp->name }}</h5>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#popup{{ $hp->id }}">Detail</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        </div>
    </section>

    @foreach ($products as $hp)
        <!-- Popup detail -->
        <div class="modal fade" id="popup{{ $hp->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 15px;">

                    <div class="d-flex justify-content-end mt-4 me-4">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="popup">
                        <div class="content">
                            <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('admin/upload/hbproduct') . '/' . $hp->image }}" class="img-fluid rounded-start" alt="">
                            </div>
                            <div class="col-6">
                                <h5>{{ $hp->name }}</h5>
                                <span>{{ $hp->detail }}</span><br>
                                <span>Price : {{ $hp->price }}</span>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach

        <!-- pop up -->
          {{-- <div id="popup2" class="overlay" style="position: relative;">
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
          </div> --}}
          <!-- End pop up -->

</main>
<!-- End #main -->

@endsection
