<?php

namespace Haqqman\Modules\Webmaster\Http\Controllers;

use Haqqman\Modules\BaseController;

class WebmasterController extends BaseController
{
    /**
     * Display a form for the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function webmaster()
    {
        return view('webmaster::index');
    }

}
