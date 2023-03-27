<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <a href="/posts/create">create</a>
        <div class='posts'>
            @foreach($posts as $post)  //postsのデータ一つ一つを＄postという変数名で取得
                <div class='post'>
                    <a href="/posts/{{ $post->id}}"><h2 class='title'>{{ $post->title }}</h2></a> //arrow演算子
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>{{ $posts->links()}} </div>
    </body>
</html>
