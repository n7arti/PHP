<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <table border = "1" >
     <tr>
         <th>ID</th>
         <th>Title</th>
         <th>Code</th>
         <th>Content</th>
         <th>Created at</th>
         <th>Author</th>
         <th>Tag title</th>
     </tr>
     <div>
         @foreach($articles as $article)
             <tr>
                 <td>{{$article->id}}</td>
                 <td>{{$article->title}}</td>
                 <td>{{$article->code}}</td>
                 <td>{{$article->content}}</td>
                 <td>{{$article->created_at}}</td>
                 <td>{{$article->author}}</td>
                 <td>
                 @foreach($article->tags as $tag)
                  {{$tag->title." "}}
                 @endforeach
                 </td>
             </tr>
         @endforeach
     </div>
 </table>
 <div>
     {{$articles->links()}}
 </div>
</body>
</html>
