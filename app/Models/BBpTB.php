<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BBpTB extends Model
{
    use HasFactory;
    // Table
    protected $table        = 'tbl_bbtb';
    protected $primaryKey   = 'id_bbtb';
    public $keyType         = 'string';
    public $timestamps      = false;
}
