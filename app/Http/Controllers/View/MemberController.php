<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;

class MemberController extends Controller
{
  public function toLogin($value='')
  {
    return view('bookshop.login');
  }

  public function toRegister($value='')
  {
    return view('bookshop.register');
  }
}
