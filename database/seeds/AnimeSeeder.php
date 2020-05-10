<?php

use Illuminate\Database\Seeder;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('animes')->insert(array([
            'anime_name' => 'A Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2002/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'B Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2010/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 0,
            'anime_votes' => 50
        ],[
            'anime_name' => 'C Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2001/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 7,
            'anime_votes' => 50
        ],[
            'anime_name' => 'D Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2020/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 8,
            'anime_votes' => 100
        ],[
            'anime_name' => 'F Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2002/12/12',
            'anime_description' => 'Some description...',
            'anime_rating' => 0,
            'anime_votes' => 0
        ],[
            'anime_name' => 'G Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'H Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'I Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'J Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'K Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'L Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'M Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'N Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'A1 Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => '1 Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => '# Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'O Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'P Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'Q Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'R Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'T Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/9/9',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'Z Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2008/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'W Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'S Anime',
            'anime_image' => 'nocover.jpg',
            'anime_featured_image' => 'nofeatured.jpg',
            'anime_release_date' => '2015/4/9',
            'anime_description' => 'Some description...',
            'anime_rating' => 10,
            'anime_votes' => 1000
        ],[
            'anime_name' => 'Anime Move',
            'anime_image' => 'none',
            'anime_featured_image' => 'none',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 8,
            'anime_votes' => 170
        ],[
            'anime_name' => 'U Anime',
            'anime_image' => 'none',
            'anime_featured_image' => 'none',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ],[
            'anime_name' => 'V Anime',
            'anime_image' => 'none',
            'anime_featured_image' => 'none',
            'anime_release_date' => '2000/1/2',
            'anime_description' => 'Some description...',
            'anime_rating' => 5,
            'anime_votes' => 100
        ])
        );
    }
}
