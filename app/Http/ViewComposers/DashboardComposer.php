<?php

namespace App\Http\ViewComposers;


use App\Repositories\AlgaRepository;
use Illuminate\Contracts\View\View;

class DashboardComposer
{

    /**
     * The alga repository implementation.
     *
     * @var AlgaRepository
     */
    protected $alga;

    public function __construct(AlgaRepository $alga)
    {
        $this->alga = $alga;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('algae', $this->alga->show(1));
    }
}