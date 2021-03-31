<?php

use Illuminate\Database\Seeder;
use App\Lyrics;

class LyricsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        for ($i=0; $i < 15; $i++) { 

            Lyrics::create([
                'lyrics' => str_random(100),
                'title' => 'Sample Song '.str_random(4),
                'artist' => str_random(6).' Singer '
            ]);
        }
    }
}
