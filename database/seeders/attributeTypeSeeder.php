<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AttributeType;

class attributeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttributeType::insert([
            'name' => 'Социальные'
        ]);
        AttributeType::insert([
            'name' => 'Ментальные'
        ]);
        AttributeType::insert([
            'name' => 'Физические'
        ]);
        
    }
}
