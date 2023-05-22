<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index()
    {
        $this->middleware('auth');
        $manufacturers = Manufacturer::all();
        return response()->json($manufacturers);
    }

    public function destroy($id)
    {
        $this->middleware('auth');
        $this->middleware('admin');

        $manufacturer = Manufacturer::findOrFail($id);
        $manufacturer->delete();

        return response()->json(['message' => 'Manufacturer deleted successfully']);
    }
}
