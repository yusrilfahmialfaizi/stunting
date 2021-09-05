<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDesa extends Model
{
    use HasFactory;
    protected $table        = 'tbl_desa';
    protected $primaryKey   = 'id_desa';
    public $keyType         = 'string';
    public $timestamps      = false;
}
