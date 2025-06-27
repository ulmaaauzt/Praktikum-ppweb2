<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AdminController extends Controller
{
    public function()
    {
        return view('admin.index');
    }
}
