<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    use HasFactory;
    protected $visible = ['id', 'judul', 'image', 'isi', 'tgl_kegiatan'];
    protected $fillable = ['id', 'judul', 'image', 'isi', 'tgl_kegiatan'];
    public $timestamps = true;

    public function kegiatan()
    {
        return $this->belongsTo('App\Models\kegiatan', 'id');
    }

    public function image()
    {
        if ($this->image && file_exists(public_path('images/kegiatan/' . $this->image))) {
            return asset('images/kegiatan/' . $this->image);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('images/kegiatan/' . $this->image))) {
            return unlink(public_path('images/kegiatan/' . $this->image));
        }
    }
}
