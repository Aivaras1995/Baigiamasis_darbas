<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Status;
use Illuminate\Database\Seeder;

class CategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [           [
                'name' => 'Krepšinis',
                'slug' => 'krepšinis',
                'description' => 'Krepšiniui žaisti skirtas inventorius',
                'image' => '/img/categories/category-1.jpg',
            ],
            [
                'name' => 'Futbolas',
                'slug' => 'futbolas',
                'description' => 'Futbolui žaisti skirtas inventorius',
                'image' => '/img/categories/category-2.jpg',
            ],
            [
                'name' => 'Lengvoji atletika',
                'slug' => 'lengvoji atletika',
                'description' => 'Įranga bei priemonės užsiimant lengvąją atletika',
                'image' => '/img/categories/category-3.jpg',
            ],
            [
                'name' => 'Tinklinis',
                'slug' => 'tinklinis',
                'description' => 'Tinkliniui žaisti skirtas inventorius',
                'image' => '/img/categories/category-4.jpg',
            ],
            [
                'name' => 'Rankinis',
                'slug' => 'rankinis',
                'description' => 'Rankiniui žaisti skirtas inventorius',
                'image' => '/img/categories/category-5.jpg',
            ],
            [
                'name' => 'Sunkioji atletika',
                'slug' => 'sunkioji atletika',
                'description' => 'Sunkios atletikos įranga',
                'image' => '/img/categories/category-6.jpg',
            ],
            [
                'name' => 'Joga ir pilates',
                'slug' => 'joga ir pilates',
                'description' => 'Inventorius užsiimantiems joga bei pilates',
                'image' => '/img/categories/category-7.jpg',
            ],
            [
                'name' => 'Žiemos sportas',
                'slug' => 'žiemos sportas',
                'description' => 'Įranga užsiimantiems žiemos sportu',
                'image' => '/img/categories/category-8.jpg',
            ],
            [
                'name' => 'Aerobika',
                'slug' => 'aerobika',
                'description' => 'Aerobikos inventorius',
                'image' => '/img/categories/category-9.jpg',
            ],
            [
                'name' => 'Matavimo prietaisai',
                'slug' => 'matavimo prietaisai',
                'description' => 'Matavimo prietaisų inventorius',
                'image' => '/img/categories/category-10.jpg',
            ],
            [
                'name' => 'Kitas inventorius',
                'slug' => 'kitas inventorius',
                'description' => 'skirtinų sportinių kategorijų įranga',
                'image' => '/img/categories/category-11.jpg',
            ],
        ];
        foreach ($categories as $cat) {

            Category::updateOrCreate(
                [
                    'name' => $cat['name'],
                    'slug' => $cat['slug'],
                ],
                [
                    'description' => $cat['description'],
                    'image' => $cat['image'],
                    'status_id' => Status::where(['name' => 'Aktyvus', 'type' => 'categories'])->first()->id,
                    'parent_id' => null,
                ]
            );
        }
    }
}
