<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images() {
        return $this->morphMany(Pictures::class, 'imageable');
    }

    public function getBanner($val) {
        $pix = $this->images()->where('order', $val)->first();
        return $pix ? $pix->url : '';
    }
}
