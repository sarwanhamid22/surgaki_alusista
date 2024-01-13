<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat_operasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'riwayat';

    public function alusista()
    {
        return $this->belongsTo(Alusista::class);
    }
}
