<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxRouteController extends Controller
{
    public function route($id)
    {
      $blade = $id;
      if (view()->exists($blade)) {
        session()->put('ajax-route', 'yes');
        $response['success'] = 1;
        $response['html'] = view($blade)->render();
      }
      else {
        $response['success'] = 0;
        $response['message'] = "page not found";
      }
      return response()->json($response);
    }
}
