<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kurir extends Model
{
    use HasFactory;
    protected $table = 'kurirs';
    // protected $primarykey = 'id_kurir';
    protected $guarded = ['id_kurir'];
    public $timestamps = true;
}
