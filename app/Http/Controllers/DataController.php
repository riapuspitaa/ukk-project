<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::all();
        return view('data.index', compact('data'));
    }

    public function create()
    {
        return view('data.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_telp' => 'required',
            'instansi' => 'required'
        ]);

        data::create($request->all());

        return redirect()->route('data.index')
            ->with('success', 'data created successfully.');
    }

    public function edit(data $data)
    {
        return view('data.edit', compact('data'));
    }

    public function update(Request $request, data $data)
    {
        $request->validate([
            'nama' => 'required',
            'no_telp' => 'required',
            'instansi' => 'required'
        ]);

        $data->update($request->all());

        return redirect()->route('data.index')
            ->with('success', 'data updated successfully');
    }

    public function destroy(data $data)
    {
        $data->delete();

        return redirect()->route('data.index')
            ->with('success', 'data deleted successfully');
    }
}