<?php

namespace App\Http\Controllers;

use App\Models\CorporatePartner;
use App\Http\Requests\StoreCorporatePartnerRequest;
use App\Http\Requests\UpdateCorporatePartnerRequest;
use Illuminate\Http\Request;

class CorporatePartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $BeOurCorporatePartners = CorporatePartner::all();
        return view('admin.pages.beCorporatePartner.index', compact('BeOurCorporatePartners'));
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
//      return $request->all();
        $request->validate([
            'company_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'file' => 'required'
        ]);

        $corporatePartner = new CorporatePartner();
        $corporatePartner->company_name = $request->company_name;
        $corporatePartner->email = $request->email;
        $corporatePartner->mobile = $request->mobile;
        $corporatePartner->country_code = $request->country_code;
        if ($request->has('file'))
        {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $destinationPath = 'Be-Our-Corporate-Partner';
            $file->move($destinationPath, $fileName);
            $corporatePartner->file = $fileName;

        }
        $corporatePartner->save();

        return redirect()->route('be-our-corporate-partners')->with('success','Your Request Send SuccessFully!');
//        return response()->json(true);
    }

    /**
     * Display the specified resource.
     */
    public function show(CorporatePartner $corporatePartner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CorporatePartner $corporatePartner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCorporatePartnerRequest $request, CorporatePartner $corporatePartner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CorporatePartner $corporatePartner)
    {
        //
    }
}
