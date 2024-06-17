<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{asset('/admincss/img/favicon.ico')}}">
        <title>Moro Jahit</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

        <!-- Custom Styles -->
        <style>
            .modal-dialog-centered {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: calc(100% - 3.5rem);
            }

            .modal-body, .modal-title {
                color: black;
            }

            @media (max-width: 576px) {
                .table-responsive {
                    margin-top: 20px;
                }
            }
            .modal-body p, .modal-body ul {
                word-wrap: break-word;
                overflow-wrap: break-word;
            }
            .address-column {
                word-wrap: break-word;
                overflow-wrap: break-word;
                white-space: normal;
            }
            .img-fluid {
                width: 50%
            }
            .informasi {
                margin-top: 30px;
                margin-bottom: 30px;
                margin-left: 227px
            }
        </style>
    </head>
    <body>
        <div class="informasi">
            <h3>Nomer Rekening Pembayaran:
            </h3>
            <h6>BANK:</h6>
            <p><b>BRI       : </b>6031-01-038912-53-1</p>
            <h6>NON BANK:</h6>
            <p><b>DANA      : </b>0859 3972 3381</p>
            <p><b>SHOPEEPAY : </b>0859 3972 3381</p>
            <p><b>OVO       : </b>0859 3972 3381</p>
            <h3>Tabel Pesanan: </h3>
        </div>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Nomor WhatsApp</th>
                            <th class="address-column">Alamat</th>
                            <th>Pesanan</th>
                            <th>Status Pembayaran</th>
                            <th>Unggah Bukti Pembayaran</th>
                            <th>Status Pesanan</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $counter = 1;
                        $prices = [
                            'katun' => [
                                'blouse pendek' => 60000, 'blouse panjang' => 80000,
                                'dress pendek' => 80000, 'dress panjang' => 120000,
                                'celana pendek' => 40000, 'celana panjang' => 60000,
                                'kebaya pendek' => 60000, 'kebaya panjang' => 80000,
                                'kemeja pendek' => 60000, 'kemeja panjang' => 80000,
                                'rok pendek' => 40000, 'rok panjang' => 60000
                            ],
                            'satin' => [
                                'blouse pendek' => 60000, 'blouse panjang' => 80000,
                                'dress pendek' => 80000, 'dress panjang' => 120000,
                                'celana pendek' => 40000, 'celana panjang' => 60000,
                                'kebaya pendek' => 60000, 'kebaya panjang' => 80000,
                                'kemeja pendek' => 60000, 'kemeja panjang' => 80000,
                                'rok pendek' => 40000, 'rok panjang' => 60000
                            ],
                            'brokat' => [
                                'blouse pendek' => 120000, 'blouse panjang' => 160000,
                                'dress pendek' => 120000, 'dress panjang' => 160000,
                                'celana pendek' => 80000, 'celana panjang' => 120000,
                                'kebaya pendek' => 120000, 'kebaya panjang' => 160000,
                                'kemeja pendek' => 120000, 'kemeja panjang' => 160000,
                                'rok pendek' => 80000, 'rok panjang' => 120000
                            ],
                            'batik' => [
                                'blouse pendek' => 60000, 'blouse panjang' => 80000,
                                'dress pendek' => 80000, 'dress panjang' => 120000,
                                'celana pendek' => 40000, 'celana panjang' => 60000,
                                'kebaya pendek' => 60000, 'kebaya panjang' => 80000,
                                'kemeja pendek' => 60000, 'kemeja panjang' => 80000,
                                'rok pendek' => 40000, 'rok panjang' => 60000
                            ],
                            'drill' => [
                                'blouse pendek' => 75000, 'blouse panjang' => 100000,
                                'dress pendek' => 75000, 'dress panjang' => 100000,
                                'celana pendek' => 50000, 'celana panjang' => 75000,
                                'kebaya pendek' => 75000, 'kebaya panjang' => 100000,
                                'kemeja pendek' => 75000, 'kemeja panjang' => 100000,
                                'rok pendek' => 40000, 'rok panjang' => 60000
                            ],
                        ];

                        $sewing_costs = [
                            'blouse pendek' => 50000, 'blouse panjang' => 60000,
                            'dress pendek' => 70000, 'dress panjang' => 80000,
                            'celana pendek' => 50000, 'celana panjang' => 75000,
                            'kebaya pendek' => 60000, 'kebaya panjang' => 70000,
                            'kemeja pendek' => 50000, 'kemeja panjang' => 60000,
                            'rok pendek' => 50000, 'rok panjang' => 60000
                        ];
                        @endphp
                       @foreach($orders as $order)
                       @php
                       $material = strtolower($order->material);
                       $model = strtolower($order->model_name . ' ' . $order->sleeve_model);
                       $material_price = $prices[$material][$model] ?? 0;
                       $sewing_cost = $sewing_costs[$model] ?? 0;
                       $total_price = $material_price + $sewing_cost;
                       @endphp
                       <tr>
                           <td>{{ $counter++ }}</td>
                           <td>{{ $order->customer_name }}</td>
                           <td>{{ $order->customer_phone }}</td>
                           <td class="address-column">{{ $order->customer_address }}</td>
                           <td>
                               <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#orderDetailModal{{ $order->id }}">
                                   Detail Pesanan
                               </button>
                           </td>
                           <td>{{ $order->status_pembayaran }}</td>
                           <td>
                               @if(!$order->payment_proof)
                                   <form action="{{ route('upload.payment.proof', $order->id) }}" method="POST" enctype="multipart/form-data">
                                       @csrf
                                       <!-- Input fields -->
                                       <label for="paymentProof{{ $order->id }}">Unggah Bukti Pembayaran</label>
                                       <input type="file" class="form-control" id="paymentProof{{ $order->id }}" name="paymentProof" accept="image/*" required>
                                       <button type="submit" class="btn btn-sm btn-primary">Unggah</button>
                                   </form>
                               @else
                                   Bukti pembayaran telah diunggah
                               @endif
                           </td>
                           <td>{{ $order->status_pesanan }}</td>
                           <td>{{ number_format($total_price, 0, ',', '.') }} IDR</td>
                       </tr>

                       <!-- Modal -->
                       <div class="modal fade" id="orderDetailModal{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="orderDetailModalLabel{{ $order->id }}" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="orderDetailModalLabel{{ $order->id }}">Detail Pesanan</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">×</span>
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       <p><strong>Model:</strong> {{ $order->model_name }}</p>
                                       <p><strong>Model Lengan / Model Celana:</strong> {{ $order->sleeve_model }}</p>
                                       <p><strong>Bahan:</strong> {{ $order->material }}</p>
                                       <p><strong>Motif/Warna</strong></p>
                                       @if($order->selectedImagePath)
                                           <img src="{{ asset($order->selectedImagePath) }}" alt="Motif/Warna" class="img-fluid">
                                       @else
                                           <p>No image selected</p>
                                       @endif

                                       <p><strong>Jenis Ukuran:</strong> {{ $order->size_type }}</p>

                                       <p><strong>Ukuran:</strong> {{ $order->size }}</p>

                                       <div class="modal-body">
                                           <ul>
                                               @if($order->chest_size)<li>Lingkar Badan: {{ $order->chest_size }}</li>@endif

                                               @if($order->waist_size)<li>Lingkar Pinggang: {{ $order->waist_size }}</li>@endif
                                               @if($order->hip_size)<li>Lingkar Pinggul: {{ $order->hip_size }}</li>@endif
                                               @if($order->front_width)<li>Lebar Muka: {{ $order->front_width }}</li>@endif
                                               @if($order->back_width)<li>Lebar Punggung: {{ $order->back_width }}</li>@endif
                                               @if($order->shoulder_length)<li>Panjang Bahu: {{ $order->shoulder_length }}</li>@endif
                                               @if($order->armhole_size)<li>Lingkar Kerung Lengan: {{ $order->armhole_size }}</li>@endif
                                               @if($order->sleeve_length)<li>Panjang Lengan: {{ $order->sleeve_length }}</li>@endif
                                               @if($order->lower_arm_size)<li>Lingkar Lengan Bawah: {{ $order->lower_arm_size }}</li>@endif
                                               @if($order->crotch_size)<li>Ukuran Pesak: {{ $order->crotch_size }}</li>@endif
                                               @if($order->thigh_size)<li>Lingkar Paha: {{ $order->thigh_size }}</li>@endif
                                               @if($order->knee_size)<li>Lingkar Lutut: {{ $order->knee_size }}</li>@endif
                                               @if($order->ankle_size)<li>Lingkar Kaki: {{ $order->ankle_size }}</li>@endif
                                               @if($order->model_length)<li>Panjang Model: {{ $order->model_length }}</li>@endif
                                           </ul>
                                       </div>
                                       <p><strong>Deskripsi Tambahan:</strong> {{ $order->additional_description }}</p>
                                       <p><strong>Referensi Model:</strong></p>
                                       @if($order->image_uploads)
                                           @foreach(json_decode($order->image_uploads) as $image)
                                           <img src="{{ Storage::url($image) }}" alt="Referensi Model" width="100" class="img-fluid">
                                           @endforeach
                                       @endif
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- End Modal -->
                       @endforeach
                   </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>
