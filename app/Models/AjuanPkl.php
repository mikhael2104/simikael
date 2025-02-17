<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class AjuanPkl extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'ajuan_pkls';

    protected $primaryKey = 'id_ajuan';

    protected $guarded = [];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id_siswa');
    }

    public function industri(): BelongsTo
    {
        return $this->belongsTo(Industri::class, 'id_industri', 'id_industri');
    }
}
