<x-app-layout>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
                <link rel="shortcut icon" href="{{asset('/admincss/img/favicon.ico')}}">

        {{-- <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"> --}}
        <style>
            .modal-dialog {
                display: flex;
                align-items: center;
                min-height: calc(100% - 3.5rem);
                justify-content: center;
            }
            .modal-body {
                color: black;
            }
            .modal-title {
                color: black;
            }
            .img-thumbnail {
    width: 100%;
    height: auto;
    cursor: pointer;
    margin-bottom: 10px;

}
.img-thumbnail input[type="radio"] {
    display: none;
}
.img-thumbnail input[type="radio"]:checked + img {
    border: 2px solid #007bff;
}
table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        </style>

        <title>
            Moro Jahit
        </title>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
        <link href="{{asset('css/style.css')}}" rel="stylesheet" />
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />
    </head>

    <body>
        <div class="hero_area">
            <section class="shop_section layout_padding">
                <div class="container">
                    <div class="heading_container heading_center">
                        <h4>
                            Pilih Model Yang Ingin Anda Pesan!
                        </h4>
                    </div>
                    <div class="row">
                        <!-- Baris Pertama -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="box">
                                <a href="" data-toggle="modal" data-target="#exampleModal">
                                    <div class="img-box">
                                        <img src="images/p1.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h6>Blouse</h6>
                                    </div>
                                    <div class="new">
                                        <span>Order</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="box">
                                <a href="" data-toggle="modal" data-target="#exampleModal">
                                    <div class="img-box">
                                        <img src="images/p2.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h6>Dress</h6>
                                    </div>
                                    <div class="new">
                                        <span>Order</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="box">
                                <a href="" data-toggle="modal" data-target="#exampleModal">
                                    <div class="img-box">
                                        <img src="images/p3.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h6>Celana</h6>
                                    </div>
                                    <div class="new">
                                        <span>Order</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Baris Kedua -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="box">
                                <a href="" data-toggle="modal" data-target="#exampleModal">
                                    <div class="img-box">
                                        <img src="images/p4.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h6>Kebaya</h6>
                                    </div>
                                    <div class="new">
                                        <span>Order</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="box">
                                <a href="" data-toggle="modal" data-target="#exampleModal">
                                    <div class="img-box">
                                        <img src="images/p5.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h6>Kemeja</h6>
                                    </div>
                                    <div class="new">
                                        <span>Order</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="box">
                                <a href="" data-toggle="modal" data-target="#exampleModal">
                                    <div class="img-box">
                                        <img src="images/p6.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h6>Rok</h6>
                                    </div>
                                    <div class="new">
                                        <span>Order</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="info_section layout_padding2-top">
                <div class="social_container text-center mb-4">
                    <div class="social_box d-inline-block">
                        <a href="https://www.facebook.com/MoroJahit" class="mr-2">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/MoroJahit" class="mr-2">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/MoroJahit" class="mr-2">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.youtube.com/MoroJahit">
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
                                        dewategar74@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer_section bg-light py-3">
                    <div class="container text-center">
                        <p>
                            &copy; <span id="displayYear"></span> All Rights Reserved By
                            <a href="">Moro Jahit</a>
                        </p>
                    </div>
                </footer>
            </section>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="orderForm" method="POST" action="{{ route('orders.store') }}" enctype="multipart/form-data">
                                @csrf


                                <div class="form-group">
                                    <label for="modelName">Model</label>
                                    <input type="text" class="form-control" id="modelName" name="modelName" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="sleeveModel">Model Lengan / Model Celana</label>
                                    <select class="form-control" id="sleeveModel" name="sleeveModel" required>
                                        <option value="" disabled selected>Pilih Model Lengan / Model Celana</option>
                                        <option value="Panjang">Panjang</option>
                                        <option value="Pendek">Pendek</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Harap pilih model lengan.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="customerName">Nama Pemesan</label>
                                    <input type="text" class="form-control" id="customerName" name="customerName" required>
                                </div>
                                <div class="form-group">
                                    <label for="customerPhone">Nomor WhatsApp</label>
                                    <input type="tel" class="form-control" id="customerPhone" name="customerPhone" pattern="\d*" required>
                                </div>
                                <div class="form-group">
                                    <label for="customerAddress">Alamat</label>
                                    <textarea class="form-control" id="customerAddress" name="customerAddress" rows="3" required></textarea>
                                </div>


                                <div class="form-group">
                                    <label for="material">Bahan</label>
                                    <select class="form-control" id="material" name="material" required>
                                        <option value="" disabled selected>Pilih Bahan</option>
                                        <option value="Katun">Katun</option>
                                        <option value="Satin">Satin</option>
                                        <option value="Brokat">Brokat</option>
                                        <option value="Batik">Batik</option>
                                        <option value="Drill">Drill</option>
                                    </select>
                                </div>


                                <div id="motifForm" style="display: none;">
                                    <label for="motif">Pilih Motif atau Warna</label>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>
                                                <input type="radio" name="motif" value="motif1" data-image-src="images/motif1.jpg">
                                                <p>Hijau</p>
                                                <img src="images/motif1.jpg" class="img-thumbnail">
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>
                                                <input type="radio" name="motif" value="motif2" data-image-src="images/motif2.jpg">
                                                <p>Merah</p>
                                                <img src="images/motif2.jpg" class="img-thumbnail">
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>
                                                <input type="radio" name="motif" value="motif3" data-image-src="images/motif3.jpg">
                                                <p>Ungu</p>
                                                <img src="images/motif3.jpg" class="img-thumbnail">
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>
                                                <input type="radio" name="motif" value="motif4" data-image-src="images/Motif4.jpg">
                                                <p>Navy</p>
                                                <img src="images/motif4.jpg" class="img-thumbnail">
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>
                                                <input type="radio" name="motif" value="motif5" data-image-src="images/Motif5.jpg">
                                                <p>Putih</p>
                                                <img src="images/motif5.jpg" class="img-thumbnail">
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>
                                                <input type="radio" name="motif" value="motif6" data-image-src="images/Motif6.jpg">
                                                <p>Hitam</p>
                                                <img src="images/motif6.jpg" class="img-thumbnail">
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>
                                                <input type="radio" name="motif" value="motif7" data-image-src="images/Motif7.jpg">
                                                <p>Kuning</p>
                                                <img src="images/motif7.jpg" class="img-thumbnail">
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>
                                                <input type="radio" name="motif" value="motif8" data-image-src="images/Motif8.jpg">
                                                <p>Maron</p>
                                                <img src="images/motif8.jpg" class="img-thumbnail">
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>
                                                <input type="radio" name="motif" value="motif9" data-image-src="images/Motif9.jpg">
                                                <p>Cream</p>
                                                <img src="images/motif9.jpg" class="img-thumbnail">
                                            </label>
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group" id="batikOptions" style="display: none;">
                                    <label for="batikPattern">Pilih Motif khusus Batik</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>
                                                <input type="radio" name="batikPattern" value="motif10" data-image-src="images/Motif10.jpg">
                                                <img src="images/motif10.jpg" alt="Motif10" class="img-fluid">
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="radio" name="batikPattern" value="motif11" data-image-src="images/Motif11.jpg">
                                                <img src="images/motif11.jpg" alt="Motif11" class="img-fluid">
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="radio" name="batikPattern" value="motif12" data-image-src="images/Motif12.jpg">
                                                <img src="images/motif12.jpg" alt="Motif12" class="img-fluid">
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="radio" name="batikPattern" value="motif13" data-image-src="images/Motif13.jpg">
                                                <img src="images/motif13.jpg" alt="Motif13" class="img-fluid">
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="radio" name="batikPattern" value="motif14" data-image-src="images/Motif14.jpg">
                                                <img src="images/motif14.jpg" alt="Motif14" class="img-fluid">
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="radio" name="batikPattern" value="motif15" data-image-src="images/Motif15.jpg">
                                                <img src="images/motif15.jpg" alt="Motif15" class="img-fluid">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="selectedImagePath" id="selectedImagePath">






                                <div class="form-group">
                                    <label for="sizeType">Jenis Ukuran</label>
                                    <select class="form-control" id="sizeType" name="sizeType" required>
                                        <option value="" disabled selected>Pilih Jenis Ukuran</option>
                                        <option value="Default">Default</option>
                                        <option value="Custom">Custom</option>
                                    </select>
                                </div>

                                <!-- Default Size Details -->
                                <div id="defaultSizeDetails" style="display: none;">
                                    <div class="form-group">
                                        <h4>Ukuran Blouse dan Kemeja</h4>
    <table>
        <thead>
            <tr>
                <th>Ukuran</th>
                <th>Lingkar Dada (cm)</th>
                <th>Lingkar Pinggang (cm)</th>
                <th>Lingkar Pinggul (cm)</th>
                <th>Panjang Baju (cm)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>S</td>
                <td>84-88</td>
                <td>66-70</td>
                <td>90-94</td>
                <td>60-62</td>
            </tr>
            <tr>
                <td>M</td>
                <td>88-92</td>
                <td>70-74</td>
                <td>94-98</td>
                <td>62-64</td>
            </tr>
            <tr>
                <td>L</td>
                <td>92-96</td>
                <td>74-78</td>
                <td>98-102</td>
                <td>64-66</td>
            </tr>
            <tr>
                <td>XL</td>
                <td>96-100</td>
                <td>78-82</td>
                <td>102-106</td>
                <td>66-68</td>
            </tr>
        </tbody>
    </table>

    <h4>Ukuran Dress</h4>
    <table>
        <thead>
            <tr>
                <th>Ukuran</th>
                <th>Lingkar Dada (cm)</th>
                <th>Lingkar Pinggang (cm)</th>
                <th>Lingkar Pinggul (cm)</th>
                <th>Panjang Dress (cm)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>S</td>
                <td>84-88</td>
                <td>66-70</td>
                <td>90-94</td>
                <td>85-87</td>
            </tr>
            <tr>
                <td>M</td>
                <td>88-92</td>
                <td>70-74</td>
                <td>94-98</td>
                <td>87-89</td>
            </tr>
            <tr>
                <td>L</td>
                <td>92-96</td>
                <td>74-78</td>
                <td>98-102</td>
                <td>89-91</td>
            </tr>
            <tr>
                <td>XL</td>
                <td>96-100</td>
                <td>78-82</td>
                <td>102-106</td>
                <td>91-93</td>
            </tr>
        </tbody>
    </table>

    <h4>Ukuran Celana</h4>
    <table>
        <thead>
            <tr>
                <th>Ukuran</th>
                <th>Lingkar Pinggang (cm)</th>
                <th>Lingkar Pinggul (cm)</th>
                <th>Panjang Celana (cm)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>S</td>
                <td>66-70</td>
                <td>90-94</td>
                <td>95-97</td>
            </tr>
            <tr>
                <td>M</td>
                <td>70-74</td>
                <td>94-98</td>
                <td>97-99</td>
            </tr>
            <tr>
                <td>L</td>
                <td>74-78</td>
                <td>98-102</td>
                <td>99-101</td>
            </tr>
            <tr>
                <td>XL</td>
                <td>78-82</td>
                <td>102-106</td>
                <td>101-103</td>
            </tr>
        </tbody>
    </table>

    <h4>Ukuran Kebaya</h4>
    <table>
        <thead>
            <tr>
                <th>Ukuran</th>
                <th>Lingkar Dada (cm)</th>
                <th>Lingkar Pinggang (cm)</th>
                <th>Lingkar Pinggul (cm)</th>
                <th>Panjang Baju (cm)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>S</td>
                <td>84-88</td>
                <td>66-70</td>
                <td>90-94</td>
                <td>60-62</td>
            </tr>
            <tr>
                <td>M</td>
                <td>88-92</td>
                <td>70-74</td>
                <td>94-98</td>
                <td>62-64</td>
            </tr>
            <tr>
                <td>L</td>
                <td>92-96</td>
                <td>74-78</td>
                <td>98-102</td>
                <td>64-66</td>
            </tr>
            <tr>
                <td>XL</td>
                <td>96-100</td>
                <td>78-82</td>
                <td>102-106</td>
                <td>66-68</td>
            </tr>
        </tbody>
    </table>

    <h4>Ukuran Rok</h4>
    <table>
        <thead>
            <tr>
                <th>Ukuran</th>
                <th>Lingkar Pinggang (cm)</th>
                <th>Lingkar Pinggul (cm)</th>
                <th>Panjang Rok (cm)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>S</td>
                <td>66-70</td>
                <td>90-94</td>
                <td>60-62</td>
            </tr>
            <tr>
                <td>M</td>
                <td>70-74</td>
                <td>94-98</td>
                <td>62-64</td>
            </tr>
            <tr>
                <td>L</td>
                <td>74-78</td>
                <td>98-102</td>
                <td>64-66</td>
            </tr>
            <tr>
                <td>XL</td>
                <td>78-82</td>
                <td>102-106</td>
                <td>66-68</td>
            </tr>
        </tbody>
    </table>
                                    </div>
                                    <div class="form-group">
                                        <label for="size">Ukuran</label>
                                        <select class="form-control" id="size" name="size" >
                                            <option value="" disabled selected>Pilih Ukuran</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="additionalDescriptionDefault">Deskripsi tambahan mengenai model (opsional)</label>
                                        <textarea class="form-control" id="additionalDescriptionDefault" name="additionalDescriptionDefault" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="imageUpload">Referensi Model (opsional) *maksimal 3 gambar</label>
                                        <input type="file" class="form-control" id="imageUpload" name="imageUpload[]" accept="image/*" multiple>
                                        <div class="invalid-feedback">
                                            Harap unggah gambar.
                                        </div>
                                    </div>
                                </div>


                                <!-- Custom Size Details -->
                                <div id="customSizeDetails" style="display: none;">
                                        <div class="form-group">
                                            <label for="chestSize">Lingkar Badan</label>
                                            <input type="number" class="form-control" id="chestSize" name="chestSize" >
                                        </div>
                                        <div class="form-group">
                                            <label for="waistSizeCustom">Lingkar Pinggang</label>
                                            <input type="number" class="form-control" id="waistSizeCustom" name="waistSizeCustom">
                                        </div>
                                        <div class="form-group">
                                            <label for="hipSizeCustom">Lingkar Panggul</label>
                                            <input type="number" class="form-control" id="hipSizeCustom" name="hipSizeCustom">
                                        </div>
                                        <div class="form-group">
                                            <label for="frontWidth">Lebar Muka</label>
                                            <input type="number" class="form-control" id="frontWidth" name="frontWidth">
                                        </div>
                                        <div class="form-group">
                                            <label for="backWidth">Lebar Punggung</label>
                                            <input type="number" class="form-control" id="backWidth" name="backWidth">
                                        </div>
                                        <div class="form-group">
                                            <label for="shoulderLength">Panjang Bahu</label>
                                            <input type="number" class="form-control" id="shoulderLength" name="shoulderLength">
                                        </div>
                                        <div class="form-group">
                                            <label for="armholeSize">Lingkar Kerung Lengan</label>
                                            <input type="number" class="form-control" id="armholeSize" name="armholeSize">
                                        </div>
                                        <div class="form-group">
                                            <label for="sleeveLength">Panjang Lengan</label>
                                            <input type="number" class="form-control" id="sleeveLength" name="sleeveLength">
                                        </div>
                                        <div class="form-group">
                                            <label for="lowerArmSize">Lingkar Lengan Bawah</label>
                                            <input type="number" class="form-control" id="lowerArmSize" name="lowerArmSize">
                                        </div>
                                        <div class="form-group">
                                            <label for="modelLengthCustom" id="modelLengthLabel">Panjang</label>
                                            <input type="number" class="form-control" id="modelLengthCustom" name="modelLengthCustom">
                                        </div>

                                        <div class="form-group">
                                            <label for="additionalDescriptionCustom">Deskripsi tambahan mengenai model (opsional)</label>
                                            <textarea class="form-control" id="additionalDescriptionCustom" name="additionalDescriptionCustom" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="imageUpload">Referensi Model (opsional) *maksimal 3 gambar</label>
                                            <input type="file" class="form-control" id="imageUpload" name="imageUpload[]" accept="image/*" multiple>
                                            <div class="invalid-feedback">
                                                Harap unggah gambar.
                                            </div>
                                        </div>

                                </div>


                                {{-- untuk ukuran custom rok dan celana --}}
                                <div id="customSizeDetailsPants" style="display: none;">
                                    <div class="form-group">
                                        <label for="waistSize">Lingkar Pinggang</label>
                                        <input type="number" class="form-control" id="waistSize" name="waistSize">
                                    </div>
                                    <div class="form-group">
                                        <label for="hipSize">Lingkar Panggul</label>
                                        <input type="number" class="form-control" id="hipSize" name="hipSize">
                                    </div>
                                    <div class="form-group">
                                        <label for="crotchSize">Lingkar Pesak</label>
                                        <input type="number" class="form-control" id="crotchSize" name="crotchSize">
                                    </div>
                                    <div class="form-group">
                                        <label for="thighSize">Lingkar Paha</label>
                                        <input type="number" class="form-control" id="thighSize" name="thighSize">
                                    </div>
                                    <div class="form-group">
                                        <label for="kneeSize">Lingkar Lutut</label>
                                        <input type="number" class="form-control" id="kneeSize" name="kneeSize">
                                    </div>
                                    <div class="form-group">
                                        <label for="ankleSize">Lingkar Kaki</label>
                                        <input type="number" class="form-control" id="ankleSize" name="ankleSize">
                                    </div>
                                    <div class="form-group">
                                        <label for="modelLength" id="modelLengthLabelPants">Panjang</label>
                                        <input type="number" class="form-control" id="modelLength" name="modelLength">
                                    </div>







                                <div class="form-group">
                                    <label for="additionalDescription">Deskripsi tambahan mengenai model (opsional)</label>
                                    <textarea class="form-control" id="additionalDescription" name="additionalDescription" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="imageUpload">Referensi Model (opsional) *maksimal 3 gambar</label>
                                    <input type="file" class="form-control" id="imageUpload" name="imageUpload[]" accept="image/*" multiple>
                                    <div class="invalid-feedback">
                                        Harap unggah gambar.
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>

                            </form>

                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script>
  document.addEventListener('DOMContentLoaded', (event) => {
    const modelLinks = document.querySelectorAll('.box a');
        modelLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const modelName = link.querySelector('.detail-box h6').innerText;
            document.getElementById('modelName').value = modelName;
            document.getElementById('modelLengthLabel').innerText = 'Panjang (' + modelName + ')';
            document.getElementById('modelLengthLabelPants').innerText = 'Panjang (' + modelName + ')';
        });
    });



    document.getElementById('sizeType').addEventListener('change', function() {
        const modelName = document.getElementById('modelName').value.toLowerCase();
        if (this.value === 'Default') {
            document.getElementById('defaultSizeDetails').style.display = 'block';
            document.getElementById('customSizeDetails').style.display = 'none';
            document.getElementById('customSizeDetailsPants').style.display = 'none';
        } else if (this.value === 'Custom') {
            document.getElementById('defaultSizeDetails').style.display = 'none';
            if (modelName.includes('rok')) {
                document.getElementById('customSizeDetails').style.display = 'block';
                document.getElementById('customSizeDetailsPants').style.display = 'none';
            } else if (modelName.includes('celana')) {
                document.getElementById('customSizeDetails').style.display = 'none';
                document.getElementById('customSizeDetailsPants').style.display = 'block';
            }
        }
    });
});

function submitOrder() {
    const form = document.getElementById('orderForm');
    if (form.checkValidity()) {
        form.submit();
    } else {
        form.reportValidity();
    }
}

function validateForm() {
    var select = document.getElementById('sleeveModel');
    if (select.checkValidity() === false) {
        select.classList.add('is-invalid');
    } else {
        select.classList.remove('is-invalid');
        alert('Form submitted successfully!');
    }
}


document.addEventListener('DOMContentLoaded', (event) => {
    const modelLinks = document.querySelectorAll('.box a');
    modelLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const modelName = link.querySelector('.detail-box h6').innerText;
            document.getElementById('modelName').value = modelName;
            document.getElementById('modelLengthLabel').innerText = 'Panjang (' + modelName + ')';
            updateCustomSizeDetails(modelName);
        });
    });

    document.addEventListener('DOMContentLoaded', (event) => {
    const modelLinks = document.querySelectorAll('.box a');
    modelLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const modelName = link.querySelector('.detail-box h6').innerText;
            document.getElementById('modelName').value = modelName;
            document.getElementById('modelLengthLabel').innerText = 'Panjang (' + modelName + ')';
        });
    });
});

    document.getElementById('sizeType').addEventListener('change', function() {
        updateCustomSizeDetails(document.getElementById('modelName').value);
    });
});

function updateCustomSizeDetails(modelName) {
    modelName = modelName.toLowerCase();
    if (document.getElementById('sizeType').value === 'Default') {
        document.getElementById('defaultSizeDetails').style.display = 'block';
        document.getElementById('customSizeDetails').style.display = 'none';
        document.getElementById('customSizeDetailsPants').style.display = 'none';
    } else if (document.getElementById('sizeType').value === 'Custom') {
        document.getElementById('defaultSizeDetails').style.display = 'none';
        if (modelName.includes('rok') || modelName.includes('celana')) {
            document.getElementById('customSizeDetails').style.display = 'none';
            document.getElementById('customSizeDetailsPants').style.display = 'block';
        } else {
            document.getElementById('customSizeDetails').style.display = 'block';
            document.getElementById('customSizeDetailsPants').style.display = 'none';
        }
    }
}


document.getElementById('imageUpload').onchange = function () {
    if(this.files.length > 100) {
        alert('Anda hanya dapat mengunggah maksimal 3 gambar.');
        this.value = '';
    };
};


document.getElementById('material').addEventListener('change', function() {
    const material = this.value;
    const batikOptions = document.getElementById('batikOptions');
        document.addEventListener('DOMContentLoaded', function () {
            var materialSelect = document.getElementById('material');
            var motifForm = document.getElementById('motifForm');

            materialSelect.addEventListener('change', function () {
                // Cek jika 'Batik' dipilih
                if (this.value === 'Batik') {
                    motifForm.style.display = 'block';
                } else {
                    motifForm.style.display = 'none';
                }
            });
        });

        if (material === 'Batik') {
            batikOptions.style.display = 'block';
            motifForm.style.display = 'none';
        } else {
            batikOptions.style.display = 'none';
            motifForm.style.display = 'block';

        }
    });


    document.addEventListener('DOMContentLoaded', function () {
    var radios = document.querySelectorAll('input[type=radio][name=motif]');
    var imagePathInput = document.getElementById('selectedImagePath');
    const motifRadios = document.querySelectorAll('input[name="motif"], input[name="batikPattern"]');
    const selectedImagePathInput = document.getElementById('selectedImagePath');

    radios.forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (this.checked) {
                imagePathInput.value = this.getAttribute('data-image-src');
            }
        });
    });
});
document.querySelectorAll('input[name="batikPattern"]').forEach(input => {
    input.addEventListener('change', function() {
        document.getElementById('selectedImagePath').value = this.getAttribute('data-image-src');
    });
});






            </script>

            <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <script src="{{asset('js/custom.js')}}"></script>
        </div>
    </body>
    </html>
</x-app-layout>
