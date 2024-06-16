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
        $totalSchemes = Scheme::count(); //gets total entry count
        $uniqueSchemeCount = Scheme::distinct('scheme_code')->count('scheme_code');  // Get the count of unique scheme_code entries
        
        // Count unique scheme_code entries for 'central_scheme'
        $centralSchemesCount = Scheme::where('central_state_scheme', 'central_scheme')
        ->distinct('scheme_code')->count('scheme_code');

        // Count unique scheme_code entries for other schemes
        $stateSchemesCount = Scheme::where('central_state_scheme', 'state_scheme')
        ->distinct('scheme_code')->count('scheme_code');

        return view('welcome', compact('scheme','totalSchemes','uniqueSchemeCount', 'centralSchemesCount', 'stateSchemesCount'));
    }

    public function importPost(Request $request) {
        $request->validate([
            'import_file' => [ 
                'required',
                'file', 
                'mimes:xls,xlsx',
            ],
        ]);

        try {
            Excel::import(new SchemeImport, $request->file('import_file'));
            return redirect()->back()->with('status', 'Imported successfully');
        } 
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['import_file' => 'Import failed: ' . $e->getMessage()]);
        }

    }
}
