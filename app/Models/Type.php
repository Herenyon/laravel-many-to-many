<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $guarded = ['slug'];

    public function types()
    {
        return $this->hasMany(Portf::class);
    }
}
