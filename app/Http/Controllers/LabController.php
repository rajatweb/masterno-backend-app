<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Labs;

class LabController extends Controller
{
    //

    public function store(Request $request)
    {
        Labs::create([
            'name' => $request->labName,
            'provider_group' => $request->providerGroup,
            'provider_unit'  => $request->providerUnit,
            'address'  => $request->address,
            'state'  => $request->state,
            'city'  => $request->city,
            'zipcode'  => $request->zipCode,
            'office_phone'  => $request->officePhone,
            'mobile'  => $request->mobile,
            'email'  => $request->email,
            'timezone'  => $request->timezone,
        ]);

        return response()->json(['success' => 'success'], 200);
    }
}
