<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Muhammad Haris",
        "email" => "muhammadharis62030@gmail.ac.id",
        "image" => "haris.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Haris",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ducimus omnis animi incidunt consectetur cum, quidem voluptatum, fugit earum veritatis fugiat! Labore sed ad excepturi. Recusandae 
            quibusdam iusto non, consequatur ab eos veniam dolores esse officia animi 
            assumenda ratione, alias beatae ipsam vitae voluptates accusantium tempore praesentium aspernatur deleniti! Minima eos eaque est iste corporis? Esse nisi, ratione nobis aspernatur in veniam repellendus nesciunt blanditiis odit. Quod assumenda recusandae, ipsa rerum commodi ea unde sit ipsum, eum, nemo ab corporis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Haris2",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quasi, excepturi magni labore obcaecati minus enim esse perferendis quibusdam veniam, exercitationem laboriosam eos cupiditate iure consectetur quam, 
            deleniti maiores doloremque rem ipsa. Repellat iste voluptate voluptates vero numquam repellendus adipisci atque quos nemo hic molestiae velit et in quod, 
            necessitatibus at laborum voluptatibus illo odit perspiciatis, sapiente consequatur. Eaque quas blanditiis numquam provident modi cum aut velit laboriosam sint tempore 
            accusamus rem ex repellat ducimus, iure consectetur ad ea reprehenderit ut porro quasi? Perspiciatis minima dolore ut sunt aliquam id dolorem quos, ab officia velit, blanditiis temporibus itaque, sed ipsum?"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post 
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Haris",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ducimus omnis animi incidunt consectetur cum, quidem voluptatum, fugit earum veritatis fugiat! Labore sed ad excepturi. Recusandae 
            quibusdam iusto non, consequatur ab eos veniam dolores esse officia animi 
            assumenda ratione, alias beatae ipsam vitae voluptates accusantium tempore praesentium aspernatur deleniti! Minima eos eaque est iste corporis? Esse nisi, ratione nobis aspernatur in veniam repellendus nesciunt blanditiis odit. Quod assumenda recusandae, ipsa rerum commodi ea unde sit ipsum, eum, nemo ab corporis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Haris2",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quasi, excepturi magni labore obcaecati minus enim esse perferendis quibusdam veniam, exercitationem laboriosam eos cupiditate iure consectetur quam, 
            deleniti maiores doloremque rem ipsa. Repellat iste voluptate voluptates vero numquam repellendus adipisci atque quos nemo hic molestiae velit et in quod, 
            necessitatibus at laborum voluptatibus illo odit perspiciatis, sapiente consequatur. Eaque quas blanditiis numquam provident modi cum aut velit laboriosam sint tempore 
            accusamus rem ex repellat ducimus, iure consectetur ad ea reprehenderit ut porro quasi? Perspiciatis minima dolore ut sunt aliquam id dolorem quos, ab officia velit, blanditiis temporibus itaque, sed ipsum?"
        ],
    ];



    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post =$post;
        }
    }


    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
