<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentsSeeders2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<100; $i++) {
            $phone_random = random_int (1000000000, 9999999999);
            DB::table('students')->insert (
                [
                    'nome'=>Str::random(10),
                    'cognome'=>Str::random(10),
                    'telefono'=>$phone_random,
                    'email'=>Str::random(10).'@gmail.com'
                ]
            );
        }
       
    }
}
