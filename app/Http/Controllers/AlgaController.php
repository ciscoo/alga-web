<?php

namespace App\Http\Controllers;

use App\Alga;
use App\Repositories\AlgaRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class AlgaController extends Controller
{
    /**
     * The Alga repository instance.
     *
     * @var AlgaRepository
     */
    protected $algaRepository;

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct(AlgaRepository $algaRepository)
    {
        $this->algaRepository = $algaRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json($this->algaRepository->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TODO: Implement create()
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alga = $this->algaRepository->store($request);
        return response()->json(['success' => true, 'alga' => $alga]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alga = $this->algaRepository->show($id);

        if(empty($alga)) {
            return response()->json([
                'success' => false,
                'message' => 'No record was found.'
            ]);
        }

        return response()->json($alga);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // TODO: implement edit()
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // TODO: Implement update()
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alga = $this->algaRepository->destroy($id);
        return response()->json($alga);
    }

    public function showDetail($id)
    {
        $alga = $this->algaRepository->show($id);

        if(empty($alga)) {
            return view('auth.details')->with('alga', $alga);
        }

        return view('auth.details')->with('alga', $alga);
    }
}
