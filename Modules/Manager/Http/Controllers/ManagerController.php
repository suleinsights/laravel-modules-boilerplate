<?php

namespace Haqqman\Modules\Manager\Http\Controllers;

use Haqqman\Modules\BaseController;

class ManagerController extends BaseController
{
    /**
     * Display a form for the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manager()
    {
        return view('manager::index');
    }

}
