<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class FlightController extends Controller
{
    /**
     * 创建一个新的用户实例
     * @param Request $request
     */
    public function store(Request $request) {
        // 验证请求
        $user = new User;

        $user->name = $request->name;
        $user->email = time().'qq.com';

        $user->save();

    }

    /**
     * 更新用户的name
     * @param Request $request
     * @param $id
     * @param $new_name
     */
    public function update(Request $request) {
        $user = User::find($request->id);

        $user->name = $request->new_name;

        $user->save();
    }

    /**
     * 删除
     * @param Request $request
     */
    public function delete(Request $request) {
        $user = User::find($request->id);
        $user->delete();
//        User::destroy($request->id);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
