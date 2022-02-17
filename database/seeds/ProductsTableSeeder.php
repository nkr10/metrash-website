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
        //====================     HATCHBACK     ====================
        //car 1
        Product::create([
            'name' => 'Tata Tiago',
            'seating_capacity' => '5',
            'transmission' => 'manual',
            'slug' => 'tata-tiago',
            'image_path' => 'tata-tiago.png',
        ])->categories()->attach(1);

        //car 2
        Product::create([
            'name' => 'Maruti Suzuki Alto 800',
            'seating_capacity' => '5',
            'transmission' => 'manual',
            'slug' => 'maruti-suzuki-alto-800',
            'image_path' => 'maruti-suzuki-alto-800.png',
        ])->categories()->attach(1);

        //car 3
        Product::create([
            'name' => 'Hyundai Elite i20',
            'seating_capacity' => '5',
            'transmission' => 'manual',
            'slug' => 'hyundai-elite-i20',
            'image_path' => 'hyundai-elite-i20.png',
        ])->categories()->attach(1);

        //car 4
        Product::create([
            'name' => 'Maruti Suzuki Baleno',
            'seating_capacity' => '5',
            'transmission' => 'manual',
            'slug' => 'maruti-suzuki-baleno',
            'image_path' => 'maruti-suzuki-baleno.png',
        ])->categories()->attach(1);

        //car 5
        Product::create([
            'name' => 'Toyota Glanza',
            'seating_capacity' => '5',
            'transmission' => 'manual',
            'slug' => 'toyota-glanza',
            'image_path' => 'toyota-glanza.png',
        ])->categories()->attach(1);

        //car 6
        Product::create([
            'name' => 'Maruti Suzuki Wagon R',
            'seating_capacity' => '5',
            'transmission' => 'manual',
            'slug' => 'maruti-suzuki-wagon-r',
            'image_path' => 'maruti-suzuki-wagon-r.png'
        ])->categories()->attach(1);

        //car 7
        Product::create([
            'name' => 'Hyundai Grand i10 Nios',
            'seating_capacity' => '5',
            'transmission' => 'manual',
            'slug' => 'hyundai-grand-i10-nios',
            'image_path' => 'hyundai-grand-i10-nios.png',
        ])->categories()->attach(1);

        //car 8
        Product::create([
            'name' => 'Tata Altroz',
            'seating_capacity' => '5',
            'transmission' => 'manual',
            'slug' => 'tata-altroz',
            'image_path' => 'tata-altroz.png',
        ])->categories()->attach(1);

        //car 9
        Product::create([
            'name' => 'Tata Tiago NRG',
            'seating_capacity' => '5',
            'transmission' => 'manual',
            'slug' => 'tata-tiago-nrg',
            'image_path' => 'tata-tiago-nrg.png',
        ]);

        //car 10
        Product::create([
            'name' => 'Maruti Suzuki Celerio',
            'seating_capacity' => '5',
            'transmission' => 'automatic',
            'slug' => 'maruti-suzuki-celerio',
            'image_path' => 'maruti-suzuki-celerio.jpg',
        ])->categories()->attach(1);


        //====================     SEDAN     ====================
        //car 11
        Product::create([
            'name' => 'Skoda Octavia',
            'seating_capacity' => '5',
            'transmission' => 'automatic',
            'slug' => 'skoda-octavia',
            'image_path' => 'skoda-octavia.png',
        ])->categories()->attach(2);

        //car 12
        Product::create([
            'name' => 'Honda City',
            'seating_capacity' => '5',
            'transmission' => 'manual',
            'slug' => 'honda-city',
            'image_path' => 'honda-city.jpg',
        ])->categories()->attach(2);

        //car 13
        Product::create([
            'name' => 'Volkswagen Taigun',
            'seating_capacity' => '5',
            'transmission' => 'automatic',
            'slug' => 'volkswagen-taigun',
            'image_path' => 'volkswagen-taigun.png',
        ])->categories()->attach(2);

        //car 14
        Product::create([
            'name' => 'Tata Tigor EV',
            'seating_capacity' => '5',
            'transmission' => 'automatic',
            'slug' => 'tata-tigor-ev',
            'image_path' => 'tata-tigor-ev.jpg',
        ])->categories()->attach(2);

        //car 15
        Product::create([
            'name' => 'Rolls-Royce Phantom',
            'seating_capacity' => '4',
            'transmission' => 'automatic',
            'slug' => 'rolls-royce-phantom',
            'image_path' => 'rolls-royce-phantom.png',
        ])->categories()->attach(2);

        //====================     MPV     ====================



        //source 1: https://www.carandbike.com/news/types-of-cars-1450327
        //source 2: https://www.carandbike.com/new-cars/hatchback-cars

    }
}
