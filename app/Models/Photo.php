<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'photos';
    protected $guarded = false;

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'theme_id', 'id');
    }
}
