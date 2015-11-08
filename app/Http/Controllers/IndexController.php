<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function showIndex()
    {
        return view('pages.index');
    }
}
