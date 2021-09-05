<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BBpU extends Model
{
    use HasFactory;
    // Table
    protected $table        = 'tbl_bb_u';
    protected $primaryKey   = 'id_bbu';
    public $keyType         = 'string';
    public $timestamps      = false;
}
