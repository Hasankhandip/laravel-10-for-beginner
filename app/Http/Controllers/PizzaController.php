<?php
namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller {
    public function index() {
        $pizzas = Pizza::all();
        return view('pizzas.index', compact('pizzas'));
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'        => 'required',
            'price'       => 'required|numeric',
            'description' => 'nullable',
        ]);

        Pizza::create($request->all());
        return redirect()->route('pizzas.index')->with('success', 'Pizza created!');
    }

    public function show(Pizza $pizza) {
        return view('pizzas.show', compact('pizza'));
    }

    public function edit(Pizza $pizza) {
        return view('pizzas.edit', compact('pizza'));
    }

    public function update(Request $request, Pizza $pizza) {
        $request->validate([
            'name'        => 'required',
            'price'       => 'required|numeric',
            'description' => 'nullable',
        ]);

        $pizza->update($request->all());

        return redirect()->route('pizzas.index')->with('success', 'Pizza updated!');
    }

    public function destroy(Pizza $pizza) {
        $pizza->delete();

        return redirect()->route('pizzas.index')->with('success', 'Pizza deleted!');
    }
}
