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
        Product::create([
            'name' => 'One Pack',
            'slug' => 'one-pack',
            'details' => '1 frame and 5 protective shields',
            'price' => 15,
            'description' => 'This is super innovative faceshield which provide not only comfort but also a proffesional protection. It comes with 5 protective shields tha can be adjust within seconds. This particualr pack is suitable for an individual or a small group of people.',
        ]);

        Product::create([
            'name' => 'Supre Pack',
            'slug' => 'super-pack',
            'details' => '12 frames and 36 protective shields',
            'price' => 80,
            'description' => 'This is a our family pack to secure a safe trip or safe working environment for all family members. It comes with 12 frames and 36 protective shields that can be adjust within seconds.',
        ]);

        Product::create([
            'name' => 'Mega Pack',
            'slug' => 'mega-pack',
            'details' => '120 frames and 360 protective shields',
            'price' => 900,
            'description' => 'Want to get enough faceshields for your employes, no problem. Here is our Mega Pack for big corpurations and industries. It comes with 120 frames and 360 protective shields that will do the job perfectly and for a long time!',
        ]);
    }
}
