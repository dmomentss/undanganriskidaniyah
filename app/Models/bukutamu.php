<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukutamu extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'kehadiran', 'pesan'];
    // Mendefinisikan mutator untuk kolom "kehadiran"
    public function setKehadiranAttribute($value)
    {
        $this->attributes['kehadiran'] = strtolower($value);
    }

    // Mendefinisikan aksesors untuk kolom "kehadiran"
    public function getKehadiranAttribute($value)
    {
        return ucfirst($value);
    }
}
