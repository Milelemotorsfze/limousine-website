<?php

namespace App\Http\Controllers;

use App\Models\BeOurRSLDriverOrInvestor;
use Illuminate\Http\Request;

class BeOurRSLDriverOrInvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = BeOurRSLDriverOrInvestor::orderBy('id','DESC')->get();
        return view('admin.pages.beDriverOrInvestor.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'country_code' => 'required',
            'number' => 'required',
            'vehicle' => 'required',
            'passport_or_visa_copy' => 'required',
         //   'driver_license' => 'required',
        ]);

        $data = new BeOurRSLDriverOrInvestor();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->country_code = $request->country_code;
        $data->number = $request->number;
        $data->vehicle = $request->vehicle;

        if ($request->has('driver_license'))
        {
            $file = $request->file('driver_license');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $destinationPath = 'Be-Our-RSL-Driver/driving-licence';
            $file->move($destinationPath, $fileName);
            $data->driver_license = $fileName;
        }
        if ($request->has('passport_or_visa_copy'))
        {
            $file = $request->file('passport_or_visa_copy');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $destinationPath = 'Be-Our-RSL-Driver/passport-or-visa';
            $file->move($destinationPath, $fileName);
            $data->passport_or_visa_copy = $fileName;
        }
        $data->save();

        return redirect()->route('be-our-driver-or-investor')->with('success','Your Request Send SuccessFully!');

//        return response()->json(true);
    }

    /**
     * Display the specified resource.
     */
    public function show(BeOurRSLDriverOrInvestor $beOurRSLDriverOrInvestor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BeOurRSLDriverOrInvestor $beOurRSLDriverOrInvestor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BeOurRSLDriverOrInvestor $beOurRSLDriverOrInvestor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BeOurRSLDriverOrInvestor $beOurRSLDriverOrInvestor)
    {
        //
    }
}
