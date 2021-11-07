<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;


class HomeController extends Controller
{
    //
    public function dashboard()
    {
        # code...
        $checkout = Checkout::with('camp')->whereUserId(Auth::id())->get();
        return view('user.dashboard', [
            'checkouts' => $checkout
        ]);
    }
}
