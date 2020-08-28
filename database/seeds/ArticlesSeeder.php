<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();
        DB::table('articles_lang')->truncate();
        $articles  = json_decode(file_get_contents(resource_path('seeds/Article/article.json')),true);
        $articlesLang  = json_decode(file_get_contents(resource_path('seeds/Article/articlelang.json')), true);

        foreach ($articles as $key => $article) {
            if ($key !== 0) {
                $articleModel =   \App\Models\Article::firstOrNew(['id' => $key]);
                $articleModel->link = $article['link'];
                $articleModel->status = $article['status'];
                $articleModel->publication_at = $article['publication_at'];
                $data = $articleModel->save();

                $articleLangModel =   \App\Models\ArticleLang::firstOrNew(['article_id' => $articleModel->id]);

                $articleLangModel->article_id = $articleModel->id;
                $articleLangModel->lang = 'en';
                $articleLangModel->title = $articlesLang[$key]['title'];
                $articleLangModel->description = $articlesLang[$key]['description'];
                $articleLangModel->content = $articlesLang[$key]['content'];
                $articleLangModel->save();
            }




        }

    }
}
