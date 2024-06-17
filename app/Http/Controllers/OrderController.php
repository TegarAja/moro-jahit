<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'modelName' => 'required|string',
            'sleeveModel' => 'required|string',
            'customerName' => 'required|string',
            'customerPhone' => 'required|string',
            'customerAddress' => 'required|string',
            'material' => 'required|string',
            'selectedImagePath' => 'nullable|string',
            'sizeType' => 'required|string',
            'size' => 'nullable|string',
            'additionalDescriptionDefault' => 'nullable|string',
            'additionalDescriptionCustom' => 'nullable|string',
            'chestSize' => 'nullable|numeric',
            'waistSize' => 'nullable|numeric',
            'waistSizeCustom' => 'nullable|numeric',
            'hipSize' => 'nullable|numeric',
            'hipSizeCustom' => 'nullable|numeric',
            'frontWidth' => 'nullable|numeric',
            'backWidth' => 'nullable|numeric',
            'shoulderLength' => 'nullable|numeric',
            'armholeSize' => 'nullable|numeric',
            'sleeveLength' => 'nullable|numeric',
            'lowerArmSize' => 'nullable|numeric',
            'modelLength' => 'nullable|numeric',
            'crotchSize' => 'nullable|numeric',
            'thighSize' => 'nullable|numeric',
            'kneeSize' => 'nullable|numeric',
            'ankleSize' => 'nullable|numeric',
            'imageUpload.*' => 'nullable|image|max:2048',
            'motif' => 'nullable|string',
        ]);

        // Simpan gambar
        $images = [];
        if ($request->hasFile('imageUpload')) {
            foreach ($request->file('imageUpload') as $image) {
                $path = $image->store('uploads', 'public');
                $images[] = $path;
            }
        }

        // Simpan data ke database
        $order = new Order;
        $order->user_id = auth()->id();
        $order->model_name = $request->input('modelName');
        $order->sleeve_model = $request->input('sleeveModel');
        $order->customer_name = $request->input('customerName');
        $order->customer_phone = $request->input('customerPhone');
        $order->customer_address = $request->input('customerAddress');
        $order->selectedImagePath = $request->input('selectedImagePath');
        $order->material = $request->input('material');
        $order->size_type = $request->input('sizeType');
        $order->size = $request->input('size');
        $order->additional_description = $request->input('sizeType') === 'Default'
            ? $request->input('additionalDescriptionDefault')
            : $request->input('additionalDescriptionCustom');
        $order->image_uploads = json_encode($images);

        // Ukuran custom
        $order->chest_size = $request->input('chestSize');
        $order->waist_size = $request->input('waistSize');
        $order->waist_size_custom = $request->input('waistSizeCustom');
        $order->hip_size = $request->input('hipSize');
        $order->hip_size_custom = $request->input('hipSizeCustom');
        $order->front_width = $request->input('frontWidth');
        $order->back_width = $request->input('backWidth');
        $order->shoulder_length = $request->input('shoulderLength');
        $order->armhole_size = $request->input('armholeSize');
        $order->sleeve_length = $request->input('sleeveLength');
        $order->lower_arm_size = $request->input('lowerArmSize');

        // Ukuran custom celana/rok
        $order->crotch_size = $request->input('crotchSize');
        $order->thigh_size = $request->input('thighSize');
        $order->knee_size = $request->input('kneeSize');
        $order->ankle_size = $request->input('ankleSize');

        $order->model_length = $request->filled('modelLengthCustom') ? $request->input('modelLengthCustom') : $request->input('modelLength');

        // Tambahan status pembayaran dan status pesanan
        $order->status_pembayaran = 'Belum Membayar';
        $order->status_pesanan = 'Belum Diproses';

        $order->save();

        return redirect()->back()->with('success', 'Order has been placed successfully!');
    }

    public function index()
    {
        $orders = Order::where('user_id', auth()->id())->get();

        return view('daftarpesan', compact('orders')); // Mengembalikan tampilan 'daftarpesan' dengan variabel $orders
    }

    public function updatePaymentStatus(Request $request, $id)
    {
        $request->validate([
            'statusPembayaran' => 'required|string',
            'statusPesanan' => 'required|string',
            'buktiPembayaran' => 'nullable|image|max:2048',
        ]);

        $order = Order::find($id);
        if ($request->hasFile('buktiPembayaran')) {
            $path = $request->file('buktiPembayaran')->store('uploads', 'public');
            $order->bukti_pembayaran = $path;
        }

        $order->status_pembayaran = $request->input('statusPembayaran');
        $order->status_pesanan = $request->input('statusPesanan');

        $order->save();

        return redirect()->back()->with('success', 'Order payment status updated successfully!');
    }

    public function uploadPaymentProof(Request $request, $id)
    {
        $request->validate([
            'paymentProof' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $order = Order::find($id);
        if ($request->hasFile('paymentProof')) {
            $file = $request->file('paymentProof');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/payment_proofs', $filename);

            // Simpan nama file ke database
            $order->payment_proof = $filename;
            // Perbarui status pembayaran menjadi 'dalam proses'
            $order->status_pembayaran = 'dalam proses';

            $order->save();
        }

        return redirect()->back()->with('success', 'Bukti pembayaran berhasil diunggah.');
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status_pembayaran = $request->input('status_pembayaran');
        $order->status_pesanan = $request->input('status_pesanan');
        $order->save();

        return redirect()->back()->with('success', 'Order updated successfully');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->back()->with('success', 'Order deleted successfully');
    }
}
