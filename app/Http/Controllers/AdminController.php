<?php

namespace App\Http\Controllers;
use App\Models\Order;


use Illuminate\Http\Request;

use App\Models\Category;

class AdminController extends Controller
{
    public function view_category()
    {
        return view('admin.category');
    }

    public function add_category(Request $request)
    {

        $category = new Category;

        $category->category_name = $request->category;

        $category->save();

        toastr()->closeButton()->addSuccess('Category Added Successfully');

        return redirect()->back();

    }
    public function index()
{
    $orders = Order::all(); // atau query yang sesuai untuk mendapatkan pesanan
    return view('admin.index', compact('orders'));
}


}

