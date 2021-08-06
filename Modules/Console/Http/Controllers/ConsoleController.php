<?php

namespace Haqqman\Modules\Console\Http\Controllers;

use Haqqman\Modules\BaseController;

class ConsoleController extends BaseController
{
    /**
     * Display a form for the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function console()
    {
        return view('console::index');
    }

}
