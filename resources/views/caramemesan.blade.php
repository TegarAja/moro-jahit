<x-app-layout>
    <head>
        <title>Moro Jahit</title>
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .measurement-box img {
                width: 100%; /* Menetapkan lebar gambar menjadi maksimum */
                max-width: 1200px; /* Menetapkan lebar maksimum gambar */
                height: auto; /* Menjaga rasio aspek gambar */
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="heading_container heading_center">
                <h1>Cara Memesan Jahitan:</h1>
            </div>
            <section class="cara_mengukur_section layout_padding">
                <div class="row">
                    <div class="col-12 measurement-box">
                        <h5>1. Pilih Model Yang diinginkan pada halaman Buat Pesanan</h5>
                        <img src="{{ asset('tutor/1.png') }}" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 measurement-box">
                        <h5>2. Isi form pemesanan dengan baik dan benar!</h5>
                        <img src="{{ asset('tutor/2.png') }}" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 measurement-box">
                        <h5>3. Jika form pesanan sudah disubmit maka pesanan anda akan muncul pada halaman Daftar Pesan</h5>
                        <img src="{{ asset('tutor/3.png') }}" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 measurement-box">
                        <h5>4. Cek kembali pesanan anda didalam Detail Pesanan.</h5>
                        <img src="{{ asset('tutor/4.png') }}" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 measurement-box">
                        <h5>5. Jika dirasa pesanan sudah benar selanjutnya adalah melakukan transfer sesuai dengan nomer rekening pembayaran di atas dan upload bukti pembayaran di tempat yang disediakan.</h5>
                        <img src="{{ asset('tutor/5.png') }}" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 measurement-box">
                        <h5>6. Ini adalah tampilan setelah berhasil mengupload bukti pembayaran</h5>
                        <img src="{{ asset('tutor/6.png') }}" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 measurement-box">
                        <h5>7. Menunggu admin memproses pesanan anda, dan inilah tampilan saat pesanan anda sudah diterima oleh admin.</h5>
                        <img src="{{ asset('tutor/7.png') }}" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 measurement-box">
                        <h5>8. Pada kolom status pemesanan akan selalu diupdate oleh admin sesuai dengan pesanan yang sedang dibuat. dan jika pesanan selesai dibuat maka sattus pesanan kan menjadi seperti pada gambar ini.</h5>
                        <img src="{{ asset('tutor/8.png') }}" alt="">
                        <h5>Sekarang pesanan anda sudah selesai dan siap untuk diambil!</h5>
                    </div>
                </div>

            </section>
        </div>
    </body>
</x-app-layout>
