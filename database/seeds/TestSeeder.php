<?php

use Illuminate\Database\Seeder;
use App\Test;
class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::create(['name'=>'PCR-LAMP','manufacturer'=>'meuDNA','due'=>'2021-12-27 00:00:00','test_result_time'=>1440,'quantity'=>10,'price'=>169.00,'requirements'=>'Sem pré-requisitos']);
        Test::create(['name'=>'Antígeno','manufacturer'=>'Butantan','due'=>'2021-11-05 00:00:00','test_result_time'=>15,'quantity'=>15,'price'=>279.00,'requirements'=>'Indicada nos primeiros 7 dias de sintomas']);
        Test::create(['name'=>'Sorologia','manufacturer'=>'GENOMICA','due'=>'2021-03-27 00:00:00','test_result_time'=>15,'quantity'=>70,'price'=>109.50,'requirements'=>'Indicado a partir do décimo dia de início dos sintomas']);
    }
}
