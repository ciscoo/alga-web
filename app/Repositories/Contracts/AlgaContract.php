<?php

namespace App\Repositories\Contracts;
use Illuminate\Http\Request;

interface AlgaContract
{
    public function all();

    public function create();

    public function store(Request $request);

    public function show($id);

    public function edit($id);

    public function update($id);

    public function destroy($id);
}