<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['html', 'css', 'database', 'mysql', 'sass', 'php'];
        foreach($tags as $tag){
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->slug = str::slug($newTag->name, '-');
            $newTag->save();
        }
    }
}
