<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'judul',
        'isi',
        'image',
        'image2',
        'image3',
        'image4',
        'image5',
        'link_dokumentasi',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // Atur tipe data primary key sebagai string
    public $incrementing = false; // Nonaktifkan incrementing ID
    public $timestamps = true; // Menonaktifkan fitur timestamps

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
