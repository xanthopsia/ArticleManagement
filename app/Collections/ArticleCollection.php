<?php

declare(strict_types=1);

namespace App\Collections;

use App\Models\Article;

class ArticleCollection
{
    private array $articles = [];

    public function __construct(array $articles = [])
    {
        foreach ($articles as $article) {
            if (!$article instanceof Article) {
                continue;
            }
            $this->addArticle($article);
        }
    }

    public function addArticle(Article $article): void
    {
        $this->articles[] = $article;
    }

    public function getAllArticles(): array
    {
        return $this->articles;
    }
}