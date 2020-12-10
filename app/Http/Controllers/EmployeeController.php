<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use Excel;
use App\Imports\EmployeeImport;

class EmployeeController extends Controller
{
    public function addEmployee(){
     $employee=[
         ['name'=>'alice',
         'email'=>'asjdhaksj@gmail.com',
         'phone'=>'12312312312',
         'salary'=>'2000',
         'department'=>'accounting'
     ],
         ['name'=>'alice2',
         'email'=>'asjdhaksj2@gmail.com',
         'phone'=>'12312312312',
         'salary'=>'2000',
         'department'=>'marketing'
     ],
         ['name'=>'alice3',
         'email'=>'asjdhaksj3@gmail.com',
         'phone'=>'12312312312',
         'salary'=>'2000',
         'department'=>'marketing'
     ],
         ['name'=>'alice4',
         'email'=>'asjdhaksj4@gmail.com',
         'phone'=>'12312312312',
         'salary'=>'2000',
         'department'=>'quality'
     ],
         ['name'=>'alice5',
         'email'=>'asjdhaksj5@gmail.com',
         'phone'=>'12312312312',
         'salary'=>'2000',
         'department'=>'accounting'
     ],
     ];
     Employee::insert($employee);
     return 'record has been inserted';
    }
    public function exportIntoExcel(){
return Excel::download(new EmployeeExport,'employelist.xlsx');
    }
    public function exportIntoCSV(){
return Excel::download(new EmployeeExport,'employelist.csv');
    }

    public function importForm(){
        return view('import-form');
    }
    public function importFile(Request $request){
        Excel::import(new EmployeeImport,$request->file);
        return 'Record are imported successfully';
    }
}
