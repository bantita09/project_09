@extends('layouts.promote')
@section('content')
<style>
  h3 {
    font-family: "Open Sans", sans-serif;
    font-weight: 500;
  }

  p {
    font-family: "Poppins", sans-serif;
  }
  .form-control {
    margin: 15px;
  }
</style>

<footer id="footer">
  <div class="footer-top">
    <div class="container" style="margin:5%;">
      <div class="row">

        <div class="col-lg-6 col-md-6">
          <div class="footer-info">
            <div data-aos="fade-up">
              <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3873.529223612347!2d100.523545!3d13.867274000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b53f74b9325%3A0x912ba4019163fd44!2zNCDguIsuIOC4leC4tOC4p-C4suC4meC4meC4l-C5jCAyNCDguJrguLLguIfguIHguKPguLDguKrguK0g4Lit4Liz4LmA4Lig4Lit4LmA4Lih4Li34Lit4LiH4LiZ4LiZ4LiX4Lia4Li44Lij4Li1IOC4meC4meC4l-C4muC4uOC4o-C4tSAxMTAwMCDguJvguKPguLDguYDguJfguKjguYTguJfguKI!5e0!3m2!1sth!2sus!4v1660529397159!5m2!1sth!2sus" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <h3 style="font-size: 28px; font-weight:400;">Hint Coffee Roaster (Hint Khaerai)</h3>
          <p style="font-size: 18px;">
            4 Tiwanon 24 Alley, Tambon Bang Kraso, Mueang Nonthaburi District, Nonthaburi 11000<br><br>
            <b>Phone :</b> 062 198 4854, 020 446 954<br>
          </p>
          <div class="social-links mt-3">
            <a href="https://www.facebook.com/hintcoffeeroaster" class="facebook"><i class="bx bxl-facebook"></i></a>hintcoffeeroaster<br><br>
            <a href="https://www.instagram.com/hintcoffeeroaster" class="instagram"><i class="bx bxl-instagram"></i></a>hint_coffee_roaster<br><br>
          </div>
        </div>

        <div class="col-lg-6 col-md-6">
          <div id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <p style="color: white;">Contact Us</p>
              </div>

              <form action="{{ route('contact.add') }}" method="POST" role="form"  data-aos="fade-up" data-aos-delay="100">
                @csrf
                <input type="text" name="name" class="form-control" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>

                <input type="email" class="form-control" name="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" >
                <div class="validate"></div>

                <input type="text" class="form-control" name="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>

                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" ></textarea>
                  <div class="validate"></div>
                </div>

                <!-- <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message was sent. We will call back. Thank you!</div>
                </div> -->

                <div class="text-center"><button type="submit">Send</button></div>
              </form>

            </div>
          </div>
        </div><!-- End Book A Table Section -->

      </div>
    </div>
  </div>
</footer><!-- End Footer -->

@stop