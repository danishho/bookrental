<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerCenterController extends Controller
{
    public function redirectToSellerCenter()
    {
        $user = Auth::user();

        if ($user->bank_number && $user->bank_type) {
            return redirect('/seller');
        } else {
            return redirect('/bank');
        }
    }

    public function showBankInfoForm()
    {
        return view('seller.bank-form');
    }

    public function Update(User $user)
    {
        request()->validate([
            'bank_number' => ['required', 'integer', 'min:6' ],
            'bank_type' => 'required',
        ]);

        $user = Auth::user();
        $user->bank_number = request()->bank_number;
        $user->bank_type = request()->bank_type;
        $user->save();


        return redirect('/seller_center');
    }

    public function showSellerCenterPage()
    {
        return view('seller.product');
    }
}
