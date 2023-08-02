<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::insert([
            'id' => 1,
            'category' => 1,
            'name' => 'Харизма',
        ]);
        Type::insert([
            'id' => 2,
            'category' => 1,
            'name' => 'Манипулирование',
        ]);
        Type::insert([
            'id' => 3,
            'category' => 1,
            'name' => 'Проницательность',
        ]);
        Type::insert([
            'id' => 4,
            'category' => 1,
            'name' => 'Обман',
        ]);
        Type::insert([
            'id' => 5,
            'category' => 1,
            'name' => 'Храбрость',
        ]);
        Type::insert([
            'id' => 6,
            'category' => 1,
            'name' => 'Внимание',
        ]);
        Type::insert([
            'id' => 7,
            'category' => 1,
            'name' => 'Интеллект',
        ]);
        Type::insert([
            'id' => 8,
            'category' => 1,
            'name' => 'Науки',
        ]);
        Type::insert([
            'id' => 9,
            'category' => 1,
            'name' => 'Культура',
        ]);
        Type::insert([
            'id' => 10,
            'category' => 1,
            'name' => 'Навыки',
        ]);
        Type::insert([
            'id' => 11,
            'category' => 1,
            'name' => 'Телосложение',
        ]);
        Type::insert([
            'id' => 12,
            'category' => 1,
            'name' => 'Защита',
        ]);
        Type::insert([
            'id' => 13,
            'category' => 1,
            'name' => 'Ловкость',
        ]);
        Type::insert([
            'id' => 14,
            'category' => 1,
            'name' => 'Нападение',
        ]);
        Type::insert([
            'id' => 15,
            'category' => 1,
            'name' => 'Скрытность',
        ]);
        
    }
}
