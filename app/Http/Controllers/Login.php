<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Zones;
use App\Models\Cls;
use App\Models\Bcode;
use App\Models\Udata;
use App\Models\Ward;
use App\Models\Street;
use App\Models\Taxpayer;
use App\Models\Image;
use App\Models\TaxPayerClassification;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    public static function index(Request $request)
    {
        $nm_tp = Taxpayer::all();
        $nm_tp = count($nm_tp);
        $nm_zn = Zones::all();
        $nm_zn = count($nm_zn);

        $user = User::where('name', $request->username)->first();
        
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;
    
        $buildingTypes = Admin::all('id', 'type');

        $classifications = Cls::all('id', 'classification_name');

        $buildingCode = Bcode::all('id', 'revenue_name', 'code');

        $useData = Udata::all('id', 'code', 'code_title');

        $ward = Ward::all('id', 'ward_name', 'ward_code');

        $response = [
            'token' => $token,
            'taxpayers' => $nm_tp,
            'zones' => $nm_zn,
            'buildingTypes' => $buildingTypes,
            'classifications' => $classifications,
            'buildingCode' => $buildingCode,
            'useData' => $useData,
            'ward' => $ward
        ];

        return response($response, 201);
    }

    public static function bldng_typ()
    {
        $types = Admin::all('id', 'type');

        return response()->json($types, 201);    
    }

    public static function class()
    {
        $types = Cls::all('id', 'classification_name');

        return response()->json($types, 201);    
    }

    public static function bldng_code()
    {
        $types = Bcode::all('id', 'revenue_name', 'code');

        return response()->json($types, 201);    
    }

    public static function U_data()
    {
        $types = Udata::all('id', 'code', 'code_title');

        return response()->json($types, 201);    
    }

    public static function ward()
    {
        $types = Ward::all('id', 'ward_name', 'ward_code');

        return response()->json($types, 201);    
    }

    public static function taxpayers()
    {
        $types = Taxpayer::all('taxpayer_id', 'taxpayer_name');

        return response()->json($types, 201);    
    }

    public static function s_taxpayers($id)
    {
        $search = Taxpayer::join('zones', 'zones.id', 'taxpayers.zone_id')
                 ->where('zones.zone_name', 'like', '%'.$id.'%')
                 ->orwhere('taxpayer_name', 'like', '%'.$id.'%')
                 ->orwhere('taxpayer_id', 'like', '%'.$id.'%')
                 ->get(['taxpayer_id', 'taxpayer_name']);
                         
        return $search;
    }

    public static function search(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $zone = $request->zone;

        $search = Taxpayer::join('zones', 'zones.id', 'taxpayers.zone_id')
                 ->when($id, function($query, $id) {
                    return $query->where('taxpayer_id', 'like', '%'.$id.'%');
                 })

                 ->when($name, function($query, $name) {
                    return $query->where('taxpayer_name', 'like', '%'.$name.'%');
                 })

                 ->when($zone, function($query, $zone) {
                    return $query->where('zones.zone_name', 'like', '%'.$zone.'%');
                 })

                 ->get(['taxpayer_id', 'taxpayer_name']);
                         
        return $search;
    }

    public static function street(Request $request)
    {
        $ward = $request->ward;
        $name = $request->name;
        $community = $request->community;

        $search = Street::join('communities', 'communities.id', 'street_namings.community_id')
                 ->join('wards', 'wards.id', 'street_namings.ward_id')
                 ->when($ward, function($query, $ward) {
                    return $query->where('wards.ward_name', 'like', '%'.$ward.'%');
                 })

                 ->when($name, function($query, $name) {
                    return $query->where('street_name', 'like', '%'.$name.'%');
                 })

                 ->when($community, function($query, $community) {
                    return $query->where('communities.community_name', 'like', '%'.$community.'%');
                 })

                 ->get(['street_name', 'community_name', 'ward_name']);
                         
        return $search;
    }

    public static function createTaxpayers(Request $request)
    {
        $taxpayer = new Taxpayer;
        $taxpayer->taxpayer_name = $request->name;
        $taxpayer->email = $request->email;
        $taxpayer->taxpayer_id = $request->taxpayer_id;
        $taxpayer->address = $request->address;
        $taxpayer->phone = $request->phone; 
        $taxpayer->community_id = $request->community_id;
        $taxpayer->zone_id = $request->zone_id;
        $taxpayer->ward_id = $request->ward_id;
        $taxpayer->description = $request->description;
        $taxpayer->buildingtype = $request->buildingType;
        //$taxpayer->classification = $request->classification; on taxpayers table
        //$taxpayer->distributionOutlet = $request->distributionOutlet; on taxpayers table
        //$billingCode = $request->billingCode; on taxpayers table(revenue name)
        $taxpayer->use = $request->use;
        //$image = $request->image; (You said to create a different table for this)
        $taxpayer->save();

        $class = new TaxPayerClassification;
        $class->tax_payer_id = $request->taxpayer_id;
        $class->classification_id =  $request->classification;
        $class->save();

        $class = new TaxPayerClassification;
        $class->tax_payer_id = $request->taxpayer_id;
        $class->classification_id =  $request->classification;
        $class->save();

        $image = new Image;
        $image->taxpayersId = $request->taxpayersId;
        $image->url =  $request->image;
        $image->save();

        if($taxpayer->save())
        {
            if($class->save())
            {
                if($image->save())
                {
                    return response()->json(['message: Taxpayer has been successfully added'], 201);
                }
                
                else
                {
                    return response()->json(['message: Taxpayer input failed'], 404);
                }
            }

            else
            {
                return response()->json(['message: Taxpayer input failed'], 404);
            }
        }

        else
        {
            return response()->json(['message: Taxpayer input failed'], 404);
        }
    }

    public static function createStreets(Request $request)
    {
        $street = new Street;
        $street->street_name = $request->name;
        $street->ward_id = $request->ward;
        $street->taxpayers_id = $request->taxpayerId; //taxpayer id on street page, contact on taxpayers page 
        $street->community_id = $request->communityId;
        $street->user_ip_address = $request->ip();
        $street->road_state = $request->roadState;
        $street->drainage = $request->drainage;
        $street->latitude = $request->latitude;
        $street->longitude = $request->longitude;

        $street->save();

        if($street->save())
        {
            return response()->json(['message: Street has been successfully added'], 201);
        }

        else
        {
            return response()->json(['message: Street input failed'], 404);
        }
    }

    public static function logout()
    {
        $token = $user->tokens()->delete();

        return response()->json(['message: This user has been successfully logged out'], 404);    
    }
}
