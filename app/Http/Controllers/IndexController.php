<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __invoke(Request $request, $page = '')
    {

      switch ($page) {
          case 'about':
              $view = "content.about.index";
              break;
          case 'more':
              $view = "content.services.index";
              break;
          case 'work':
              $view = "content.portfolio.index";
              break;
          case 'client':
              $view = "content.clients.index";
              break;
          case 'contact':
              $view = "content.contact.index";
              break;
          default:
              $view = 'index';
              break;
      }
      if($request->ajax() || $request->wantsJson()) return view($view);
      return view('index')->withError($page.' is Not allowed here!');
    }
}
