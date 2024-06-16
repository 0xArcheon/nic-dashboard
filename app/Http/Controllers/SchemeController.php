<?php

namespace App\Http\Controllers;

use App\Imports\SchemeImport;
use App\Models\Scheme;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SchemeController extends Controller
{
    public function index() {
        $scheme = Scheme::all();
        return view('import', compact('scheme'));
    }

    public function importPost(Request $request) {
        $request->validate([
            'import_file' => [ 
                'required',
                'file', 
            ],
        ]);

        Excel::import(new SchemeImport, $request->file('import_file'));
        return redirect()->back()->with('status', 'imported successfully');

    }
}
