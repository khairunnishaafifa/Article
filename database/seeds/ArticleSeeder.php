<?php

use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();
        $json    = File::get('database/seeds/json/articles.json');
        $datas   = json_decode($json);

        foreach($datas as $data)
        {
            Article::firstOrCreate([
                'id'            => $data->id,
                'title'         => $data->title,
                'description'   => $data->description,
                'author'        => $data->author    
            ]);
        }
    }
}
