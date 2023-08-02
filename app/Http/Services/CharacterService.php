<?php

namespace App\Http\Services;

use App\Http\Controllers\Controller;
use App\Models\Attribute;

class CharacterService extends Controller
{
    public function storeAttributes($character)
    {
        for($i = 1; $i <= 5; $i++)
        {
            Attribute::create([
                'character_id' => $character,
                'quality' => 1,
                'attribute_type_id' => 1,
                'type_id' => $i
            ]);
        }
        for($i = 6; $i <= 10; $i++)
        {
            Attribute::create([
                'character_id' => $character,
                'quality' => 1,
                'attribute_type_id' => 2,
                'type_id' => $i
            ]);
        }
        for($i = 11; $i <= 15; $i++)
        {
            Attribute::create([
                'character_id' => $character,
                'quality' => 1,
                'attribute_type_id' => 3,
                'type_id' => $i
            ]);
        }
    }

    public function attributesResource($attributes)
    {
        $temp = [];
        foreach($attributes as $attribute)
        {
            $temp[$attribute->attribute_type_id]['name'] = $attribute->category->name;
            $temp[$attribute->attribute_type_id]['attr'][] = [
                'id' => $attribute->id,
                'name' => $attribute->type->name,
                'quality' => $attribute->quality
            ];
        }
        return $temp;
    }
}
