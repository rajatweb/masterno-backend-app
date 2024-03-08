<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ProviderGroup;
use App\Models\ProviderUnit;
use App\Models\Timezone;

class ProviderController extends Controller
{
    //

    public function getProviderGroup() 
    {
        $data['provider_group'] = ProviderGroup::get(["name", "id"]);
        return response()->json($data);
    }

    public function getProviderUnit() 
    {
        $data['provider_unit'] = ProviderUnit::get(["name", "id"]);
        return response()->json($data);
    }

    public function getTimezone() 
    {
        $data['timezone'] = Timezone::get(["timezone", "id"]);
        return response()->json($data);
    }
}
