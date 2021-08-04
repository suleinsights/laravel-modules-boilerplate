<?php

namespace Legendary\Modules\Customer\Http\Controllers;

use Legendary\Modules\BaseController;

class HomeController extends BaseController
{
    /**
     * Render Views from index blade
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('customer::index');
    }

}
