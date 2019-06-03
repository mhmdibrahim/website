<section id="contact">
    <div class="container">
        <div class="row text-center clearfix">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="contact-heading">
                    <h2 class="title-one">{{$sections['contact']->title}}</h2>
                    <p>{{$sections['contact']->description}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="contact-details">
            <div class="pattern"></div>
            <div class="row text-center clearfix">
                <div class="col-sm-6">
                    <div class="contact-address"><address><p><span>Devs</span>Cluster</p><strong>36 North Kafrul<br>Dhaka Cantonment Area<br> Dhaka-1206, Bangladesh</strong><br><small>( Lorem ipsum dolor sit amet, consectetuer adipiscing elit )</small></address>
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="contact-form-section">
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="contact-form" class="contact" name="contact-form" method="post">
                            @csrf
                            <div class="form-group">
                                <input  id="name" type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
                            <div class="form-group">
                                <input id="email" type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button id="send_message" type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{--<script type="text/javascript">--}}

    {{--// $(document).on("click","#send_message",function () {--}}
    {{--// var email=$('#email').val();--}}
    {{--// var name=$('#name').val();--}}
    {{--// // alert(password);--}}

    {{--// var data = {email:email,name:name};--}}
    {{--//        $.post("message.php",data,function(data){--}}
    {{--// 			if(data=="true")--}}
    {{--// 			{--}}
    {{--// 			//window.location.href="";--}}
    {{--// 			alert("t");--}}
    {{--//             }--}}
    {{--//              else{--}}
    {{--//                          	// $('.y').attr('style','display: block');--}}
    {{--//                          	// $('.x').attr('style','display: none');--}}
    {{--//                           	alert("f");--}}
    {{--//                          }--}}
    {{--// 		 	 // $('#result').html(data);--}}
    {{--// 		      // alert(data);--}}
    {{--// 		 	});--}}


    {{--//  });--}}


    {{--// $(document).ready(function() {--}}
    {{--//             $("#contact-form").submit(function(e) {--}}
    {{--//                 $.ajax({--}}
    {{--//                     type : "POST",--}}
    {{--//                     url : "message.php",--}}
    {{--//                     data : $("#contact-form").serialize(),--}}
    {{--//                     success : function(response) {--}}
    {{--//                         alert(response);--}}
    {{--//                     }--}}
    {{--//                 });--}}
    {{--//                 e.preventDefault();--}}
    {{--//             });--}}

    {{--//         });--}}
{{--</script>--}}
