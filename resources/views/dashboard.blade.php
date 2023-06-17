<x-app-layout>



    <div style="padding-left: 40%;padding-top: 10%; font-weight:bold;">

        <form method="get" action="{{url('view_post')}}">

            @csrf

            <div style="padding-left:250px;padding-bottom: 20px;">

            <input type="submit" name="submit" value="View My Post" style="background:   #008CBA; cursor: pointer; padding: 10px; border-radius:10px">
        </div>
        </form>


        <label style="padding-left:15%; font-size:20px;font-weight: bold;  ">Add a Post</label>

        <form method="POST" action="{{url('upload_post')}}" enctype="multipart/form-data">

            @csrf


            <div>

        <label>Description</label> &nbsp
        <input type="text" name="Description" placeholder="Description">
        </div>

        <br>


        <div>
        <label>Image uploding</label> &nbsp &nbsp &nbsp
        <input type="file" name="uploadimage">
        </div>

        <br>
            
            <div>
                <input type="submit" name="submit" value="Submit" style="background: #4CAF50; cursor: pointer; padding: 10px; border-radius:10px">
            
            </div>

        </form>
    </div>
    

</x-app-layout>
