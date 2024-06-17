<x-app-layout>
    <head>
        <title>Moro Jahit</title>
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1 {
                font-size: 36px; /* Adjust the size as needed */
            }
            video {
                width: 100%;
                height: auto;
            }
            .measurement-box {
                margin-bottom: 20px; /* Adds space between videos */
            }
            .heading_container {
                padding-top: 60px
            }
        </style>
    </head>
    <body>
        <div class="container">
                <div class="heading_container heading_center">
                    <h1>Cara Mengukur Badan:</h1>
                </div>
        <section class="cara_mengukur_section layout_padding">
                <div class="row">
                    <!-- Video Pengukuran 1 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Lingkar Badan</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Video Pengukuran 2 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Lingkar Pinggang</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/2.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="row">
                    <!-- Video Pengukuran 3 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Lingkar Panggul</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/3.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Video Pengukuran 4 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Lebar Muka</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/4.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="row">
                    <!-- Video Pengukuran 5 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Lebar Punggung</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/5.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Video Pengukuran 6 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Panjang Bahu</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/6.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="row">
                    <!-- Video Pengukuran 7 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Lingkar Kerung Lengan</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/7.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Video Pengukuran 8 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Panjang Lengan Pendek</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/8.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="row">
                    <!-- Video Pengukuran 9 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Panjang Lengan Panjang</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/9.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Video Pengukuran 10 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Panjang Lengan Atas</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/10.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="row">
                    <!-- Video Pengukuran 11 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Panjang Lengan Bawah</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/11.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Video Pengukuran 12 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Lingkar Pesak</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/12.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="row">
                    <!-- Video Pengukuran 13 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Lingkar Paha</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/13.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Video Pengukuran 14 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Lingkar Lutut</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/14.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="row">
                    <!-- Video Pengukuran 15 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Lingkar Kaki</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/15.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Video Pengukuran 16 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Panjang Model</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/16.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="row">
                    <!-- Video Pengukuran 17 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Panjang Dress</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/17.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Video Pengukuran 18 -->
                    <div class="col-md-6 measurement-box">
                        <h5>Panjang Celana/Rok</h5>
                        <video controls autoplay loop>
                            <source src="{{ asset('ukuran/18.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</x-app-layout>
