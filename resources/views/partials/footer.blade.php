<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

          <div class="block-7">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p>We are one of the most best drug dealing company in Nigeria</p>
          </div>

        </div>
        <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
          <h3 class="footer-heading mb-4">Categories</h3>
          <ul class="list-unstyled">
            @foreach ($categories as $category)
              <li><a href="{{ route('categorypage', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
            @endforeach
          </ul>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li class="address">63 Unity St. Governor's Road, Ikotun, Lagos, Nigeria</li>
              <li class="phone"><a href="tel://08039230044">+234 803 923 0044</a></li>
              <li class="phone"><a href="https://api.whatsapp.com/send?phone=08023840501">Whatsapp - 0909 494 1921</a></li>
              <li class="email">amios1@yahoo.com</li>
            </ul>
          </div>


        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
            with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"
              class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>

      </div>
    </div>
  </footer>