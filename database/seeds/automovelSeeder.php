<?php

use Illuminate\Database\Seeder;
use App\Veiculo;

class automovelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Veiculo::create([
            'placa' => 'asdaw',
            'descricao' => 'Carro sla1',
            'cor' => "azul",
            'km' => 1000,
            'ano' => 2018,
            'proprietario_id' => 1
        ]);

        Veiculo::create([
            'placa' => 'assaxx',
            'descricao' => 'Carro sla2',
            'cor' => "azul",
            'km' => 1000,
            'ano' => 2018,
            'proprietario_id' => 2
        ]);
    }
}
