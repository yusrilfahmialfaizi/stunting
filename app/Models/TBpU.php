<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBpU extends Model
{
    use HasFactory;
    // Table
    protected $table        = 'tbl_pbu';
    protected $primaryKey   = 'id_pbu';
    public $keyType         = 'string';
    public $timestamps      = false;
}
