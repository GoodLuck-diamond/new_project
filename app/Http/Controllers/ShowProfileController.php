<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param $id
     * @return string
     */


            public function __invoke($id)
    {

        return 'Bir metodli controllerdan salom. ID' . $id;

    }
}
