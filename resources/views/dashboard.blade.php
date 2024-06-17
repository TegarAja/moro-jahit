<x-app-layout>
    <!DOCTYPE html>
    <html>

    <head>

        <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{asset('/admincss/img/favicon.ico')}}">
    <style>
        .modal-dialog {
          display: flex;
          align-items: center;
          min-height: calc(100% - 3.5rem);
          justify-content: center;
        }
        .modal-body {
            color: black
        }
        .modal-title {
            color: black
        }
        .carousel-img {
    max-width: 30%;  /* Ensures the image width fits within the container */
    max-height: 400px;  /* Adjust as needed for uniform height */
    object-fit: cover;  /* Ensures the image covers the specified width and height */
    display: block;
    margin: auto;  /* Center align images horizontally */
}

      </style>

    <title>
      Moro Jahit
    </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />


    </head>

    <body>
      <div class="hero_area">
        <!-- slider section -->

        <section class="slider_section">
            <div class="slider_container">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-7">
                          <div class="detail-box">
                            <h1>
                              Selamat Datang di <br>
                              MORO JAHIT
                            </h1>
                            <p>
                                Apakah Anda mencari layanan jahit berkualitas tanpa harus keluar rumah? MORO JAHIT hadir untuk memenuhi kebutuhan Anda! Berdomisili di Rembang, Jawa Tengah, kami menyediakan jasa pemesanan jahitan secara online dengan proses yang mudah dan cepat.
                            </p>
                            <p>
                                MORO JAHIT, kami mengutamakan kepuasan pelanggan dengan menyediakan berbagai layanan jahit dengan berbagai model dan bahan yang bervariasi. MOROJAHIT memiliki penjahit berpengalaman yang siap membuat pesanan jahitanmu dengan hasil yang rapi dan berkualitas.
                            </p>


                            <div class="container">
                                <!-- Button to trigger modal -->
                                <a class="btn btn-primary" href="{{('buatpesan')}}">
                                  Pesan Sekarang!
                                </a>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Notifikasi</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Untuk Melakukan Pesanan Silahkan Login/Register Terlebih Dahulu!</p>
                                        </div>
                                        <div class="modal-footer">
                                          <a href="{{url('/login')}}">Login/Register</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </div>
                        </div>
                        <div class="col-md-5 ">
                          <div class="img-box">
                            <img style="width:120%" src="images/image3.jpeg" alt="" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </section>


        <!-- end slider section -->
      </div>
      <!-- end hero area -->

 <!-- client section -->
 <section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Hasil Busana Yang Pernah Dibuat:
            </h2>
        </div>
    </div>
    <div class="container px-0">
        <div id="customCarousel2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('hasil/1.png') }}" class="d-block w-100 carousel-img" alt="Busana 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('hasil/2.png') }}" class="d-block w-100 carousel-img" alt="Busana 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('hasil/3.png') }}" class="d-block w-100 carousel-img" alt="Busana 3">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('hasil/4.png') }}" class="d-block w-100 carousel-img" alt="Busana 4">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('hasil/5.png') }}" class="d-block w-100 carousel-img" alt="Busana 5">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('hasil/6.png') }}" class="d-block w-100 carousel-img" alt="Busana 6">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('hasil/7.png') }}" class="d-block w-100 carousel-img" alt="Busana 7">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('hasil/8.png') }}" class="d-block w-100 carousel-img" alt="Busana 8">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('hasil/9.png') }}" class="d-block w-100 carousel-img" alt="Busana 9">
                </div>
            </div>
            <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>




        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->




      <!-- info section -->

      <section class="info_section layout_padding2-top">
        <div class="social_container text-center mb-4">
            <div class="social_box d-inline-block">
                <a href="https://web.facebook.com/profile.php?id=61561015918529" class="mr-2">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com/MoroJahit" class="mr-2">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/moro_jahit" class="mr-2">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCtSBAgXjzwSEiuP7HnpViVg">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="info_container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <h6>TENTANG KAMI</h6>
                        <p>MORO JAHIT adalah penyedia layanan jahit berkualitas yang berdedikasi untuk memberikan hasil terbaik bagi pelanggan kami. Kami menyediakan jasa jahitan dengan berbagai jenis model dan bahan yang bisa anda pesan.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <h6>BANTUAN</h6>
                        <p>Jika Anda membutuhkan bantuan atau memiliki pertanyaan, jangan ragu untuk menghubungi kami. Tim kami siap membantu Anda pada kebutuhan jahit Anda.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <h6>KONTAK KAMI</h6>
                        <div class="info_link-box">
                            <p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                Pondok Pesona G2 No.2, Sawah, Ngotet, Kec. Rembang, Kabupaten Rembang, Jawa Tengah 59219
                            </p>
                            <p>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                +62 85939723381
                            </p>
                            <p>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                morojahit@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer section -->
        <footer class="footer_section bg-light py-3">
            <div class="container text-center">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="">Moro Jahit</a>
                </p>
            </div>
        </footer>
        <!-- footer section -->
    </section>

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>


      <!-- end info section -->
    </body>

    </html>


</x-app-layout>

