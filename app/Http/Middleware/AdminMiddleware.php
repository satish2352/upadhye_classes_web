<?php

namespace App\Http\Middleware;

use Closure;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('user_id')) {
            return redirect(route("login"));
        } else {
            // $data_for_url = session('data_for_url');
            // $route_name  =\Request::route()->getName();
            // // if (strpos($route_name,'edit') !== false) { 
            // //     $route_name = str_replace('edit', 'update', $route_name); 
            // // }
            // $final_operation ='' ; 
            // if (strpos($route_name,'add') !== false) { 
            //     $final_operation = 'per_add' ; 
            //     $route_name = str_replace('add', 'list', $route_name); 
            // } else if (strpos($route_name,'edit') !== false) { 
            //     $final_operation = 'per_update' ; 
            //     $route_name = str_replace('edit', 'list', $route_name); 
            // } else if (strpos($route_name,'delete') !== false) { 
            //     $final_operation ='per_delete' ; 
            //     $route_name = str_replace('delete', 'list', $route_name); 
            // } else if (strpos($route_name,'update') !== false) { 
            //     $final_operation ='per_update' ; 
            //     $route_name = str_replace('update', 'list', $route_name); 
            // } 

            // $data_permission =  getPermissionForCRUDPresentOrNot($route_name, session('permissions'));

            // if (strpos($route_name,'log-out') !== false) {
            //     return $next($request);
            // } else if (strpos($route_name,'show') !== false) {
            //     return $next($request);
            // } else if($route_name =='/dashboard') {
            //     // dd('Dashboard permission');
            //     return $next($request);
            // } else if(in_array($final_operation, $data_permission)) {
            //     // dd('data_permission data_permission');
            //     return $next($request);
            // } else if (in_array($route_name, $data_for_url)) {
            //     // dd('data_for_url data_for_url');
            //     return $next($request);
            // } else {
            //     return redirect()->route('error-handling');
            // }
           
             return $next($request);

        }
       
    }
}
