<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BBpPB extends Model
{
    use HasFactory;
    // Table
    protected $table        = 'tbl_bbpb';
    protected $primaryKey   = 'id_bbpb';
    public $keyType         = 'string';
    public $timestamps      = false;
}
