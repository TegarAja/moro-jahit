<!DOCTYPE html>
<html>

<head>

    @include('home.css')

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/testimoni')}}">
              Testimonial
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://wa.me/6285939723381">Kontak Admin</a>
          </li>
        </ul>
        <div class="user_option">
          <a href="{{url('/login')}}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>
              Login
            </span>
          </a>

          <a href="{{url('/register')}}">
            <i class="fa fa-vcard" aria-hidden="true"></i>
            <span>
              Register
            </span>
          </a>
          </form>
        </div>
      </div>
    </nav>
  </header>

    <!-- end header section -->
    <!-- slider section -->

    @include('home.slider')

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  @include('home.product')

  <!-- end shop section -->

  <!-- contact section -->

  @include('home.contact')

  <!-- end contact section -->

  <!-- info section -->

  @include('home.footer')

  <!-- end info section -->
</body>

</html>
