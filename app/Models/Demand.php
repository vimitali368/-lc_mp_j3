<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Demand extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'demands';
    protected $guarded = false;

    const STATUS_IN_PROGRESS = 1;
    const STATUS_DONE = 2;

    public static function getStatuses() {
        return [
            self::STATUS_IN_PROGRESS => 'В процессе',
            self::STATUS_DONE => 'Завершенно'
        ];
    }

}
