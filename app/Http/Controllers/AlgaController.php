<?php

namespace App\Http\Controllers;

use App\Alga;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class AlgaController extends BaseController
{
    public function getAll()
    {
        $algae = Alga::all();
        return response()->json($algae);
    }

    public function saveAlga(Request $request)
    {
        $alga = Alga::create($request->all());
        return response()->json($alga);

    }

    public function getAlga($id)
    {
        $alga = Alga::findOrNew($id);
        return response()->json($alga);
    }

    public function deleteAlga($id)
    {
        $alga = Alga::findOrNew($id);
        $alga->deleteAlga($id);
        return response()->json([
            'success' => true,
            'id' => $id
        ]);
    }
}
