<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LookupController extends Controller
{
    public function updateValue(Request $request)
    {
        $lookupCode = $request->input('lookupcode');
        $newValue = $request->input('lookupvalue');

        if (!$lookupCode || !$newValue) {
            return response()->json(['error' => 'lookupcode and lookupvalue are required'], 400);
        }

        $updated = DB::table('lookups')
            ->where('lookupcode', $lookupCode)
            ->update(['lookupvalue' => $newValue, 'updated_at' => now()]);

        if ($updated) {
            return response()->json(['message' => 'Lookup value updated']);
        } else {
            return response()->json(['error' => 'Lookup code not found or value not changed'], 404);
        }
    }

    public function getByCategoryName(Request $request)
    {
        $categoryName = $request->query('lookupcategoryname');

        if (!$categoryName) {
            return response()->json(['error' => 'lookupcategoryname is required'], 400);
        }

        $category = DB::table('lookup_categories')
            ->where('lookupcategoryname', $categoryName)
            ->first();

        if (!$category) {
            return response()->json(['error' => 'Lookup category not found'], 404);
        }

        $lookups = DB::table('lookups')
            ->where('lookupcategoryid', $category->lookupcategoryid)
            ->get();

        return response()->json($lookups);
    }
}
