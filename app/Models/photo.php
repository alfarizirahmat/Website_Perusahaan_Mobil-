<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'path',
        'desc',
    ];

    public function destroyPhotos()
    {
        // Logika penghapusan tambahan bisa ditambahkan di sini
        $this->delete('path');
    }
}
