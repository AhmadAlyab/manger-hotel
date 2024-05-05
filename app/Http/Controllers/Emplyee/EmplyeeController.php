<?php

namespace App\Http\Controllers\Emplyee;

use App\Http\Controllers\Controller;
use App\Models\Emplyee;
use App\Models\Gender;
use App\Models\Nationalitie;
use App\Models\Place;
use App\Models\Specialization;
use Illuminate\Http\Request;

class EmplyeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('emplyee.create');
    }

    public function destroy(Request $request)
    {
        try {
            $emplyee = Emplyee::findOrFail($request->id)->delete();
            toastr()->success('Data has been deleted successfully!');
            return redirect()->route('emplyee.index');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!');
            return redirect()->back();
        }
    }
}
