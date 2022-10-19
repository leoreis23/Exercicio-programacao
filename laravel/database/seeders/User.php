<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_tipo_de_animal')->insert([
            'descricao' => 'cachorro'
            
        ]);
        DB::table('_tipo_de_animal')->insert([
            'descricao' => 'gato'
            
        ]);
        DB::table('_tipo_de_animal')->insert([
            'descricao' => 'Passaro'
            
        ]);
        DB::table('_tipo_de_animal')->insert([
            'descricao' => 'Coelho'
            
        ]);
    }
}
