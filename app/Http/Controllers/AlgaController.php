<?php

namespace App\Http\Controllers;

use App\Alga;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class AlgaController extends BaseController
{
    /**
     * Get all the records of the Alga model.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAll()
    {
        $alga = Alga::all();
        return response()->json($alga);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function saveAlga(Request $request)
    {
        $alga = Alga::create($request->all());
        return response()->json($alga);
    }
}
