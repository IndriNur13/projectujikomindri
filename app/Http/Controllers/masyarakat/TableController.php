<?php

namespace App\Http\Controllers\masyarakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    //view dataTable
    public function table()
    {
        return view('masyarakat.page.table');
    }

    //view detailTable
    public function detail()
    {
        return view('masyarakat.page.detail');
    }
}
