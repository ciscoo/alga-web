<?php

namespace App\Http\ViewComposers;


use App\Repositories\AlgaRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DetailsComposer
{

    /**
     * The alga repository implementation.
     *
     * @var AlgaRepository
     */
    protected $alga;

    protected $request;

    public function __construct(AlgaRepository $alga, Request $request)
    {
        $this->alga = $alga;
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $alga = $this->alga->show($this->request->get('id'));
        $view->with($alga);
    }
}