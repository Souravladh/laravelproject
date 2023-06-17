<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update post</title>
</head>
<body>

<x-app-layout>

	<div style="padding-left: 40%;padding-top: 10%; font-weight:bold;">


        <label style="padding-left:15%; font-size:20px;font-weight: bold;  ">Update a Post</label>

        <form action="{{url('confirm_update',$data->id)}}" method="POST" enctype="multipart/form-data">

           @csrf


            <div>

        <label>Description</label> &nbsp
        <input type="text" name="Description" value="{{$data->description}}">
        </div>

        <br>

        <div>
        	<label>Current Image</label>
        	<img src="/post/{{$data->image}}" height="250px" width="250px">
        </div>


        <div>
        <label>Image uploding</label> &nbsp &nbsp &nbsp
        <input type="file" name="uploadimage">
        </div>

        <br>
            
            <div>
                <input type="submit" name="submit" value="Update Post" style="background: #4CAF50; cursor: pointer; padding: 10px; border-radius:10px">
            
            </div>

        </form>
    </div>
    





</x-app-layout>

</body>
</html>