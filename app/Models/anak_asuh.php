<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anak_asuh extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_pengasuhs', 'nama_anak', 'jk', 'tgl_lahir', 'status'];
    protected $visible = ['id', 'id_pengasuhs', 'nama_anak', 'jk', 'tgl_lahir', 'status'];

    public $timestamps = true;

    public function pengasuh()
    {
        return $this->hasMany('App\Models\anak_asuh', 'id_pengasuhs');
    }
}
