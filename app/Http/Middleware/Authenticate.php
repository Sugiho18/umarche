<?php

namespace App\Http\Middleware;

use App\Models\Owner;
use App\Models\Admin;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    protected $user_route = 'user.login';
    protected $owner_route = 'owner.login';
    protected $admin_route = 'admin.login';
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            //オーナーがログインしていなければオーナーログイン画面へ遷移する処理
            if(Route::is('owner.*')){
                return route($this->owner_route);
            }elseif(Route::is('admin.*')){
                //管理者がログインしていなければ管理者ログイン画面へ遷移する処理
                return route($this->admin_route);
            }else{
                return route($this->user_route);
            }
        }
    }
}
