<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilZscore extends Model
{
    use HasFactory;
    // Table
    protected $table        = 'hasil_zscore';
    protected $primaryKey   = 'id_hasil';
    public $keyType         = 'string';
    public $timestamps      = false;
}
