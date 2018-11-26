<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        extract($request->all());
        $data = get_defined_vars();
        return view('content.search', $data);
    }
}
