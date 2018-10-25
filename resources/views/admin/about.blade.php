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
	{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<title>Document</title>
    <style>
        img{
            width: 100px;
            height: 60px;
        }
    </style>
</head>
<body>
@include('admin.header')
<!-- start  about -->
	<div class="container">
		<div class="row">
		<div class="form col-lg-10 col-md-offset-2 marg ">
            <form action="/about/add" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#about" data-whatever="@mdo">Add To Section</button>
			<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="aboutLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="aboutLabel">New Section</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="select" class="form-control-label">select img</label>
			            <input type="file" name="img"  class="form-control   btn-info" id="select">
			          </div>
			          <div class="form-group">
			            <label for="title-text" class="form-control-label">title</label>
					    <input type="text" class="form-control" name="title" placeholder="title" id="title-text" aria-describedby="basic-addon1">
			          </div>
			          <div class="form-group">
			            <label for="text-text" class="form-control-label">text</label>
					    <input type="text" class="form-control" name="description" placeholder="text" id="text-text" aria-describedby="basic-addon1">
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Add Section </button>
			      </div>
			    </div>
			  </div>
			</div>
            </form>
        </div>

		<!-- model Edit about -->
            @foreach($about_us as $about)
                <div class="form col-lg-10 col-md-offset-2 ">
                    <form method="post" action="/about/{{$about->id}}/update" enctype="multipart/form-data">
                        @csrf
                <div class="modal fade" id="edit_{{$about->id}}" tabindex="-1" role="dialog"  aria-labelledby="Editabout" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="Editabout">Edit about</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="select" class="form-control-label">select img</label>
                            <input type="file" class="form-control   btn-info" value="{{$about->img}}" name="edit_img" id="select">
                          </div>
                          <div class="form-group">
                            <label for="title-text" class="form-control-label">title</label>
                            <input type="text" class="form-control" value="{{$about->title}}" name="edit_title" placeholder="title" id="title-text" aria-describedby="basic-addon1">
                          </div>
                          <div class="form-group">
                            <label for="text-text" class="form-control-label">text</label>
                            <input type="text" class="form-control" value="{{$about->description}}" name="edit_desc" placeholder="text" id="text-text" aria-describedby="basic-addon1">
                          </div>
                    </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"> Edit about </button>
                      </div>
                    </div>
                  </div>
                </div>
                    </form>
            </div>
        @endforeach


        <!-- end  edit modal -->

		<!-- show table about -->
			<div class="col-lg-10 col-md-offset-2">
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>title</th>
				      <th>description</th>
				      <th>Img</th>
				       <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
                  @foreach($about_us as $about)
				    <tr>
				      <th scope="row">{{$loop->iteration}}</th>
				      <td>{{$about->title}}</td>
				      <td>{{$about->description}}</td>
				      <td><img src="/images/about-us/{{$about->img}}"></td>
                      <td><a><button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_{{$about->id}}" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></a></td>
                        <td><a href="/about/delete/{{$about->id}}"><button id="delete_about" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></a></td>
			    </tr>
                @endforeach
				</table>
			</div>
		</div>
	</div>
<!-- end show table about -->

<!--  -->

<!-- start  skllis -->
	<div class="container">
		<div class="row">
		<div class="form col-lg-10 col-md-offset-2 ">
            <form method="post" action="{{route('skill.add')}}">
                @csrf
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#skils" data-whatever="@mdo">Add To Sklis</button>
                <div class="modal fade" id="skils" tabindex="-1" role="dialog" aria-labelledby="Edieskiles" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="Edieskiles">New Sklis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                            <label for="heading-text" class="form-control-label">Name:</label>
                            <input type="text" class="form-control"  name="name" placeholder="title" id="heading-text" aria-describedby="basic-addon1">
                          </div>
                          <div class="form-group">
                            <label for="pragraph-text" class="form-control-label">Rate:</label>
                            <input type="text" class="form-control" name="rate" placeholder="rate" id="pragraph-text" aria-describedby="basic-addon1">
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Sklis </button>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
		</div>

		<!-- model Edit skils -->
            @foreach($skills as $skill)
                <div class="form col-lg-10 col-md-offset-2 ">
                    <form method="post" action="{{route('skill.update',$skill->id)}}">
                        @csrf
                        <div class="modal fade" id="editSkils_{{$skill->id}}" tabindex="-1"  role="dialog" aria-labelledby="#skils" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="skils">Edit skiles</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                    <label for="title-text" class="form-control-label">Name</label>
                                    <input type="text" class="form-control" name="edit_name" value="{{$skill->name}}" placeholder="title" id="title-text" aria-describedby="basic-addon1">
                                  </div>
                                  <div class="form-group">
                                    <label for="text-text" class="form-control-label">Rate</label>
                                    <input type="text" class="form-control" name="edit_rate" value="{{$skill->skill_value}}" placeholder="text" id="text-text" aria-describedby="basic-addon1">
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary"> Edit skiles </button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </form>
                </div>
            @endforeach
		<!-- end  edit modal -->

		<!--  show table skils -->
			<div class="col-lg-10 col-md-offset-2">
				<table class="table ">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>title</th>
				      <th>rate </th>
				       <th> Edit</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
                  @foreach($skills as $skill)
				    <tr>
				      <th scope="row">{{$loop->iteration}}</th>
				      <td>{{$skill->name}}</td>
				      <td>{{$skill->skill_value}}</td>
					   <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#editSkils_{{$skill->id}}" data-whatever="@mdo"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
				        <form method="post" action="{{route('skill.delete',$skill->id)}}">
                            @csrf
                            <td><button id="delete_skils" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
                        </form>
                    </tr>
                    @endforeach
				</table>
			</div>
		</div>
	</div>
<!-- end table skllis -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">

 var sure =document.getElementById('delete_about');
 sure.onclick = function () {
  	test = confirm('are you suer delete about');
 	if (test === true) {
 		alert('deleted succssfuly');
 	}
 }

  var sure =document.getElementById('delete_skils');
 sure.onclick = function () {
  	test = confirm('are you suer delete skils');
 	if (test === true) {
 		alert('deleted succssfuly');
 	}
 }
 </script>
</body>
</html>
