<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->

    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<body>
@include('admin.header')
<!-- start table slider -->
	<div class="container">
		<div class="row">
			<div class="form col-lg-10 col-md-offset-2 marg ">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add link</button>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
                    <form method="post" action="{{route('Team.add_link',$team->id)}}">
                        @csrf
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New link</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              <div class="form-group">
                                <label for="heading-text" class="form-control-label">link</label>
                                <input type="text" class="form-control" name="link" placeholder="link" id="heading-text" aria-describedby="basic-addon1">
                              </div>
                              <div class="form-group">
                                <label for="content-text" class="form-control-label">social media</label>
                                  <select class="form-control" name="social_id">
                                      @foreach($social_medias as $social_media)
                                          <option  value="{{$social_media->id}}">{{$social_media->name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Employee </button>
                          </div>
                    </form>
			    </div>
			  </div>
			</div>
		</div>
<!-- delete modal
 -->
             {{--<div class="modal fade" id="delete_{{$link->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
                {{--<div class="modal-dialog">--}}
                    {{--<div class="modal-content">--}}

                              {{--<div class="modal-header">--}}
                                {{--<h5 class="modal-title" id="Employee">delete Employee</h5>--}}
                                {{--<button type="button"  class="close" data-dismiss="modal" aria-label="Close">--}}
                                  {{--<span aria-hidden="true">&times;</span>--}}
                                {{--</button>--}}
                              {{--</div>--}}
                                {{--<div class="form-group">--}}
                                     {{--<input type="hidden" name="{{$link->id}}" class="form-control" id="delete_id">--}}
                                  {{--</div>--}}
                                {{--<center>--}}
                                {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}

                                {{--<button type="submit" class="btn btn-info">delete Employee </button>--}}
                                {{--</center>--}}
                                {{--<br>--}}
                                {{--<hr>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
		<!-- model Edit  -->
        @foreach($links as $link)
            <div class="modal fade" id="Edit_{{$link->id}}" tabindex="-1" role="dialog" aria-labelledby="Employee" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="/team_details/{{$link->id}}/updateLink">
                        @csrf
                      <div class="modal-header">
                        <h5 class="modal-title" id="Employee"><strong>Edit Link</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                              <input type="hidden" name="team_id" value="{{$team->id}}">
                          </div>
                              <div class="form-group">
                                <label for="heading-text" class="form-control-label">link</label>
                                <input type="text" class="form-control" name="link" value="{{$link->link}}" placeholder="link" id="heading-text" aria-describedby="basic-addon1">
                              </div>
                              <div class="form-group">
                                <label for="content-text" class="form-control-label">social media</label>
                                <select class="form-control" name="social_id">
                                    @foreach($social_medias as $social_media)
                                        <option value="{{$social_media->id}}">{{$social_media->name}}</option>
                                    @endforeach
                                </select>
                              </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">edit </button>
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
                    <th>Description</th>
                    <th colspan="4">link</th>
			    </tr>
			  </thead>
			  <tbody>
              @forelse($links as $link)
				   <tr>
				      <td scope="row">{{$team->id}}</td>
				      <td>{{$team->name}}</td>
                       <td>{{$team->description}}</td>
                       <td>{{$link->link}}<br/></td>
                       <td><button id="edit_team" type="button" class="btn btn-info"
					  data-toggle="modal" data-target="#Edit_{{$link->id}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					  </td>
                       <form class="d-inline" method="post" action="/team_details/{{$link->id}}/delete">
                           <input type="hidden" name="team_id" value="{{$team->id}}">
                           @csrf
                           <td><button data-toggle="modal" id="delete_team" class="btn btn-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></button></td>
                       </form>
              @empty
                   <tr>
                       <td>
                           No Links Founded!!
                       </td>
                   </tr>
               </tr>
                @endforelse
              </tbody>
            </table>
		</div>
	</div>
</div>
<!-- end table slider -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/bootstrap.js"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}
<script type="text/javascript">

 // var sure =document.getElementById('delete_team');
 // sure.onclick = function () {
 //  	test = confirm('are you suer delete');
 // 	if (test === true) {
 // 		alert('deleted succssfuly');
 // 	}
 // }

 </script>

{{--<script type="text/javascript">--}}
	{{--function previewImage() {--}}
    {{--// document.getElementById("team_img").style.display = "block";--}}
    {{--var oFReader = new FileReader();--}}
    {{--oFReader.readAsDataURL(document.getElementById("edit_img").files[0]);--}}

    {{--oFReader.onload = function(oFREvent) {--}}
    	{{--console.log(oFREvent);--}}
    {{--document.getElementById("team_img").src = oFREvent.target.result;--}}
    {{--}--}}
  {{--}--}}
{{--</script>--}}

</body>
</html>
