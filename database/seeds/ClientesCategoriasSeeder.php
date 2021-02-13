<?php

use Illuminate\Database\Seeder;
use App\ClientesCategorias;

class ClientesCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ClientesCategorias::class, 5)->create();
    }
}
