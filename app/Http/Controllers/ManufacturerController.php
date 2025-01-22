<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ManufacturerController extends Controller
{
    /**
     * Display the homepage with a list of manufacturers and car counts.
     *
     * @return \Illuminate\View\View
     */
    public function home(): \Illuminate\View\View
    {
        $manufacturers = Manufacturer::withCarCount()->paginate(9);
        return view('home', compact('manufacturers'));
    }

    /**
     * Show details of a specific manufacturer along with its cars.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id): \Illuminate\View\View
    {
        try {
            $manufacturer = Manufacturer::getManufacturerWithCars($id);
            return view('manufacturer_detail', compact('manufacturer'));
        } catch (ModelNotFoundException $e) {
            abort(404, 'Manufacturer not found');
        }
    }
}
