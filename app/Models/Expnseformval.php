<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expnseformval extends Model
{
    use HasFactory;

    protected $table = "expnseformvals";
    public $primaryKey = 'prdId';
    public $timestamps = false;

    protected $fillable = ['prdName','prdPrice','crncyType','prdType'];
}
