@extends('layouts.promote')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-8">
        <h1>Welcome to <span>Hint Coffee Roaster</span></h1>
      </div>
    </div>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="assets/img/home-1.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>เรื่องน่ารู้เกี่ยวกับกาแฟ</h3>
          <p>
            กาแฟ (Coffee) เป็นเครื่องดื่มที่ทำจากเมล็ดกาแฟคั่วซึ่งได้จากต้นกาแฟ นิยมดื่มร้อนๆ แต่สามารถดื่มแบบเย็นได้ด้วย บางครั้งนิยมใส่นมหรือครีมลงในกาแฟด้วย ในกาแฟหนึ่งถ้วยมีคาเฟอีนอยู่ประมาณ 80-140 มิลลิกรัม กาแฟเป็นเครื่องดื่มที่ได้รับความนิยมมากที่สุดในโลกชนิดหนึ่งเช่นเดียวกับชาและน้ำ นอกจากนี้กาแฟยังเป็นผลผลิตทางการเกษตรที่มีการส่งออกมากเป็นอันดับที่หกของโลก
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= New Product Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>New</h2>
        <p>Available Now</p>
      </div>

      <div class="row">
        <center>
          <div class="col-lg-9 mt-9 mt-lg-9">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/n-pd-1.jpg" class="card-img-top" alt="...">
              <h4> เมล็ดกาแฟใหม่จาก Hint Coffee Roaster ประจำเดือนกรกฎาคม</h4>
            </div>
          </div>
        </center>
      </div>

    </div>
  </section><!-- End Why Us Section -->


  <!-- ====== Product ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Product</h2>
        <p>House Blend</p>
        </p>
      </div>

      <div class="row">

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/house-blend/HB-01.png" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/house-blend/HB-02.png" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/house-blend/HB-03.png" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/house-blend/HB-04.png" class="card-img-top" alt="">
          </div>
        </div>

      </div>


      <div class="section-title">
        <br>
        <p>Single Origin</p>
        </p>
      </div>

      <div class="row">

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/single-origin/SO-01.png" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/single-origin/SO-02.png" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/single-origin/SO-03.png" class="card-img-top" alt="">
          </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/single-origin/SO-04.png" class="card-img-top" alt="">
          </div>
        </div>

      </div>

    </div>
  </section>


</main><!-- End #main -->


@stop