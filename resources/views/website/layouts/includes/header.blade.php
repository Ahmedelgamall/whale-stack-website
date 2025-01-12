  <!--start_header  -->
  <div class="heder_top">
    <div class="container">
      <div class="first_part">
        <div class="logo_pro_div">
          <a href="index.html"><img class="logo_pro" src="{{ asset('assets/web') }}/content/images/logo.png"></a>
          <div class="toggel_header">
            <a href="#" class="btn_menu"><i class="bi bi-list"></i></a>
          </div>
        </div>
        <ul class="ul_desktop">
          <li><a class="ref_url active" href="{{ route('web.home') }}">Home</a></li>
          <li class="li_act">
            <div class="dropdown">
              <a href="#" class="ref_url" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                About Us
                <i class="bi bi-chevron-down"></i>
              </a>
              <ul class="dropdown-menu doropdowen_card">
                <li><a class="dropdown-item" href="{{ route('web.why-choose-us') }}">Why Choose Us</a></li>
                <li><a class="dropdown-item" href="{{ route('web.our-cluture') }}">Our cluture</a></li>
                <li><a class="dropdown-item" href="{{ route('web.leader-ship-team') }}">Leadership Team</a></li>
              </ul>
            </div>

          </li>
          <li><a class="ref_url" href="{{ route('web.careers') }}">Careers</a></li>
          <li><a class="ref_url" href="{{ route('web.insights') }}">Insights</a></li>


        </ul>
        <a href="{{ route('web.contact-us') }}" class="contact_us">Contact Us</a>
      </div>
    </div>
  </div>

  <!--end_header  -->
