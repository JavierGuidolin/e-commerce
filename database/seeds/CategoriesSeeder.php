<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            'Arte & Fotografía',
            'Biografía',
            'Negocios',
            'Cocina',
            'Humor',
            'Historia',
            'Religion',
            'Sci-fi & Fantasia',
            'Auto-ayuda',
            'Misterio & Crimen',
            'Deportes',
        ];

        foreach ($categories as $categorie) {

            DB::table('categories')->insert([
                'name' => $categorie,
            ]);

        }



    }
}
