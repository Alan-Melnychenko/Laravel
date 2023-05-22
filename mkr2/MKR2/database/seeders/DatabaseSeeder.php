<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Manufacturer;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Заповнення таблиці товарів даними
        Product::create([
            'name' => 'Товар 1',
            'manufacturer' => 'Виробник 1',
            'price' => 10.99,
            'manufacturing_date' => '2022-01-01',
        ]);

        Product::create([
            'name' => 'Товар 2',
            'manufacturer' => 'Виробник 2',
            'price' => 15.99,
            'manufacturing_date' => '2022-02-01',
        ]);

        Product::create([
            'name' => 'Товар 3',
            'manufacturer' => 'Виробник 3',
            'price' => 20.99,
            'manufacturing_date' => '2022-03-01',
        ]);

        // Заповнення таблиці виробників даними
        Manufacturer::create([
            'brand' => 'Виробник 1',
            'country' => 'Країна 1',
            'contact_phone' => '123456789',
            'email' => 'manufacturer1@example.com',
        ]);

        Manufacturer::create([
            'brand' => 'Виробник 2',
            'country' => 'Країна 2',
            'contact_phone' => '987654321',
            'email' => 'manufacturer2@example.com',
        ]);
    }
}
