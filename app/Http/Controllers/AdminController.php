<?php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

class AdminController extends Controller {
    public function admin_home() {
        return view('admin.index');
    }
    public function dashboard() {
        return 'Welcome to the Admin Dashboard 🍕';
    }

    public function menu() {
        return 'Manage Pizza Menu 🍕📋';
    }

    public function orders() {
        return 'View Customer Orders 🧾';
    }
}