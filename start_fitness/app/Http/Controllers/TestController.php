<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\TraitTest;


class TestController extends Controller
{   
    use TraitTest;
    function index() {
        
        return $this->hello();
    }
}
