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
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Code</th>
    </tr>
    @foreach($article->tags->sortBy('title') as $tag)
        <tr>
            <td>{{$tag->id}}</td>
            <td>{{$tag->title}}</td>
            <td>{{$tag->code}}</td>
        </tr>
    @endforeach
</table>
 <table>
     <tr>
         <th>ID</th>
         <th>Title</th>
         <th>Code</th>
         <th>Content</th>
         <th>Author</th>
         <th>Created at</th>
     </tr>
             <tr>
                 <td>{{$article->id}}</td>
                 <td>{{$article->title}}</td>
                 <td>{{$article->code}}</td>
                 <td>{{$article->content}}</td>
                 <td>{{$article->author}}</td>
                 <td>{{$article->created_at}}</td>
             </tr>
 </table>
</body>
</html>
