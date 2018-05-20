<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // 上一个地址
        $http_referer = $_SERVER['HTTP_REFERER'];

        $member = $request->session()->get('member', '');
        if ($member == '') {
            return redirect('/login?return_url=' . urlencode($http_referer));
        }

        return $next($request);



//        $member = $request->session()->get('member', '');
//        if($member == '') {
//          $return_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//          return redirect('/login?return_url=' . urlencode($return_url));
//        }
//
//        return $next($request);
    }

}
