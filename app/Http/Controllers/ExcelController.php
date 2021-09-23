<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Exports\TransactionsExport;
use App\Imports\TransactionsImport;

class ExcelController extends Controller
{
    public function importExportView()
    {
       return view('excel.index');
    }
    public function exportExcel($type) 
    {
        return \Excel::download(new TransactionsExport, 'transactions.'.$type);
    }
    public function importExcel(Request $request) 
    {
        \Excel::import(new TransactionsImport,$request->import_file);

        \Session::put('success', 'Your file is imported successfully in database.');
           
        return back();
    }
}
