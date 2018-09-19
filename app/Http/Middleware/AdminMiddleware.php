<?php

namespace App\Http\Middleware;

use App\Http\Controllers\loginOut;
use App\new_accounts;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next, $controller)
    {
        $currentUser = $request->user();

        $currentActionName = $request->route()->getActionName();
        list($controller, $method) = explode('@', $currentActionName);
        $controller = str_replace(["App\\Http\\Controllers\\", "Controller"], "",$controller);
//        dd("C: $controller M: $method");
        $permissionMap = [
            'permissions' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']
        ];

        $classMap = [
            'authenticateAccount' => 'authenticate_acc',
            'manager_adds_admin'  => 'manager_adds_admin',
            'super_admin'         => 'super_admin',
            'user_list'           => 'userAllshow'
        ];

        foreach ($permissionMap as $permission => $methods){
            if (in_array($method, $methods)){
                // $className = $classMap[$controller];
              // dd("{$permission}-{$controller}");
                if (!$currentUser->can("{$permission}-{$controller}")){
                    abort(403, "Forbidden");
                }
            }
        }

        return $next($request);
    }
}
