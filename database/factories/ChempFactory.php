<?php

namespace Database\Factories;

use App\Models\Templent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chemp>
 */
class ChempFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $arr = array( "a"=>"text", "b"=>"number", "c"=>"select", "d"=>"date" );
        $key = array_rand($arr);
        $type=$arr[$key];


        return [
            "type"=>$type,
            "value"=>fake()->word,
            "libel"=>fake()->word,
            "status"=>fake()->boolean,
            "postion"=>fake()->word,
            "oblige"=>fake()->boolean,
            'templent_id'=>Templent::all()->random()->id

        ];
    }
}
