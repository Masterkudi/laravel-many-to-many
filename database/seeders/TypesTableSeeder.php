<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Support\Testing\Fakes\Fake;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void {
        $types = ['Front-End', 'Back-End', 'Full-Stack', 'Design', 'DevOps'];

        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->type = $type;
            $new_type->save();
        }
    }
}
