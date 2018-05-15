<?php

namespace App\Http\ViewComposers;

use App\Repositories\Frontend\FrontendRepository;
use Illuminate\View\View;

class SearchComposer
{
    public $dataSearch=[];

    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(FrontendRepository $home)
    {
        $this->dataSearch = $home->getDataSearch();
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('dataSearch', $this->dataSearch);
    }
}