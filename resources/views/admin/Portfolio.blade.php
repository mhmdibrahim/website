<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
    <style>
        img{
            width: 150px;
            height: 80px;
        }
    </style>
</head>
<body>
@include('admin.header')
<!-- start table slider -->
<div class="container">
    <div class="row">
        <div class="form col-lg-10 col-md-offset-2 marg ">
            <form method="post" action="/portofolio/add">
                {{csrf_field()}}
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@mdo">Add To project
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New project</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="select" class="form-control-label">select img</label>
                                        <input type="file" name="img" class="form-control  btn-warning" id="select">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading-text" class="form-control-label">title</label>
                                        <input type="text" class="form-control" name="title" placeholder="title"
                                               id="heading-text" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="form-group">
                                        @php
                                            $categs = \App\Portofolio_Categ::all();
                                        @endphp
                                        <select name="categ_id" >
                                            @foreach($categs  as $categ)
                                                <option value="{{$categ->id}}">{{$categ->id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="content-text" class="form-control-label">desc</label>
                                        <input type="text" class="form-control" name="desc" placeholder="desc"
                                               id="content-text" aria-describedby="basic-addon1">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @foreach($porto_projects as $project)
        <!-- model Edit  -->
        <div class="form col-lg-10 col-md-offset-2 ">
            <div class="modal fade" id="Edit-{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="project" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="/portofolio/update/{{$project->id}}" method="post">
                            {{csrf_field()}}
                        <div class="modal-header">
                            <h5 class="modal-title" id="project">Edit project</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="select" class="form-control-label">select img</label>
                                    <input type="file" name="edit_img" class="form-control  btn-warning" id="select">
                                </div>
                                <div class="form-group">
                                    <label for="heading-text" class="form-control-label">title</label>
                                    <input type="text" class="form-control" placeholder="title" name="edit_title" id="heading-text"
                                           value="{{$project->title}}"
                                           aria-describedby="basic-addon1">
                                </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="sel1">Categories Name</label>
                                    <select class="form-control" id="sel1" name="categ_id">
                                        @foreach($porto_projects as $project)
                                        <option value="{{$project->portfolio_categ->id}}">{{$project->portfolio_categ->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="content-text" class="form-control-label">desc</label>
                                    <input type="text" class="form-control" placeholder="desc" name="edit_desc" id="content-text"
                                         value="{{$project->description}}"  aria-describedby="basic-addon1">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"> Edit project</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal edit -->
        @endforeach

        <div class="col-lg-10 col-md-offset-2">
            <table class="table ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>title</th>
                    <th>content</th>
                    <th>Image</th>
                    <th>Category Name</th>
                    <th> Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($porto_projects as $project)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$project->title}}</td>
                        <td>{{$project->description}}</td>
                        <td><img src="/images/portfolio/{{$project->image}}"></td>
                        <td>{{$project->portfolio_categ->name}}</td>
                        <td>
                            <button type="button" data-id="{{$project->id}}" data-toggle="modal"

                                    data-target="#Edit-{{$project->id}}" data-whatever="@mdo" class="btn btn-primary edit_button"><i
                                    class="fa fa-pencil" aria-hidden="true"></i></button>
                        </td>
                        <td><a href="/portofolio/delete/{{$project->id}}">
                                <button id="delete" class="btn btn-danger"><i class="fa fa-times-circle"
                                                                              aria-hidden="true"></i></button>
                            </a></td>
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

    var sure = document.getElementById('delete');
    sure.onclick = function () {
        test = confirm('are you suer delete');
        if (test === true) {
            alert('deleted succssfuly');
        }
    }
    // $('.edit_button').click(function () {
    //     console.log($(this).data('id'));
    //     console.log(this.dataset.id);
    // });
</script>
</body>
</html>
