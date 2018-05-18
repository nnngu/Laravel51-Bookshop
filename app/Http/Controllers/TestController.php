<?php

namespace App\Http\Controllers;

use Request, Validator;


class TestController extends Controller
{
    public function create()
    {
        $rq = Request::all();

        $validator = Validator::make($rq, [
            'username' => 'required|between:4,8 | unique:users',
            'phone' => 'numeric|required'
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        echo '验证成功';
        return $rq;
    }
}
