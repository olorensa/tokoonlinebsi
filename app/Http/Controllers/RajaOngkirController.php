<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class RajaOngkirController extends Controller
{
public function getProvinces()
{
$response = Http::withOptions([
'verify' => false, // Disable SSL verification for testing purposes
])->withHeaders([
'key' => '794a5d197b9cb469ae958ed043ccf921'
])->get('https://api.rajaongkir.com/starter/province');
return response()->json($response->json());
}
public function getCities(Request $request)
{
$provinceId = $request->input('province_id');
$response = Http::withOptions([
'verify' => false, // Disable SSL verification for testing purposes
])->withHeaders([
'key' => '794a5d197b9cb469ae958ed043ccf921'
])->get('https://api.rajaongkir.com/starter/city', [
'province' => $provinceId
]);

return response()->json($response->json());
}
public function getCost(Request $request)
{
$origin = $request->input('origin');
$destination = $request->input('destination');
$weight = $request->input('weight');
$courier = $request->input('courier');
$response = Http::withHeaders([
'key' => env('RAJAONGKIR_API_KEY')
])->post(env('RAJAONGKIR_BASE_URL') . '/cost', [
'origin' => $origin,
'destination' => $destination,
'weight' => $weight,
'courier' => $courier,
]);
return response()->json($response->json());
}
}