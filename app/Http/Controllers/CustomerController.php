<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{
    //
    public function getCustomer(Request $request) {
        $response = Http::get('https://raw.githubusercontent.com/Bit-Code-Technologies/mockapi/main/purchase.json');
     // If json is in string decode first
  $data = json_decode($response->getBody(), true); // to array

  $i= count($data);
 // dd($data);
//   dd($i);
    //  dd($data[4]['name']);
    //     dd($response->collect());
    $model = new Customers();

    for($key=0;$key<$i;$key++)
    {

 $customer= Customers::updateOrCreate([
    'created_at' =>$data[$key]['created_at'],
    'name' =>$data[$key]['name'],
    'order_no' =>$data[$key]['order_no'],
    'user_phone' =>$data[$key]['user_phone'],
    'product_code' =>$data[$key]['product_code'],
    'product_name' =>$data[$key]['product_name'],
    'product_price' =>$data[$key]['product_price'],
    'purchase_quantity' =>$data[$key]['purchase_quantity'],
    'total_price'=> ($data[$key]['purchase_quantity']) * ($data[$key]['product_price'])
]);
//  echo $data[$key]['name']."<br>";
// dd($customer);
    }
    $results = Customers::orderBy('purchase_quantity', 'desc')->get();
    //  dd($results);
    // $customers=Customers::all();
    $purchase_quantity = Customers::sum('purchase_quantity');
    $total_price = Customers::sum('total_price');
    $product_price = Customers::sum('product_price');
    return view('create', compact('total_price', 'product_price', 'results','purchase_quantity'));
    // dd($sum1);
    // dd($customer);






}
}
