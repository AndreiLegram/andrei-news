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
        DB::table('categories')->insert([
            [
                'name' => "Crimes",
                'description' => "Roubos, furtos, etc",
                'active' => 1
            ],
            [
                'name' => "Economia",
                'description' => "Empresas, investimentos e mais",
                'active' => 1
            ],
            [
                'name' => "Política",
                'description' => "Leis, discursos, entre outros",
                'active' => 0
            ],
            [
                'name' => "Arte",
                'description' => "Músicos, atores e outros",
                'active' => 0
            ]
        ]);
    }
}
