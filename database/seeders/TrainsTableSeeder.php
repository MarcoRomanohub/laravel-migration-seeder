<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $data = [
            [
                "company" => 'Trenitalia',
                "slug" => 'Trenitalia',
                "departure_station" => 'Roma Termini',
                "arrival_station" => 'Milano Centrale',
                "departure_time" => 12.30,
                "arrival_time" => 17.00,
                "code" => '123456789012',
                "number_of_carriages" => '12',
                "deleted" => false
            ]
        ];

        foreach ($data as $item) {
            $new_train = new Train();
            $new_train->company = $item['company'];
            $new_train->slug = $this->generateSlug($new_train->company);
            $new_train->departure_station = $item['departure_station'];
            $new_train->arrival_station = $item['arrival_station'];
            $new_train->departure_time = $item['departure_time'];
            $new_train->arrival_time = $item['arrival_time'];
            $new_train->code = $item['code'];
            $new_train->number_of_carriages = $item['number_of_carriages'];
            $new_train->deleted = $item['deleted'];

            // $new_train-> save();
        }


        // $new_train = new Train();
        // $new_train->company = 'Trenitalia';
        // $new_train->slug = 'Trenitalia';
        // $new_train->departure_station = 'Roma Termini';
        // $new_train->arrival_station = 'Milano Centrale';
        // $new_train->departure_time = 12.30;
        // $new_train->arrival_time = 17.00;
        // $new_train->code = '123456789012';
        // $new_train->number_of_carriages = '12';
        // // $new_train->on_time = 1;
        // $new_train->deleted = false;


        dump($new_train);
    }

    private function generateSlug($string)
    {
        $slug = Str::slug($string, '-');
        $original_slug = $slug;

        $exists = Train::where('slug', $slug)->first;
        $c = 1;

        while ($exists) {
            $slug = $original_slug . '-' . $c;
            $exists = Train::where('slug', $slug)->first;
            $c++;
        }

        return $slug;
    }
}
