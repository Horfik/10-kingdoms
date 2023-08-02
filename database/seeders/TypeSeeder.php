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
            'category' => 1,
            'name' => 'Харизма',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Манипулирование',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Проницательность',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Обман',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Храбрость',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Внимание',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Интеллект',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Науки',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Культура',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Навыки',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Телосложение',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Защита',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Ловкость',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Нападение',
        ]);
        Type::insert([
            'category' => 1,
            'name' => 'Скрытность',
        ]);
        
    }
}
