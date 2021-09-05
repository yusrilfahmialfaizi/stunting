<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IMTpU extends Model
{
    use HasFactory;
    // Table
    protected $table        = 'tbl_imtu';
    protected $primaryKey   = 'id_imtu';
    public $keyType         = 'string';
    public $timestamps      = false;
}
