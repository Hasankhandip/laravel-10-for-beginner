<?php
namespace App\Http\Controllers;

use App\Models\Vat;

class VatController extends Controller {
    public function createVat() {
        $vats = Vat::all();
        return view('vat.index', compact('vats'));
    }
}
