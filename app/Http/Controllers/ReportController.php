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

    public function exportdate(Request $request){
        $date1 = $request->date1;
        $date2 = $request->date2;
        $date2 = date("Y-m-d",strtotime($date2."+ 1 days"));
        return redirect()->route('reports.export.dates', ['date1' => $date1,'date2' => $date2]) ;
    }
    
}
