<?php

use Illuminate\Database\Seeder;
use App\Proprietario;

class proprietarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Proprietario::create([
            'name' => 'Gustavo',
            'lastName' => 'Lopes',
            'phone' => '3213213',
            'cnh' => 'asdadw'
        ]);  
        Proprietario::create([
            'name' => 'Sidi',
            'lastName' => 'jr',
            'phone' => '23123123',
            'cnh' => 'asdwasx'
        ]);  
    }
}
