@extends('layouts.app')
@section('title_block')
	Все блоги
@endsection
@section('content')
<h1 style="padding-top: 10px;">View all blogs</h1>
<hr>
 <div class="row justify-content-center">
    <table class="table">
  	    <thead>
   	 		<tr>
      			<th scope="col">#</th>
     			<th scope="col">Blog Title</th>
      			<th scope="col">Show</th>
      				
    		</tr>
  		</thead>
  		<tbody>
    		@foreach ($articles as $article)
        <tr>
            <th scope="row">{{ $article->post_id }}</th>
            <td>{{ $article->title }}</td>
            <td>{{ $article->content }}</td>
            
            <td><a href="#">Show</a></td>
          
          </tr>
        @endforeach
  		</tbody>
	</table>
   </div>

@endsection
