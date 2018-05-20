<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Log;

class OrderController extends Controller
{
    public function toOrderPay(Request $request)
    {
        return view('bookshop.order_pay');
    }
}
