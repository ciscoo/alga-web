<?php

namespace App\Http\Controllers;

use App\Models\Alga;
use Illuminate\Http\Request;

class AlgaController extends Controller
{
    /**
     * Get all of the models from the database.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAll()
    {
        $alga = Alga::all();
        return response()->json($alga);
    }

    /**
     * Execute a query for a single record by ID.
     *
     * @param int $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getSingle($id)
    {
        $alga = Alga::find($id);

        if(empty($alga)) {
            return response()->json([
                'result' => 0,
                'message' => 'No record was found.'
            ]);
        }

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
