<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<title>Document</title>
    @include('admin.header')

</head>
<body>

<!-- start table slider -->
	<div class="container">
		<div class="row">
			<div class="form col-lg-10 col-md-offset-2 marg ">
                <form method="post" action="/team/add" enctype="multipart/form-data">
                    @csrf
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To Employee</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New Employee</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" name="img" class="form-control  btn-primary" id="select">
			          </div>
			          <div class="form-group">
			            <label for="heading-text" class="form-control-label">Name</label>
					    <input type="text" name="name" class="form-control" placeholder="heading" id="heading-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="content-text" class="form-control-label">Position</label>
					    <input type="text" class="form-control" name="position" placeholder="content" id="content-text" aria-describedby="basic-addon1">
			          </div>
			           <div class="form-group">
			            <label for="content-text" class="form-control-label">desc</label>
					    <input type="text" class="form-control  " name="desc" placeholder="content" id="content-text" aria-describedby="basic-addon1">
			          </div>

			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Add Employee </button>
			      </div>
			    </div>
			  </div>
			</div>
                </form>
		</div>
<!-- delete modal
 -->
 <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="Employee">delete Employee</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		        <form action="">
		          <div class="form-group">
				     <input type="hidden" class="form-control" id="delete_id">
		          </div>
                <center>
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-info">delete Employee </button>
		        </center>
		        <br>
		        <hr>
		        </form>

		    </div>
    </div>
</div>
		<!-- model Edit  -->
            @foreach($teams as $team)
		<div class="modal fade" id="Edit_{{$team->id}}" tabindex="-1" role="dialog" aria-labelledby="Employee" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
                <form method="post" action="/team/{{$team->id}}/update" enctype="multipart/form-data">
                    @csrf
		      <div class="modal-header">
		        <h5 class="modal-title" id="Employee">edit Employee</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <div class="form-group">
		        	<img id="team_img" style="height: 80px;width: 100px;" src="/images/our-team/{{$team->img}}" class="img-responsive center-block" >
		        </div>
		          <div class="form-group">
		            <label for="select" class="form-control-label">select img</label>
		            <input type="file" class="form-control  btn-info" id="edit_img" name="edit_img" onchange="previewImage();">
		          </div>
		          <div class="form-group">
		            <label for="heading-text" class="form-control-label">Name</label>
				    <input type="text" class="form-control" value="{{$team->name}}"  name="edit_name" placeholder="heading" id="edit_name" aria-describedby="basic-addon1">
				     <input type="hidden" class="form-control" id="edit_id">
		          </div>
		          <div class="form-group">
		            <label for="content-text" class="form-control-label">Position</label>
				    <input type="text" class="form-control" value="{{$team->position}}" name="edit_pos" placeholder="content" id="edit_position" aria-describedby="basic-addon1">
		          </div>
		           <div class="form-group">
		            <label for="content-text" class="form-control-label">desc</label>
				    <input type="text" class="form-control  " value="{{$team->description}}" name="edit_desc" placeholder="content" id="edit_desc" aria-describedby="basic-addon1">
		          </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-info">edit Employee </button>
		      </div>
                </form>
		    </div>
		  </div>
		</div>
            @endforeach
		<!-- end modal edit -->

		<div class="col-lg-10 col-md-offset-2">
			<table class="table ">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>name</th>
			      <th>position</th>
			      <th>description</th>
			      <th>img</th>
			      <th> Edit</th>
			      <th>Delete</th>
			      <th>details</th>
			    </tr>
			  </thead>
			  <tbody>
              @forelse($teams as $team)
				   <tr>
				      <td scope="row">{{$loop->iteration}}</td>
				      <td>{{$team->name}}</td>
				      <td>{{$team->description}}</td>
				      <td>{{$team->position}}</td>
				      <td><img height=80px width= 100px src="/images/our-team/{{$team->img}}"/></td>
					  <td>
					  <button id="edit_team" type="button" class="btn btn-info"
					  data-toggle="modal" data-target="#Edit_{{$team->id}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					  </td>
                       <form method="post" action="/team/{{$team->id}}/delete">
                           @csrf
                           <td><button data-toggle="modal" data-target="#delete" id="delete_team" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
                       </form>
                       <td><a href="/team/{{$team->id}}/details" class="btn btn-info"><i class="fa fa-times-circle" aria-hidden="true"></i>details</a></td>
				    </tr>
                @empty
                  <tr>
                      <td>No Members Founded!!</td>
                  </tr>
                @endforelse
			</table>
		</div>
	</div>
</div>
<!-- end table slider -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">

 // var sure =document.getElementById('delete_team');
 // sure.onclick = function () {
 //  	test = confirm('are you suer delete');
 // 	if (test === true) {
 // 		alert('deleted succssfuly');
 // 	}
 // }

 </script>

<script type="text/javascript">
	function previewImage() {
    // document.getElementById("team_img").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("edit_img").files[0]);

    oFReader.onload = function(oFREvent) {
    	console.log(oFREvent);
    document.getElementById("team_img").src = oFREvent.target.result;
    }
  }
</script>

</body>
</html>
