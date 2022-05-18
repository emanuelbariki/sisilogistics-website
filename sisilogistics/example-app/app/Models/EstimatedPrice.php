<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstimatedPrice extends Model
{
    use HasFactory;
    //table name
    protected $table = 'estimated_prices';
    //primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamps = true;
}
