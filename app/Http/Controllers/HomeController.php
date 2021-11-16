<?php

namespace App\Http\Controllers;

// use App\Models\Camp;
// use App\Models\Checkout;
use Illuminate\Http\Request;
use Auth;


class HomeController extends Controller
{
    //
    public function dashboard()
    {
        # code...
        // $checkout = Checkout::with('camp')->whereUserId(Auth::id())->get();
        // return view('user.dashboard', [
        //     'checkouts' => $checkout
        // ]);
        switch (Auth::user()->is_admin) {
            case true:
                # code...
                return redirect(route('admin.dashboard'));
                break;

            default:
                # code...
                return redirect(route('user.dashboard'));
                break;
        }
    }
}
