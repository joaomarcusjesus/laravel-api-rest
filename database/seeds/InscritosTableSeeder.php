<?php

use Illuminate\Database\Seeder;

use App\Inscritos;


class InscritosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createInscritos();
    }

    private function createInscritos()
    {
        Inscritos::create([
            'nome' => 'João Marcus',
            'cpf' => '701-255-904-30',
            'email' => 'joao.japa@hotmail.com',
            'titulacao' => 'Ninja do PHP',
            'instituicao' => 'Unipê / Home',
            'perfil' => 'Alucionado',
            'telefoneFixo' => '(83) 32339442',
            'telefoneCelular' => '(83) 988994981',
            'pagamento' => '1200,00 + VT',
            'login' => 'bla',
            'password' => 'bla'
        ]);
    }
}
