<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ejemplo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'Ejemplo';
    protected $fillable = ['id','nombre','edad','tipo_documento','documento'];
}
