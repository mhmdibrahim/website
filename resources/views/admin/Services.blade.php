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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<body>
@include('admin.header')
<!-- start table slider -->
	<div class="container">
		<div class="row">
				<div class="form col-lg-10 col-md-offset-2 marg ">
                    <form method="post" action="/service/add" enctype="multipart/form-data" >
                        @csrf
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add To Services</button>
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">New Services</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				          <div class="form-group">
				            <label for="heading-text" class="form-control-label">Title</label>
						    <input type="text" class="form-control" name="title" placeholder="heading" id="heading-text" aria-describedby="basic-addon1">
				          </div>
				          <div class="form-group">
				            <label for="content-text" class="form-control-label">Description</label>
						    <input type="text" class="form-control" name="desc" placeholder="content" id="content-text" aria-describedby="basic-addon1">
				          </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Add Services </button>
				      </div>
				    </div>
				  </div>
				</div>
                    </form>
			</div>

			<!-- model Edit  -->
            @foreach($services as $service)
            <div class="form col-lg-10 col-md-offset-2 ">
                <form method="post" action="/service/{{$service->id}}/update" >
                    @csrf
                    <div class="modal fade" id="Edit_{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="EditLabel">Edit Services</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              <div class="form-group">
                                  <label for="heading-text" class="form-control-label">Title</label>
                                  <input type="text" class="form-control" placeholder="heading" value="{{$service->title}}" name="edit_title" aria-describedby="basic-addon1">
                              </div>
                              <div class="form-group">
                                  <label for="content-text" class="form-control-label">Description</label>
                                  <input type="text" class="form-control" placeholder="content" value="{{$service->description}}"  name="edit_desc" aria-describedby="basic-addon1">
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"> Edit Services </button>
                          </div>
                        </div>
                      </div>
                    </div>
                </form>
			</div>
            @endforeach
			<!-- end modal edit -->

			<div class="col-lg-10 col-md-offset-2">
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>title</th>
				      <th>description</th>
				      <th>icon</th>
				      <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
                  @foreach($services as $service)
				    <tr>
				      <th scope="row">{{$loop->iteration}}</th>
				      <td>{{$service->title}}</td>
				      <td>{{$service->description}}</td>
				      <td>{{$service->icon}}</td>
					  <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#Edit_{{$service->id}}" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                      <form method="post" action="/service/{{$service->id}}/delete">
                          @csrf
                          <td><button id="delete_servise" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
                      </form>
                    </tr>
                    @endforeach
				</table>
			</div>
		</div>
	</div>
<!-- end table slider -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script type="text/javascript">

 var sure =document.getElementById('delete_servise');
 sure.onclick = function () {
  	test = confirm('are you suer delete');
 	if (test === true) {
 		alert('deleted succssfuly');
 	}
 }

 </script>
</body>
</html>
