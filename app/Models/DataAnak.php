<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnak extends Model
{
    use HasFactory;
    // Table
    protected $table        = 'tbl_anak';
    protected $primaryKey   = 'id_anak';
    public $keyType         = 'string';
    public $timestamps      = false;
}
