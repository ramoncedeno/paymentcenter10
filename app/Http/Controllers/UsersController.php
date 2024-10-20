<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Laravel excel
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
