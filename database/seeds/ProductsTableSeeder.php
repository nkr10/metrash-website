<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //car 1
        Product::create([
            'name' => 'Tata Tiago',
            'slug' => 'tata-tiago',
            'image_path' => 'tata-tiago.png',

        ]);

        //car 2
        Product::create([
            'name' => 'Maruti Suzuki Alto 800',
            'slug' => 'maruti-suzuki-alto-800',
            'image_path' => 'maruti-suzuki-alto-800.png',

        ]);

        //car 3
        Product::create([
            'name' => 'Hyundai Elite i20',
            'slug' => 'hyundai-elite-i20',
            'image_path' => 'hyundai-elite-i20.png',

        ]);

        //car 4
        Product::create([
            'name' => 'Maruti Suzuki Baleno',
            'slug' => 'maruti-suzuki-baleno',
            'image_path' => 'maruti-suzuki-baleno.png',

        ]);

        //car 5
        Product::create([
            'name' => 'Toyota Glanza',
            'slug' => 'toyota-glanza',
            'image_path' => 'toyota-glanza.png',

        ]);

        //car 6
        Product::create([
            'name' => 'Maruti Suzuki Wagon R',
            'slug' => 'maruti-suzuki-wagon-r',
            'image_path' => 'maruti-suzuki-wagon-r.png'

        ]);

        //car 7
        Product::create([
            'name' => 'Hyundai Grand i10 Nios',
            'slug' => 'hyundai-grand-i10-nios',
            'image_path' => 'hyundai-grand-i10-nios.png',

        ]);

        //car 8
        Product::create([
            'name' => 'Tata Altroz',
            'slug' => 'tata-altroz',
            'image_path' => 'tata-altroz.png',

        ]);

        //car 9
        Product::create([
            'name' => 'Tata Tiago NRG',
            'slug' => 'tata-tiago-nrg',
            'image_path' => 'tata-tiago-nrg.png',

        ]);

        //car 10
        Product::create([
            'name' => 'Maruti Suzuki Celerio',
            'slug' => 'maruti-suzuki-celerio',
            'image_path' => 'maruti-suzuki-celerio.jpg',

        ]);



        //source 1: https://www.carandbike.com/news/types-of-cars-1450327
        //source 2: https://www.carandbike.com/new-cars/hatchback-cars

    }
}
