<?php

namespace Legendary\Modules\Website\Http\Controllers;

use Legendary\Modules\BaseController;

class WebsiteController extends BaseController
{
    /**
     * Render Views from index blade
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('website::index');
    }

}
