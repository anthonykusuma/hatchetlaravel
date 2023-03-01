<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Office;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;

    public function home() {
        return view('home');
    }
}
