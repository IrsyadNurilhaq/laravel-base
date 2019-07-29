<?php

namespace App\Http\Controllers;

use App\User;

class ApiController extends Controller
{
    use JsonTransformer;
    public function __construct()
    {
        $this->iniFractal();
    }
}
