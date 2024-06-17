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
                    <th>Edit</th> <!-- New -->
                    <th>Hapus</th> <!-- New -->
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
                           User belum membayar
                       @else
                       <img src="{{ asset('storage/payment_proofs/' . $order->payment_proof) }}" alt="Bukti Pembayaran" class="img-fluid" width="100">                       @endif
                   </td>
                   <td>{{ $order->status_pesanan }}</td>
                   <td>{{ number_format($total_price, 0, ',', '.') }} IDR</td>
                   <td>
                    <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editOrderModal{{ $order->id }}">
                        Edit
                    </button>
                </td>
                <td>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>


               <!-- Modal -->
               <!-- Edit Modal -->
<div class="modal fade" id="editOrderModal{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="editOrderModalLabel{{ $order->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editOrderModalLabel{{ $order->id }}">Edit Pesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="status_pembayaran">Status Pembayaran</label>
                        <select class="form-control" id="status_pembayaran" name="status_pembayaran">
                            <option value="Belum Dibayar" {{ $order->status_pembayaran == 'Belum Dibayar' ? 'selected' : '' }}>Belum Dibayar</option>
                            <option value="Sudah Dibayar" {{ $order->status_pembayaran == 'Sudah Dibayar' ? 'selected' : '' }}>Sudah Dibayar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status_pesanan">Status Pesanan</label>
                        <select class="form-control" id="status_pesanan" name="status_pesanan">
                            <option value="Pending" {{ $order->status_pesanan == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Pesanan sedang dalam Proses (1-2 Hari)" {{ $order->status_pesanan == 'Pesanan sedang dalam Proses (1-2 Hari)' ? 'selected' : '' }}>Pesanan sedang dalam Proses (1-2 Hari)</option>
                            <option value="penjahit sedang membuat design pola (1-2 Hari)" {{ $order->status_pesanan == 'penjahit sedang membuat design pola (1-2 Hari)' ? 'selected' : '' }}>penjahit sedang membuat design pola (1-2 Hari)</option>
                            <option value="penjahit sedang memotong kain sesuai pola (1-2 Hari)" {{ $order->status_pesanan == 'penjahit sedang memotong kain sesuai pola (1-2 Hari)' ? 'selected' : '' }}>penjahit sedang memotong kain sesuai pola (1-2 Hari)</option>
                            <option value="penjahit sedang menjahit busana yang dipesan (2-3 Hari)" {{ $order->status_pesanan == 'penjahit sedang menjahit busana yang dipesan (2-3 Hari)' ? 'selected' : '' }}>penjahit sedang menjahit busana yang dipesan (2-3 Hari)</option>
                            <option value="Pesanan Selesai di buat" {{ $order->status_pesanan == 'Pesanan Selesai di buat Silahkan Diambil' ? 'selected' : '' }}>Pesanan Selesai di buat Silahkan Diambil</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>




               <div class="modal fade" id="orderDetailModal{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="orderDetailModalLabel{{ $order->id }}" aria-hidden="true">
                   <div class="modal-dialog modal-dialog-centered" role="document">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title" id="orderDetailModalLabel{{ $order->id }}">Detail Pesanan</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="modal-body">
                               <p><strong>Model:</strong> {{ $order->model_name }}</p>
                               <p><strong>Model Lengan / Model Celana:</strong> {{ $order->sleeve_model }}</p>
                               <p><strong>Bahan:</strong> {{ $order->material }}</p>
                               <p><strong>Motif/Warna:</strong></p>
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
