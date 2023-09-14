<?php

namespace Database\Seeders;

use App\Models\guru;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class guruseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        guru::insert([
            [
            "kodeguru"=>"wkwkw",
            "namaguru"=>"sonny boy",
            "mapel"=>"japanese",
            ],
       ]);
    }
}
