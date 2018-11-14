<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __invoke(Request $request, $page = '')
    {
         $view = $page? "content.$page.index": "content.index";
    //   switch ($page) {
    //       case 'about':
    //           $view = "content.about.index";
    //           break;
    //       case 'services':
    //           $view = "content.services.index";
    //           break;
    //       case 'portfolio':
    //           $view = "content.portfolio.index";
    //           break;
    //       case 'offering':
    //           $view = "content.offering.index";
    //           break;
    //       case 'contact':
    //           $view = "content.contact.index";
    //           break;
    //       default:
    //           $view = 'content.index';
    //           break;
    //   }
    //   if($request->ajax() || $request->wantsJson()){
    //       return view($view);
    //   }
    if(view()->exists($view)) return view($view);

      return view('index')->withError($page.' is Not allowed here!');
    }
}
