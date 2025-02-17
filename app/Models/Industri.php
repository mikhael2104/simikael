<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Industri extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'industris';

    protected $primaryKey = 'id_industri';

    protected $guarded = [];

    public function siswa(): HasOne
    {
        return $this->hasOne(AjuanPkl::class, 'id_user', 'id');
    }
}
