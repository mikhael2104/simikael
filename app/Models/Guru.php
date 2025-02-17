<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'gurus';

    protected $primaryKey = 'id_guru';

    protected $guarded = [];
}
