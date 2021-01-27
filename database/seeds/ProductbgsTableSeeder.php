<?php

use App\Productbg;
use Illuminate\Database\Seeder;

class ProductbgsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productbg::create([
            'name' => 'One Pack',
            'slug' => 'one-pack',
            'details' => 'Съдържа 1 рамка и 5 защитни плаки',
            'price' => 15,
            'description' => 'За индивидуална употреба и малки групи от хора.',
        ]);

        Productbg::create([
            'name' => 'Super Pack',
            'slug' => 'super-pack',
            'details' => 'Съдържа 12 рамки и 36 защитни плаки',
            'price' => 80,
            'description' => 'Перфектна за цялото семейство и за малкият бизнес.',
        ]);

        Productbg::create([
            'name' => 'Mega Pack',
            'slug' => 'mega-pack',
            'details' => 'Съдържа 120 рамки и 360 защитни плаки',
            'price' => 900,
            'description' => 'Нашата кутия за големи компании и институции: училища, университети и др.',
        ]);
    }
}
