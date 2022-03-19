<?php

namespace App\Http\Controllers;

use App\Exports\ProductsDateExport;
use Illuminate\Http\Request;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function index(){
        return view('reports.index');
    }

    public function export(){
        return Excel::download(new ProductsExport, 'products.csv');
    }
    
}
