<?php

namespace App\Repositories;


use App\Alga;
use App\Repositories\Contracts\AlgaContract;
use Illuminate\Http\Request;

class AlgaRepository implements AlgaContract
{
    /**
     * Returns listing of all resources.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return Alga::all();
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    /**
     * Save a new model and return the instance.
     *
     * @param Request $request
     * @return static
     */
    public function store(Request $request)
    {
        return Alga::create($request->all());
    }

    public function show($id)
    {
        return Alga::find($id);
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        return Alga::find($id)->delete();
    }
}