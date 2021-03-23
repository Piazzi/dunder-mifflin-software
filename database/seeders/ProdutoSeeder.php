<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produto')->insert([
            'nome' => Str::random(10),
            'descricao' => Str::random(50),
            'valor' =>  10,
            'categoria_id' => 1,
            'dimensao' => '10 x 10 x 10'
        ]);
    }
}
