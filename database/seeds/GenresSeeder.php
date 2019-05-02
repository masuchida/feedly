<?php

use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->truncate();

        $genres = [
            1 => ['name' => 'IT・テクノロジー'],
            2 => ['name' => 'エンタメ'],
            3 => ['name' => '政治・経済'],
            4 => ['name' => '時事ネタ'],
            99 => ['name' => 'その他'],
        ];

        foreach ($genres as $id => $genre) {
            $tmp = new App\Models\Genre();
            $tmp->id = $id;
            $tmp->name = $genre['name'];
            $tmp->save();
        }
    }
}
