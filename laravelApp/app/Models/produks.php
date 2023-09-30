<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produks extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $primarykey = 'id';
    protected $guarded = ['id'];

    public $timestamps = true;
}
