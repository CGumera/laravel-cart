<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'image_path' => 'https://cdn.waterstones.com/bookjackets/large/9780/0082/9780008238094.jpg',
            'title' => 'A Knight of the Seven Kingdoms',
            'description' => 'A Knight of The Seven Kingdoms compiles the first three official prequel novellas to George R.R. Martin\'s ongoing masterwork, A Song of Ice and Fire.',
            'price' => '435.50'
        ]);
        $product->save();

        $product = new \App\Product([
            'image_path' => 'https://cdn.waterstones.com/bookjackets/large/9780/0074/9780007448036.jpg',
            'title' => 'A Game of Thrones - A Song of Ice and Fire 1',
            'description' => 'Summers span decades. Winter can last a lifetime. And the struggle for the Iron Throne has begun.',
            'price' => '630.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'image_path' => 'https://cdn.waterstones.com/bookjackets/large/9780/0074/9780007447831.jpg',
            'title' => 'A Clash of Kings - A Song of Ice and Fire 2',
            'description' => 'From the ancient citadel of Dragonstone to the forbidding lands of Winterfell, chaos reigns as pretenders to the Iron Throne of the Seven Kingdoms stake their claims through tempest, turmoil and war.',
            'price' => '500.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'image_path' => 'https://cdn.waterstones.com/bookjackets/large/9780/0074/9780007447848.jpg',
            'title' => 'A Storm of Swords: Part 1 Steel and Snow - A Song of Ice and Fire 3',
            'description' => 'The Seven Kingdoms are divided by revolt and blood feud. In the northern wastes, a horde of hungry, savage people steeped in the dark magic of the wilderness is poised to invade the Kingdom of the North where Robb Stark wears his new-forged crown. And Robb\'s defences are ranged against the South, the land of the cunning and cruel Lannisters, who have his younger sisters in their power.',
            'price' => '500.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'image_path' => 'https://cdn.waterstones.com/bookjackets/large/9780/0074/9780007447855.jpg',
            'title' => 'A Storm of Swords: Part 2 Blood and Gold - A Song of Ice and Fire 3',
            'description' => 'Robb Stark may be King in the North, but he must bend to the will of the old tyrant Walder Frey if he is to hold his crown. And while his youngest sister, Arya, has escaped the clutches of the depraved Cersei Lannister and her son, the capricious boy-king Joffrey, Sansa Stark remains their captive.',
            'price' => '500.00'
        ]);
        $product->save();
    }
}
