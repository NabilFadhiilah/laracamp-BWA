<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        # code...
        $checkout = Checkout::with('camp')->whereUserId(Auth::id())->get();
        return view('user.dashboard', [
            'checkouts' => $checkout
        ]);
    }
}
