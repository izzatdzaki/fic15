<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    // index
    public function index(Request $request)
    {
        $doctor = DB::table('doctors')
            ->when($request->input('name'), function ($query, $name) {
                return $query->where('doctor_name', 'like', '%' . $name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('pages.doctor.index', compact('doctor'));
    }

    // create

}
