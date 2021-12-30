<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengasuh extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_pengasuh', 'jk', 'tgl_lahir'];
    protected $visible = ['id', 'nama_pengasuh', 'jk', 'tgl_lahir'];

    public $timestamps = true;

    public function anak_asuh()
    {
        return $this->hasMany('App\Models\pengasuh');
    }
}
