@extends('layouts.promote')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-8">
        <h1>Single <span>Origin</span></h1>
      </div>
    </div>
  </div>
</section>
<!-- End Hero -->

<main id="main">

  <section>
    <div class="container" data-aos="fade-up">
      <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')"> Show all</button>
        <button class="btn" onclick="filterSelection('floral')"> Floral Tone</button>
        <button class="btn" onclick="filterSelection('fruity')"> Fruity Tone</button>
        <button class="btn" onclick="filterSelection('nutty')"> Nutty Tone</button>
        <button class="btn" onclick="filterSelection('winey')"> Winey Tone</button>
      </div>

      <div class="row menu-container">

        @foreach ($products as $p)
            <div class="col-6 menu-item filter-starters">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('admin/upload/hbproduct') . '/' . $p->image }}" class="img-fluid rounded-start" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">{{ $p->name }}</h5>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#popup{{ $p->id }}">Detail</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach

<<<<<<< HEAD
    </div>
=======
        <div class="col-6">
          <div class="filterDiv floral">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-02.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">INDONESIA : SUMATRA GAYO</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup2" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv floral">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-03.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">INDONESIA : SUMATRA BEAR & BARREL</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup3" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv floral">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-04.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">GUATEMALA : HUAHUATENANGO</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup4" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv floral">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-05.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">MYANMAR : BLUE MOUNTAIN</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup5" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv floral">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-06.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">COSTA RICA : FINCA CALLE LAJAS - LAS LAJAS MICROMILL</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup6" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv floral">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-07.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">ETHIOPIA : WEST GUJI CHERICHA G1</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup7" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv floral">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-08.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">ETHIOPIA : GUJI GELENA GESHA</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup8" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv fruity">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-09.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">MYANMAR : SHAN WASHED PROCESS</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup9" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv fruity">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-10.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">COLOMBIA : SUPREMO</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup10" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv fruity">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-11.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">MYANMAR : SHAN (DRY PROCESS)</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup11" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv fruity">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-13.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">THAILAND, CHAING RAI, MAE CHAN TAI</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup13" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv fruity">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-14.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">KENYA : KIRINYAGA</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup14" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv fruity">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-15.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">INDONESIA : SUMATRA SESONGOT GAYO NATURAL</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup15" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv fruity">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-16.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">INDONESIA : SUMATRA SESONGOT GAYO ANAEROBIC HONEY</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup16" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv nutty">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-17.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">BRAZIL : SANTOS</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup17" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv nutty">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-18.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">BRAZIL : CERRADO</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup18" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv nutty">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-19.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">BRAZIL : FAZENDA LAGOA SAMBA</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup19" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv nutty">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-20.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">COLOMBIA : DECAF</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup20" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv nutty">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-21.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">LAOS : BOLAVEN JAVA</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup21" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv flonuttyral">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-22.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">LAOS : FAIMAI</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup22" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv nutty">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-23.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">LAOS : BOLAVEN</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup23" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv winey">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-25.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">CHINA : YUNNAN PAO ZHANGSHA</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup25" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv winey">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-26.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">CHINA : PU'ER</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup26" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="filterDiv winey">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-27.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">COMLOMBIA : ESWADOGA</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup27" class="btn btn-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
>>>>>>> 39087853dd70308448d4cc32269e6dbad2801224

        <!-- pop up -->
        @foreach ($products as $p)
        <!-- Popup detail -->
        <div class="modal fade" id="popup{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 15px;">

                    <div class="d-flex justify-content-end mt-4 me-4">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="popup">
                        <div class="content">
                            <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('admin/upload/hbproduct') . '/' . $p->image }}" class="img-fluid rounded-start" alt="">
                            </div>
                            <div class="col-6">
                                <h5>{{ $p->name }}</h5>
                                <span>{{ $p->detail }}</span><br>
                                <span>Price : {{ $p->price }}</span>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
        <!-- pop up -->

      </div>

    </div>
    <script>
      filterSelection("all")

      function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
          w3RemoveClass(x[i], "show");
          if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
      }

      function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
          }
        }
      }

      function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
          }
        }
        element.className = arr1.join(" ");
      }

      // Add active class to the current button (highlight it)
      var btnContainer = document.getElementById("myBtnContainer");
      var btns = btnContainer.getElementsByClassName("btn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }
    </script>
  </section>
</main><!-- End #main -->
@stop
