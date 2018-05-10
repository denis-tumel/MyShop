<?php

namespace App\Http\Middleware;

use App\Catalog;
use Closure;

class MyMiddleware
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
        $catalog_id = array();
        $catalogs = Catalog::where('type','main')->get();
        foreach($catalogs as $obj){
            $id = $obj->id;
            $catalog_id[] = $id;
        }
        $last = last($catalog_id);
        $temp = $request->route('id');
        if($temp > $last || $temp < 1){
            return redirect()->route('404');
        }
        return $next($request);
    }
}
