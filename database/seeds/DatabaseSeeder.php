<?php

use Illuminate\Database\Seeder;
use Illuminate\App\pnexam;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            [
                "first_name" => "Jakeniel",
                "middle_name"=> "Remitre",
                "last_name"=> "Erim",
            ],
            [
                "first_name" => "Raul",
                "middle_name"=> "Empiales",
                "last_name"=>"Flores",
            ],
            [
                "first_name" => "Grace",
                "middle_name"=> "Buging",
                "last_name"=> "Laborada",
            ],
            [
                "first_name" => "Mellyne",
                "middle_name"=> "Rebuyas",
                "last_name"=> "Nadela",
            ],
            [
                "first_name" => "Abdul",
                "middle_name"=> "Aziz",
                "last_name"=> "Mamarinta",
            ],
        ];
       

        for ($i=0; $i<count($names); $i++){
            DB::table('names')->insert($names[$i]);
        }
      
    }
}
