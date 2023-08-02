<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(AttributeType::class, 'attribute_type_id', 'id');
    }
}
