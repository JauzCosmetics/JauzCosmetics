<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AddressController extends Controller
{
    public function crear(Request $request) {
        $addressNueva = new Address;
        $addressNueva -> address = $request -> address;
        $addressNueva -> country = $request -> country;
        $addressNueva -> city = $request -> city;
        $addressNueva -> user_id = $request -> id;
        $addressNueva -> save();

        return back()->with('success', 'Dirección agregada');
    }
    public function allAddresses() {
        $user_id=Auth::user()->id ;
        $addresses = DB::table('addresses')->where('user_id','=',$user_id)->get();
    return view('profile', ['addresses' => $addresses]);
    }
}
?>
