<!-- Top Bar -->
  <section id="top-bar" style="background-color: black; color: white;" class="p-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4" style="font-size: 30px">
          <i class="fa fa-phone"></i> <b><a href="tel://08039230044" style="list-style-type: none; color: white">08039230044</a></b>
        </div>
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
          <div class="social text-right">
            <b style="font-size: 30px">
              <a href="https://api.whatsapp.com/send?phone=08023840501" style="list-style-type: none; color: white">
                <i class="fa fa-whatsapp"></i> <span style="font-size: 30px">Whatsapp Us</span> <!-- <span style="font-size: 20px">|</span> -->
              </a>
              <!-- <a href="#" style="list-style-type: none; color: white">
                <i class="fa fa-facebook"></i> <span style="font-size: 20px">|</span>
              </a>
              <a href="#" style="list-style-type: none; color: white">
                <i class="fa fa-instagram"></i> 
              </a> -->
            </b>
          </div>
        </div>
      </div>
    </div>
  </section>

<div class="site-navbar py-2">

    <div class="search-wrap">
      <div class="container">
        <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
        <form action="/results" method="get">
          <input type="text" class="form-control" name="query" placeholder="Search keyword and hit enter...">
        </form>
      </div>
    </div>

    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <div class="logo">
          <div class="site-logo">
            <a href="{{ route('index') }}" class="js-logo-clone">NaturesGarde</a>
          </div>
        </div>
        <div class="main-nav d-none d-lg-block">
          <nav class="site-navigation text-right text-md-center" role="navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li class="active"><a href="{{ route('index') }}">Home</a></li>
              <li><a href="{{ route('store') }}">Store</a></li>
              <li class="has-children">
                <a href="#">Category</a>
                <ul class="dropdown">
                  @foreach ($categories as $category)
                    <li><a href="{{ route('categorypage', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
                  @endforeach
                  
                </ul>
              </li>
              <li><a href="{{ route('about') }}">About</a></li>
              <li><a href="/contact-us">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="icons">
          <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
          <a href="{{ route('cart') }}" class="icons-btn d-inline-block bag">
            <span class="icon-shopping-bag"></span>
            <span class="number">{{ Cart::content()->count() }}</span>
          </a>
          <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
              class="icon-menu"></span></a>
        </div>
      </div>
    </div>
  </div>