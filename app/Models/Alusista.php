<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alusista extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // tabel
    protected $table = 'alusista';
}
