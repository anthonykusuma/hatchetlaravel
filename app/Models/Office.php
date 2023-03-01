<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Office extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'num_offices',
        'num_tables',
        'sqm'
    ];

    public function getMinTables() {
        return DB::table('offices')->min('num_tables');
    }

    public function getMaxTables() {
        return DB::table('offices')->max('num_tables');
    }

    public function getMinPrice() {
        return DB::table('offices')->min('price');
    }

    public function getMaxPrice() {
        return DB::table('offices')->max('price');
    }

}
