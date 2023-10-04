<?php

namespace App\Models;

class Post
{
   private static $blog_posts = [
        [
            "title" => "Laut Biru",
            "slug" => "Laut-Biru",
            "author" => "Dorrit",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dignissimos neque nostrum voluptas, aperiam laboriosam perferendis pariatur deleniti officiis consectetur voluptatem quis nam corrupti numquam quam possimus eligendi obcaecati itaque veritatis et, vero mollitia consequatur quibusdam excepturi. Dicta velit quasi expedita sit ut nostrum cumque natus quas architecto similique veniam hic, ab sapiente libero eos dolorem, blanditiis earum, sint fuga. Magni impedit repudiandae debitis at, soluta vero perferendis magnam dolor reprehenderit blanditiis accusantium, pariatur explicabo aspernatur incidunt quae est eligendi."
        ],
        [
            "title" => "Laut Hijau",
            "slug" => "Laut-Hijau",
            "author" => "Dorritoss",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dignissimos neque nostrum voluptas, aperiam laboriosam perferendis pariatur deleniti officiis consectetur voluptatem quis nam corrupti numquam quam possimus eligendi obcaecati itaque veritatis et, vero mollitia consequatur quibusdam excepturi. Dicta velit quasi expedita sit ut nostrum cumque natus quas architecto similique veniam hic, ab sapiente libero eos dolorem, blanditiis earum, sint fuga. Magni impedit repudiandae debitis at, soluta vero perferendis magnam dolor reprehenderit blanditiis accusantium, pariatur explicabo aspernatur incidunt quae est eligendi."
        ]
    ];

    public static function all () {
        return collect(self::$blog_posts);
    }
    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }





    public static function getTitle($slug) {//Laut-Biru
        $posts = static::all();
        $title = [];
        foreach ($posts as $p) {
            if ($p['slug'] === $slug) {
                $title = $p['title'];
            }
        }
        return $title;
    }
}