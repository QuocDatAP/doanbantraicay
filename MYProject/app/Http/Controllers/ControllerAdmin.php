<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{
    public function index(){       
        return view('Frontend.admin.index');
    }
    public function datatable(){       
        return view('Frontend.admin.table-data-table');
    }
    public function adduser(){       
        return view('Frontend.admin.adduser');
    }
    public function product(){       
        return view('Frontend.admin.product');
    }
}
