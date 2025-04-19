<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller {
    // Show the order form
    public function showForm() {
        return view('order'); // this refers to resources/views/order.blade.php
    }

    // Handle the form submission
    public function placeOrder(Request $request) {
        $request->validate([
            'name'     => 'required',
            'quantity' => 'required|numeric|min:1',
            'flavor'   => 'required|in:chocolate,vanilla,strawberry',
        ]);

        return 'Order placed successfully!';
    }
}