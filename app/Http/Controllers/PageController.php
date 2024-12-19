<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Sample blog posts
    private $posts = [
        [
            'id' => 1,
            'title' => 'Journey to Mars: The Next Frontier',
            'summary' => 'Exploring the possibilities of human settlement on Mars.',
            'content' => 'Full content of the blog post about journey to Mars...',
            'category' => 'Space Travel',
            'image' => 'images/mars.webp',
        ],
        [
            'id' => 2,
            'title' => 'Advancements in Space Tourism Technology',
            'summary' => 'How technology is making space tourism more accessible.',
            'content' => 'Full content of the blog post about space tourism technology...',
            'category' => 'Technology',
            'image' => 'images/technology.webp',
        ],
        [
            'id' => 3,
            'title' => 'Living in Space: Lifestyle Changes',
            'summary' => 'Adapting human lifestyles for extended space travel.',
            'content' => 'Full content of the blog post about living in space...',
            'category' => 'Lifestyle',
            'image' => 'images/lifestyle.webp',
        ],
        // Add more posts as needed
    ];

    // Team members for the About page
    private $team = [
        [
            'name' => 'JonDo',
            'role' => 'Editor',
            'image' => 'images/team1.webp',
        ],
        [
            'name' => 'JenDo',
            'role' => 'Writer',
            'image' => 'images/team2.webp',
        ],
        [
            'name' => 'Eve',
            'role' => 'Photographer',
            'image' => 'images/team3.webp',
        ],
        // Add more team members as needed
    ];

    // Home Page
    public function home()
    {
        $featuredPost = $this->posts[0];
        $latestPosts = array_slice($this->posts, 0, 3);

        return view('home', compact('featuredPost', 'latestPosts'));
    }

    // Blog Listing Page
    public function blog()
    {
        $posts = $this->posts;
        return view('blog', compact('posts'));
    }

    // Single Blog Post Page
    public function singlePost($id)
    {
        $post = collect($this->posts)->firstWhere('id', $id);
        if (!$post) {
            abort(404);
        }

        // Related posts (excluding the current one)
        $relatedPosts = collect($this->posts)->where('id', '!=', $id)->take(3);

        return view('single-post', compact('post', 'relatedPosts'));
    }

    // Contact Page
    public function contact()
    {
        return view('contact');
    }

    // About Page
    public function about()
    {
        return view('about', ['team' => $this->team]);
    }
}
