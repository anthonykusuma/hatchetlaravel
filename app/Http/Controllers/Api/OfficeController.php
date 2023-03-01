<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class OfficeController extends Controller
{
    public function search(Request $request): String
    {
        $name = Request('name');
        $num_offices = Request('offices');
        $num_tables = Request('tables');
        $min_sqm = Request('min_sqm') ?: 0;
        $max_sqm = Request('max_sqm') ?: 999;
        $min_price = Request('min_price') ?: 0;
        $max_price = Request('max_price') ?: 9999;

        $result = DB::table('offices')
            ->where('name', 'like', "%{$name}%")
            ->orWhere('num_offices', '=', $num_offices)
            ->orWhere('num_tables', '=', $num_tables)
            ->where('price', '>=', $min_price)
            ->where('price', '<=', $max_price)
            ->where('sqm', '>=', $min_sqm)
            ->where('sqm', '<=', $max_sqm)
            ->get();

        return response()->json(
            [
                'message' => 'Data is successfully fetched',
                'data' => $result
            ], 200
        );

    }

}
