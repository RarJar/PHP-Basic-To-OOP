<?php 

class Blog{
    public $title;
    public $content;
    public static $blogs = [];

    public static function all(){
        return static::$blogs;
    }

    public function save(){
        static::$blogs[] = [
            'title' => $this->title,
            'content' => $this->content,
        ];
    }

    public static function create($data){
        static::$blogs[] = $data;
    }
}

$blog = new Blog;
$blog->title = "Title1";
$blog->content = "Content1";
$blog->save();

Blog::create([
    $blog->title = "Title2",
    $blog->content = "Content2"
]);

var_dump(Blog::all());
