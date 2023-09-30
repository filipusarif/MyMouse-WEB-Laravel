<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanans';
    protected $primarykey = 'id_pesan';
    protected $guarded = ['id_pesan'];

    public $timestamps = true;
}
