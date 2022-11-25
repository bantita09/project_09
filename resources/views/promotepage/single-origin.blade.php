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

      <div class="row">

        <div class="col-6">
          <div class="filterDiv floral">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{asset('template/promote/assets/img/single-origin/SO-01.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">ETHIOPIA : YIRGACHEFFE</h5>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#popup1" class="btn btn-primary">Detail</a>
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

        <!-- pop up -->
        <div id="popup1" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-01.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>ETHIOPIA : YIRGACHEFFE</h5>
                  <span>Process : Washed</span><br>
                  <span>Variety : Heirloom</span><br>
                  <span>Testing Note : Floral, Lemon, Orange</span><br>
                  <span>Price : 100g. | 200.฿</span>
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
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-02.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>INDONESIA : SUMATRA GAYO</h5>
                  <span>Process : Wet hullihng</span><br>
                  <span>Variety : Catimor, Typica, Bergendel</span><br>
                  <span>Testing Note : Grapefriut, Caramel, Spice, Round body</span><br>
                  <span>Price : 100g. | 160.฿</span>
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
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-03.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>INDONESIA : SUMATRA BEAR & BARREL</h5>
                  <span>Process : Netural</span><br>
                  <span>Variety : Areng super, Bourbon</span><br>
                  <span>Testing Note : Fruitpunch, Lemon, Rasin, Floral</span><br>
                  <span>Price : 100g. | 240.฿</span>
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
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-04.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>GUATEMALA : HUAHUATENANGO </h5>
                  <span>Process : Washed</span><br>
                  <span>Variety : Caturra</span><br>
                  <span>Testing Note : Floral, Citrus, Sweet mild, Balance, Chocolate</span><br>
                  <span>Price : 100g. | 170.฿</span>
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
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-05.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>MYANMAR : BLUE MOUNTAIN</h5>
                  <span>Process : Natural</span><br>
                  <span>Variety : Catuai</span><br>
                  <span>Testing Note : Sugarcane, Plum winey, Banana, Clean body, Fruity sweet after test</span><br>
                  <span>Price : 100g. | 150.฿</span>
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
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-06.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>COSTA RICA : FINCA CALLE LAJAS - LAS LAJAS MICROMILL</h5>
                  <span>Process : Yellow honey</span><br>
                  <span>Variety : Caturra, Catuai</span><br>
                  <span>Testing Note : Winey, Blueberry, Cherry, Citrus fruit, Fruit acidity, Toffee, Sweetness mouthfeel</span><br>
                  <span>Price : 100g. | 280.฿</span>
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
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-07.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>ETHIOPIA : WEST GUJI CHERICHA G1</h5>
                  <span>Process : Washed</span><br>
                  <span>Variety : Heirloom</span><br>
                  <span>Testing Note : Floral, Mandarin. Apricot, Lemon, Bergamot, Complex</span><br>
                  <span>Price : 100g. | 280.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup8" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-08.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>ETHIOPIA : GUJI GELENA GESHA</h5>
                  <span>Process : Natural</span><br>
                  <span>Variety : Geisha</span><br>
                  <span>Testing Note : Refreshing, Complex taste, Intense fruit, Aroma strawberry, Apple, Lemon, Sweetness of ripe fruit</span><br>
                  <span>Price : 100g. | 350.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup9" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-09.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>MYANMAR : SHAN WASHED PROCESS</h5>
                  <span>Process : Washed</span><br>
                  <span>Variety : Catuai</span><br>
                  <span>Testing Note : Chocolate, Almond, Light acidity</span><br>
                  <span>Price : 100g. | 150.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup10" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-10.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>COLOMBIA : SUPREMO</h5>
                  <span>Process : Washed</span><br>
                  <span>Variety : Caturra, Catuai, Castillo</span><br>
                  <span>Testing Note : Berries, Wine alike, Chocolate</span><br>
                  <span>Price : 100g. | 160.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup11" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-11.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>MYANMAR : SHAN (DRY PROCESS)</h5>
                  <span>Process : Dry</span><br>
                  <span>Variety : Catuai</span><br>
                  <span>Testing Note : Smooth, Sweetness, Fruity</span><br>
                  <span>Price : 100g. | 150.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup13" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-13.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>THAILAND, CHAING RAI, MAE CHAN TAI</h5>
                  <span>Process : Anaerobic natural</span><br>
                  <span>Variety : Catimor</span><br>
                  <span>Testing Note : Guava, Pineapple, Plum, Vanilla, Milk chocolate, Banana</span><br>
                  <span>Price : 100g. | 175.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup14" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-14.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>KENYA : KIRINYAGA</h5>
                  <span>Process : Washed</span><br>
                  <span>Variety : SL 14, SL 28, RUIRU 11</span><br>
                  <span>Testing Note : Black grape, Molasses, Sugarcane, Clean blanced, Juicy, Plum, Lingering aweet after test</span><br>
                  <span>Price : 100g. | 255.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup15" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-15.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>INDONESIA : SUMATRA SESONGOT GAYO NATURAL</h5>
                  <span>Process : Natural</span><br>
                  <span>Variety : Abyssinia, Ateng, Caturra, Gayo, Timtim, Typica</span><br>
                  <span>Testing Note : Apricot, Black tea, Dried dates, Grape, Mango</span><br>
                  <span>Price : 100g. | 255.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup16" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-16.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>INDONESIA : SUMATRA SESONGOT GAYO ANAEROBIC HONEY</h5>
                  <span>Process : Anaerobic honey</span><br>
                  <span>Variety : Abyssinia, Ateng, Caturra, Gayo, Timtim, Typica</span><br>
                  <span>Testing Note : Grapefriut, Green aapple, Hibiscus, Honey, Roasted alomnd</span><br>
                  <span>Price : 100g. | 255.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup17" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-17.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>BRAZIL : SANTOS</h5>
                  <span>Process : Natural</span><br>
                  <span>Variety : Caturra, Bourbon</span><br>
                  <span>Testing Note : Nutty, Cocoa, Light acidity</span><br>
                  <span>Price : 100g. | 150.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup18" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-18.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>BRAZIL : CERRADO</h5>
                  <span>Process : Natural</span><br>
                  <span>Variety : Bourbon</span><br>
                  <span>Testing Note : Nutty, Caramel</span><br>
                  <span>Price : 100g. | 150.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup19" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-19.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>BRAZIL : FAZENDA LAGOA SAMBA</h5>
                  <span>Process : Natural</span><br>
                  <span>Variety : Catuai, Mundo novo</span><br>
                  <span>Testing Note : Cashew nut, Pleasant sweet, Round body, Complex</span><br>
                  <span>Price : 100g. | 150.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup20" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-20.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>COLOMBIA : DECAF</h5>
                  <span>Process : Swiss water</span><br>
                  <span>Testing Note : Tartfruit, Berries, Sweet, Dark chocolate</span><br>
                  <span>Price : 100g. | 200.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup21" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-21.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>LAOS : BOLAVEN JAVA</h5>
                  <span>Process : Honey</span><br>
                  <span>Variety : Java</span><br>
                  <span>Testing Note : Tropical fruit, Chocolate, Jamfruit</span><br>
                  <span>Price : 100g. | 160.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup22" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-22.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>LAOS : FAIMAI</h5>
                  <span>Process : Anaerobic natural</span><br>
                  <span>Variety : SJ133. Caigua, Java</span><br>
                  <span>Testing Note : Chocolate, Toffee, Caramel, Hint of citrus</span><br>
                  <span>Price : 100g. | 160.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup23" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-23.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>LAOS : BOLAVEN</h5>
                  <span>Process : Washed</span><br>
                  <span>Variety : Catuai, Catimor, Typica</span><br>
                  <span>Testing Note : Chocolate, Sweet mellow, Berry</span><br>
                  <span>Price : 100g. | 150.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup25" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-25.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>CHINA : YUNNAN PAO ZHANGSHA</h5>
                  <span>Process : Anaerobic natural</span><br>
                  <span>Variety : Catimor</span><br>
                  <span>Testing Note : Vanilla, Honey, Brown sugar</span><br>
                  <span>Price : 100g. | 200.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup26" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-26.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>CHINA : PU'ER</h5>
                  <span>Process : Anaerobic natural</span><br>
                  <span>Variety : Catimor</span><br>
                  <span>Testing Note : Purple grape, Guava, Red Wine</span><br>
                  <span>Price : 100g. | 240.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="popup27" class="overlay">
          <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
              <div class="row">
                <div class="col-6">
                  <img src="{{asset('template/promote/assets/img/single-origin/SOD-27.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-6">
                  <h5>COMLOMBIA : ESWADOGA</h5>
                  <span>Process :Rum barrel-age </span><br>
                  <span>Variety : Caturra</span><br>
                  <span>Testing Note : Rum cream, Chocolate, Vanilla, Ice cream</span><br>
                  <span>Price : 100g. | 400.฿</span>
                </div>
              </div>
            </div>
          </div>
        </div>
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