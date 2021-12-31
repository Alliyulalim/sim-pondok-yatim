<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengasuh extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_pengasuhs', 'nama_pengasuh', 'jk', 'tgl_lahir'];
    protected $visible = ['id', 'id_pengasuhs', 'nama_pengasuh', 'jk', 'tgl_lahir'];

    public $timestamps = true;

    public function pengasuh()
    {
        return $this->hasMany('App\Models\pengasuh');
    }
}
