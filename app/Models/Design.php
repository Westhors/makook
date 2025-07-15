<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $casts = [
        'scarf_embroidery' => 'array',
    ];

    public function robe()
    {
        return $this->belongsTo(Robe::class);
    }

    public function hood()
    {
        return $this->belongsTo(Hood::class);
    }

    public function scarf()
    {
        return $this->belongsTo(Scarf::class);
    }
}
