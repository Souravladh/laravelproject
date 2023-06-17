<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<style type="text/css">
     
     table,tr,td
     {
     	border:2px solid black;
     	border-collapse: collapse;
     }
     tr,td
     {
     	background:  #D6EEEE;
     	text-align: center;
     }
	

	</style>

</head>
<body>
	<x-app-layout>
	

	<div style="padding-left:17%;padding-top:30px">

		<table style="width:80%">
			<tr>
				<th>Post Description</th>
				<th>Image</th>
				<th>update</th>
				<th>Delete</th>
			</tr>

			@foreach($post as $post)

			<tr>
				<td>{{$post->description}}</td>
				<td>
				<img src="post/{{$post->image}}"width="250px" height="200px">
				</td>
				<td style="width:8%">
					<a href="{{url('update_post',$post->id)}}" class="btn btn-primary">Update</a>
				</td>

				<td style="width:8%">
					<a onclick="return confirm('Are you sure to delete this post');" href="{{url('delete_post',$post->id)}} " class="btn btn-danger">Delete</a>
				</td> 

			</tr>

			@endforeach

		</table>

		
	</div>

	</x-app-layout>

</body>
</html>