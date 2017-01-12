<?php

use Illuminate\Database\Seeder;

use App\Trabalhos;

class TrabalhosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTrabalhos();
    }

    private function createTrabalhos()
    {
        Trabalhos::create([
            'autor' => 'João Marcus',
            'titulo' => 'Ka ke ki ko ku',
            'chaves' => 'bla ble bli bl ? blue?',
            'agencias' => 'Php design pattern',
            'idioma' => 'Francês',
            'trabalho' => 'MUSSUM APUSSUM KUUMM BBABAB SJJJJJ BLÁA BÁA BLUEE ~~ ** 000 == - ;;Z. A]~[1 #@%&*('
        ]);
    }
}
