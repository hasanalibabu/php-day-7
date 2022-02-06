<?php


namespace App\classes;


class Blog
{
    protected $blog;

    public function getAllBlog()
    {
        return [
          0 => [
            'title'   => 'A New Blog',
            'description'   => 'Blog description',
              'author'    => 'hasan ali',
              'image'  => 'a1.jpg'
          ],
            1 => [
                'title'   => 'Author Blog',
                'description'   => 'Author blog description',
                'author'    => 'ali',
                'image'  => 'a2.jpg'
            ],
            2 => [
                'title'   => 'Blog',
                'description'   => 'Blog description',
                'author'    => 'hasan',
                'image'  => 'a3.jpg'
            ],
        ];
    }
}