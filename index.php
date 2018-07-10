<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/searchbar.css">
  <link rel="stylesheet" type="text/css" href="css/navnew.css">

  <link rel="stylesheet" type="text/css" href="css/navold.css">
  <link rel="stylesheet" type="text/css" href="css/Navs.css">
  <link rel="stylesheet" type="text/css" href="css/lowerBar.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <script src="https://cdn.ckeditor.com/ckeditor5/10.1.0/classic/ckeditor.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->



  <link rel="stylesheet" type="text/css" href="css/carousel.css">
<style type="text/css">
    #editor{max-height: 300px;}
    .social{background-color: #3b5998;}
    .social1{background-color: #4285f4;}
    .social-btn{font-size: 1.17em ;color: white; }
    .login-btn{background: #fd5c5b; color :white;border: 1px solid #fb3736;}
    .login-btn:hover{background:#de2322; }
  </style>

</head>
<body>
        <div class="modal fade" id="myModal">
                  <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Start a discussion</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                       <form>
                        <div class="form-group">


                            <input type="text" class="form-control" name="field1" placeholder="Post title or a question"><br>
                            <input type="text" class="form-control" name="field2"><br>
                            <textarea name="content" id="editor"></textarea>
                            <div class="photo-upload-wrap">
                              <div class="uploaded-img-wrap"></div>
                              <div class="upload-btn-wrap">
                                <input type="file" id="imageUpload" name="file" class="upload-file" accept="image/jpg, image/png, image/jpeg, image/gif">
                                <label for="imageUpload" class="upload-btn"><i class="icon icon-add"></i><span>Add Image</span></label>
                              </div>
                            </div>
                            <div class="attachment-upload-wrap">
                              <div class="uploaded-wrap"></div>
                              <div class="upload-btn-wrap">
                                <input type="file" id="attachmentUpload" name="file" class="upload-file" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                                <label for="attachmentUpload" class="upload-btn"><i class="icon icon-add"></i><span>Add Attachment</span></label>
                              </div>
                            </div>
                            <div class="search-input in-discussion">
                              <div class="search-box-wrap">
                                <div class="form-element    ">
                                  <input type="text" class="input search-textbox form-control px-5" placeholder="Start typing to add tags">
                                </div>
                              </div>
                              <ul class="selected-tag-box"></ul>
                              <ul class="suggestion-box"></ul>
                            </div>
                            <div class="m10 center">
                              <button class="btn primaryd">Post Discussion</button>
                            </div>
                          </div>
                       </form>
                          <script>
                            ClassicEditor
                                      .create( document.querySelector( '#editor' ) )
                                      .then( editor => {
                                        console.log( editor );
                                      } )
                                      .catch( error => {
                                        console.error( error );
                                      } );
                          </script>
                      </div>

                      <!-- Modal footer -->
                      
                    </div>
                  </div>
                  </div>
                </div>




<!-- sidebar starts here -->
<div id="mySidenav" class="sidenav">

   <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class=" " style="m">
            <div class="sidebar-header">
              <img src="img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="width: 70%;height: 40%;">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

             </div>

            <ul class="list- components">

                <li class="">

                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Start Discussion</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">

                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal">-Create Post</a>
                        </li>

                    </ul>
                </li>
                <li class="">
                            <a href="myCommunity.php">My Community</a>
                </li>
                <li class="">


                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Browse Community</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">-Builder</a>
                        </li>
                        <li>
                            <a href="#">-Broker</a>
                        </li>
                        <li>
                            <a href="#">-Land Owner</a>
                        </li>
                        <li>
                            <a href="#">-Human Resource</a>
                        </li>
                        <li>
                            <a href="#">-Consultant</a>
                        </li>
                        <li>
                            <a href="#">-End User</a>
                        </li>
                        <li>
                            <a href="#">-Digital Marketing</a>
                        </li>
                    </ul>
                 </li>

                        <li class="">
                            <a href="#">My Account</a>
                        </li>
                        <li>
                        <p class="other">Others</p>
                        </li>
                         <li class="">
                            <a href="#">FAQ</a>
                        </li>
                        <li class="">
                            <a href="#">Terms & Conditions</a>
                        </li>
            </ul>
        </nav>
      </div>
  </div>
<!-- sidebar ends here -->
<div id="main">
  <div class="container-fluid nav-fluid">
    <!-- navbar with search section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <i id="openbutton" class="fas fa-bars" style="font-size: 25px;" onclick="openNav()"></i>
        <a href="index.php" class="home-btn"><i class="fas fa-home"></i></a>
          <ul class="nav ml-auto">
            <li class="nav-item mr-lg-4 mr-md-3 mr-sm-3">
              <button class="nav-link btn btn-primary discuss">Start a discussion</button>
            </li>
            <li class="nav-item mr-lg-4 mr-md-3 mr-sm-3 display-item">
             <div class="dropdown">
          <span class="dropdown-toggle nav-link" id="community" data-toggle="dropdown" aria-haspopup="true">
              Browse Community
            </span>
            <div class="dropdown-menu" aria-labelledby="community">
              <a class="dropdown-item" href="">com-1</a>
              <a class="dropdown-item" href="">com-2</a>
              <a class="dropdown-item" href="">com-3</a>
            </div>
          </div>
            </li>
            <li class="nav-item mr-lg-4 mr-md-3 mr-sm-3">
              <div class="dropdown">
          <span class="nav-link" id="profile" data-toggle="dropdown" aria-haspopup="true">
            <img src="img/user.png" class="card-img-top rounded-circle">
            </span>
            <div class="dropdown-menu" aria-labelledby="profile" style="left: -80px;">
              <a class="dropdown-item" href="">Logout</a>
              <a class="dropdown-item" href="">Settings</a>
              <a class="dropdown-item" href="">About Us</a>
            </div>
          </div>
            </li>
            <li class="nav-item mr-lg-4 ">
              <i class="fas fa-bell nav-link" style="font-size: 19px;padding-top: 7px !important;"></i>
            </li>
          </ul>

    </nav>
    <!-- navbar close -->
        <div class="ask-prop">
          <h1>Wanna Discuss Property</h1>
          <form action="" method="post" class="ask-form">
            <input type="text" name="query" placeholder="Search for Discussions , Property..." class="form-control">
            <input type="submit" name="search" value="Search" class="btn btn-gold src-btn">
          </form>
        </div>

  </div>




<!-- ---------------------------------------------------------------------------------AWESOME CAROUSEL---------------------------------------------------------------------- -->
  <div class="container-fluid fluid1  ">
    <h3>Events And Announcements</h3>
    <div id="myCarousel" class="carousel slide row  " data-ride="carousel">
      <a class="btn  prev" href="#" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn next" href="#" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
        <!-- Indicators -->
        <ol class="carousel-indicators indicators1 mb-0 ">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner inner1">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-3 ">
                <div class="card card1">
                <a href="">
                   <img class="card-img1 card-img" src="img/card/Blur-Wallpapers-24-2560-x-1600.jpg" alt="Card image">
                 <div class=" card-img-overlay">
                   <h5 class="card-body body1">EVENTS</h5>
                   </div>
                </a>
                     <div class="card-footer small">
                    updated 3min ago
                  </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="card card1">
                <a href="">
                   <img class="card-img1 card-img " src="img/card/21.jpeg" alt="Card image">
                 <div class="card-img-overlay">
                   <h5 class="card-body body1">SEMINARS</h5>
                   </div>
                </a>
                     <div class="card-footer small">
                    updated 3min ago
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 ">
                <div class="card card1">
                <a href="">
                   <img class="card-img card-img1" src="img/card/1.jpg" alt="Card image">
                 <div class="card-img-overlay">
                   <h5 class="card-body body2">ANNOUNCEMENTS</h5>
                   </div>
                </a>
                     <div class="card-footer small">
                    updated 3min ago
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 " >
                <div class="card card1">
                <a href="">
                   <img class="card-img card-img1" src="img/card/6.jpg" alt="Card image">
                 <div class="card-img-overlay">
                   <h5 class="card-body body1">PROMOTIONS</h5>
                   </div>
                </a>
                     <div class="card-footer small">
                    updated 3min ago
                  </div>
                </div>
            </div>
        </div>
          </div>

          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-3 ">
                <div class="card card1">
                <a href="">
                   <img class="card-img card-img1" src="img/card/3.jpg" alt="Card image">
                 <div class="card-img-overlay">
                   <h5 class="card-body body1 ">Proposal1</h5>
                   </div>
                </a>
                     <div class="card-footer small">
                    updated 3min ago
                  </div>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="card card1">
                <a href="">
                   <img class="card-img card-img1" src="img/card/7.jpg" alt="Card image">
                 <div class="card-img-overlay">
                   <h5 class="card-body body1">Proposal2</h5>
                   </div>
                </a>
                     <div class="card-footer small">
                    updated 3min ago
                  </div>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="card card1">
                <a href="">
                   <img class="card-img card-img1" src="img/card/5.jpg" alt="Card image">
                 <div class="card-img-overlay">
                   <h5 class="card-body body1">Proposal3</h5>
                   </div>
                </a>
                     <div class="card-footer small">
                    updated 3min ago
                  </div>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="card card1">
                <a href="">
                   <img class="card-img card-img1" src="img/card/21.jpeg" alt="Card image">
                 <div class="card-img-overlay">
                   <h5 class="card-body body1">Proposal4</h5>
                   </div>
                </a>
                     <div class="card-footer small">
                    updated 3min ago
                  </div>
                </div>
            </div>
        </div>
          </div>

          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-3 ">
                <div class="card card1">
                <a href="">
                   <img class="card-img card-img1" src="img/card/6.jpg" alt="Card image">
                 <div class="card-img-overlay">
                   <h5 class="card-body body1">Seminar</h5>
                   </div>
                </a>
                     <div class="card-footer small">
                    updated 3min ago
                  </div>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="card card1">
                <a href="">
                   <img class="card-img card-img1" src="img/card/5.jpg" alt="Card image">
                 <div class="card-img-overlay">
                   <h5 class="card-body body1">Card title</h5>
                   </div>
                </a>
                     <div class="card-footer small">
                    updated 3min ago
                  </div>
                </div>
            </div>
            <div class="col-sm-3">
              <div class="card card1">
                <a href="">
                   <img class="card-img card-img1" src="img/card/21.jpeg" alt="Card image">
                 <div class="card-img-overlay">
                   <h5 class="card-body body1">Card title</h5>
                   </div>
                </a>
                     <div class="card-footer small">
                    updated 3min ago
                  </div>
                </div>
            </div>
            <div class="col-sm-3">
              <div class="card card1">
                <a href="">
                   <img class="card-img card-img1" src="img/card/21.jpeg" alt="Card image">
                 <div class="card-img-overlay">
                   <h5 class="card-body body1">Card title</h5>
                   </div>
                </a>
                     <div class="card-footer small">
                    updated 3min ago
                  </div>
                </div>
            </div>
        </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <!-- <a class="text-md-left carousel-control-prev" href="#myCarousel" data-slide="prev">
          <i class="fa fa-lg fa-chevron-left"></i>
        </a>
        <a class="text-md-right carousel-control-next" href="#myCarousel" data-slide="next">
          <span class="fa fa-angle-right"</span>
        </a>
         --></div>

  </div>

<script type="text/javascript">
  (function($) {
    "use strict";

    // manual carousel controls
    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });

})(jQuery);
</script>
<!-- ---------------------------------------------------------------------------------AWESOME CAROUSEL---------------------------------------------------------------------- -->

<!--------------------------------------------FORUM------------------------ -->
<div class="container-fluid mb-5" style="width: 91%">
  <h3 style="text-align: center;">Discover Forums</h3>
  <div class="card">
    <div class="card-body disc-forum">
      <ul class="nav nav-tabs nav-fill">
        <li class="nav-item">
          <a class="nav-link active" href="#tab1" data-toggle="tab">General Real Estate discussion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tab2" data-toggle="tab">Investor Portal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tab3" data-toggle="tab">Academy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tab4" data-toggle="tab">Builder</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tab5" data-toggle="tab">Developer</a>
        </li>
      </ul>


      <div class="tab-content">
        <div id="tab1" class="container-fluid tab-pane active p-0">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Indian Real Estate news</p></a>
                </div>
                <div class="col-sm-6">
                <p>100<span> Replies</span> | 2k+<span>views</span> | <span>Last reply: </span>1 <span>day ago</span></p>
                <p><span>Started by <a href="#"></span>shivamshukla541<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Infrastructural safety measures</p></a>
                </div>
                <div class="col-sm-6">
                <p>1k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>5 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>deepaksharma8<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>How children needs influence property buying?</p></a>
                </div>
                <div class="col-sm-6">
                <p>500<span> Replies</span> | 1k+<span>views</span> | <span>Last reply: </span>10 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>yash9621<span></a> on </span>6 months ago</p>
                </div>
              </div>

            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Managing finances in regards to infrastructure</p></a>
                </div>
                <div class="col-sm-6">
                <p>3k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>1 <span>week ago</span></p>
                <p><span>Started by <a href="#"></span>rahul1998<span></a> on </span>2 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <a href="#">View All discussions</a>
            </li>
          </ul>
        </div>
        <div id="tab2" class="container tab-pane p-0">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Circle Rate: Know Its Relevance for the Home Buyers</p></a>
                </div>
                <div class="col-sm-6">
                <p>100<span> Replies</span> | 2k+<span>views</span> | <span>Last reply: </span>1 <span>day ago</span></p>
                <p><span>Started by <a href="#"></span>shivamshukla541<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Tips to generate additional income from your property</p></a>
                </div>
                <div class="col-sm-6">
                <p>1k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>5 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>deepaksharma8<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Advantages of Buying RERA Registered Projects</p></a>
                </div>
                <div class="col-sm-6">
                <p>500<span> Replies</span> | 1k+<span>views</span> | <span>Last reply: </span>10 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>yash9621<span></a> on </span>6 months ago</p>
                </div>
              </div>

            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Integrated Township: Changing the future of real estate sector</p></a>
                </div>
                <div class="col-sm-6">
                <p>3k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>1 <span>week ago</span></p>
                <p><span>Started by <a href="#"></span>rahul1998<span></a> on </span>2 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <a href="#">View All discussions</a>
            </li>
          </ul>
        </div>
        <div id="tab3" class="container-fluid tab-pane p-0">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Know Blockchain Technology</p></a>
                </div>
                <div class="col-sm-6">
                <p>100<span> Replies</span> | 2k+<span>views</span> | <span>Last reply: </span>1 <span>day ago</span></p>
                <p><span>Started by <a href="#"></span>shivamshukla541<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Real Estate transactions using Blockchain</p></a>
                </div>
                <div class="col-sm-6">
                <p>1k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>5 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>deepaksharma8<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Transparency and security using the all new RME cryptocurrency</p></a>
                </div>
                <div class="col-sm-6">
                <p>500<span> Replies</span> | 1k+<span>views</span> | <span>Last reply: </span>10 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>yash9621<span></a> on </span>6 months ago</p>
                </div>
              </div>

            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Learn how to operate the platform</p></a>
                </div>
                <div class="col-sm-6">
                <p>3k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>1 <span>week ago</span></p>
                <p><span>Started by <a href="#"></span>rahul1998<span></a> on </span>2 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <a href="#">View All discussions</a>
            </li>
        </ul>
        </div>
        <div id="tab4" class="container-fluid tab-pane p-0">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Gaur City Projects</p></a>
                </div>
                <div class="col-sm-6">
                <p>100<span> Replies</span> | 2k+<span>views</span> | <span>Last reply: </span>1 <span>day ago</span></p>
                <p><span>Started by <a href="#"></span>shivamshukla541<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Greater Noida West projects</p></a>
                </div>
                <div class="col-sm-6">
                <p>1k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>5 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>deepaksharma8<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Jaypee on its way to building a masterpiece</p></a>
                </div>
                <div class="col-sm-6">
                <p>500<span> Replies</span> | 1k+<span>views</span> | <span>Last reply: </span>10 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>yash9621<span></a> on </span>6 months ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>NBCC headed towards India's first world trade centre</p></a>
                </div>
                <div class="col-sm-6">
                <p>3k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>1 <span>week ago</span></p>
                <p><span>Started by <a href="#"></span>rahul1998<span></a> on </span>2 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <a href="#">View All discussions</a>
            </li>
        </ul>
        </div>
        <div id="tab5" class="container-fluid tab-pane p-0">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Gaur City Projects</p></a>
                </div>
                <div class="col-sm-6">
                <p>100<span> Replies</span> | 2k+<span>views</span> | <span>Last reply: </span>1 <span>day ago</span></p>
                <p><span>Started by <a href="#"></span>shivamshukla541<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Greater Noida West projects</p></a>
                </div>
                <div class="col-sm-6">
                <p>1k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>5 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>deepaksharma8<span></a> on </span>1 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>Jaypee on its way to building a masterpiece</p></a>
                </div>
                <div class="col-sm-6">
                <p>500<span> Replies</span> | 1k+<span>views</span> | <span>Last reply: </span>10 <span>days ago</span></p>
                <p><span>Started by <a href="#"></span>yash9621<span></a> on </span>6 months ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-1">
                  <img src="img/user.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-5">
                  <a href="#"><p>NBCC headed towards India's first world trade centre</p></a>
                </div>
                <div class="col-sm-6">
                <p>3k<span> Replies</span> | 5k+<span>views</span> | <span>Last reply: </span>1 <span>week ago</span></p>
                <p><span>Started by <a href="#"></span>rahul1998<span></a> on </span>2 year ago</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <a href="#">View All discussions</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!--------------------------------------------FORUM------------------------ -->
<!-- top developers section starts here  -->


<div class="container-fluid" id="lowerBar">
      <!-- main heading -->
        <h3 class="col-sm" id="mainHeading">Top Categories</h3>
      <!-- heading end -->
      <div class="row">

        <div class="col-md-3" id="mainSideBar">
        <!-- the SideBar -->
          <!-- toggler button for sideBar -->
          <nav class="navbar navbar-expand-lg" style="margin-bottom: 0;">
            <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#sideNav">
                <i class="fa fa-bars"></i>
            </button>

          <!-- link items -->
            <div class="collapse navbar-collapse " id="sideNav">
              <ul class="nav nav-tabs flex-column" >
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#topDeveloper" >Top Developers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#topBuilders" >Top Builders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#topConsultants" >Top Consultants</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " data-toggle="tab" href="#topBroker" >Top Broker</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " data-toggle="tab" href="#topLandOwner" >Top Land Owner</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " data-toggle="tab" href="#topInvestor" >Top Investor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " data-toggle="tab" href="#topBrokingHouses" >Top Broking houses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " data-toggle="tab" href="#topDigitalMarketing" >Top end users</a>
                </li>
              </ul>
            </div>
          </nav>
           <!-- SideBar Ends -->
        </div>

        <div class="col-md-9" id="mainContent">
  <!-- tab contents  -->
          <div class="tab-content">
        <!-- topDeveloper tab content -->
            <div class="tab-pane fade show active" id="topDeveloper" >
              <!-- topDeveloper corousel starts -->
              <div class="carousel slide" id="topDeveloperCauousel" data-ride="carousel">
                <!-- slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages" src="images/building-1.jpg" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h6 class="card-title"> Katsua Developers </h6>
                            <!-- <button class="btn viewButton" data-toggle="collapse" data-target="#developer1">view caption
                            </button> -->
                          </div>

                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">updated mins ago :12</li>
                              <li class="list-inline-item">completed:18</li>

                            </ul>
                          </div>
                            <span class="viewButton card" data-toggle="collapse" data-target="#developer1">
                                <i class="fas fa-caret-down"></i></span>
                          <div class="card-body collapse" id="developer1">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages" src="images/building-2.jpg" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h6 class="card-title"> Pukalo Developers </h6>
                          </div>
                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">updated mins ago :6</li>
                              <li class="list-inline-item">completed:22</li>
                            </ul>
                          </div>
                          <span class="viewButton card" data-toggle="collapse" data-target="#developer2">
                                <i class="fas fa-caret-down"></i></span>
                          <div class="card-body collapse" id="developer2">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages" src="images/building-3.jpg" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h6 class="card-title"> harisha Developers </h6>
                          </div>

                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">updated mins ago :7</li>
                              <li class="list-inline-item">completed:12</li>
                            </ul>
                          </div>
                          <span class="viewButton card" data-toggle="collapse" data-target="#developer3">
                                <i class="fas fa-caret-down"></i></span>
                          <div class="card-body collapse" id="developer3">
                            <p class="card-text">lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages" src="images/building-4.jpg" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h6 class="card-title"> Enling Developers </h6>
                          </div>

                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">updated mins ago :1</li>
                              <li class="list-inline-item">completed:8</li>
                            </ul>
                          </div>
                          <span class="viewButton card" data-toggle="collapse" data-target="#developer4">
                                <i class="fas fa-caret-down"></i></span>
                          <div class="card-body collapse" id="developer4">
                            <p class="card-text">lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages" src="images/building-3.jpg" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h6 class="card-title">  Panth Developerss </h6>
                          </div>
                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">updated mins ago :12</li>
                              <li class="list-inline-item">completed:1</li>
                            </ul>
                          </div>
                          <span class="viewButton card" data-toggle="collapse" data-target="#developer5">
                                <i class="fas fa-caret-down"></i></span>
                          <div class="card-body collapse" id="developer5">
                            <p class="card-text">lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages" src="images/building-1.jpg" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h6 class="card-title"> harisha Developers </h6>
                          </div>
                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">updated mins ago :7</li>
                              <li class="list-inline-item">completed:1</li>
                            </ul>
                          </div>
                          <span class="viewButton card" data-toggle="collapse" data-target="#developer6">
                                <i class="fas fa-caret-down"></i></span>
                          <div class="card-body collapse" id="developer6">
                            <p class="card-text">lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              <!-- slide controls -->
                <button class="btn prevButton float-left" href="#topDeveloperCauousel" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="btn nextButton float-right" href="#topDeveloperCauousel" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>

              </div>
            </div>
            <!-- topDeveloper Corousel ends -->
            </div>
        <!-- topDeveloper tab ended -->
        <!-- topBuilders tab content -->
            <div class="tab-pane fade" id="topBuilders">
        <!-- topBuilder carousel starts -->
            <div class="carousel slide" id="topBuilderCauousel" data-ride="carousel">
                <!-- slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-sm-4 detailCard">
                      <div class="card">
                        <img class="card-img-top contentImages" src="images/building-5.jpg" alt="card image cap" >
                        <div class="card-img-overlay">
                          <h6 class="card-title"> jain Builders </h6>
                          <button class="btn viewButton" data-toggle="collapse" data-target="#builder1">view caption
                          </button>
                        </div>
                        <div class="card-body collapse" id="builder1">
                          <p class="card-text">lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                        </div>
                        <div class="card-footer">
                          <ul class="list-inline ">
                            <li class="list-inline-item">updated mins ago :12</li>
                            <li class="list-inline-item">completed:18</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                      <div class="card">
                        <img class="card-img-top contentImages" src="images/building-2.jpg" alt="card image cap" >
                        <div class="card-img-overlay">
                          <h6 class="card-title"> shivam Builders </h6>
                          <button class="btn viewButton" data-toggle="collapse" data-target="#builder2">view caption
                          </button>
                        </div>
                        <div class="card-body collapse" id="builder2">
                          <p class="card-text">lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                        </div>
                        <div class="card-footer">
                          <ul class="list-inline ">
                            <li class="list-inline-item">updated mins ago :6</li>
                            <li class="list-inline-item">completed:22</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                      <div class="card">
                        <img class="card-img-top contentImages" src="images/building-3.jpg" alt="card image cap" >
                        <div class="card-img-overlay">
                          <h6 class="card-title"> Rassha Builders </h6>
                          <button class="btn viewButton" data-toggle="collapse" data-target="#builder3">view caption
                          </button>
                        </div>
                        <div class="card-body collapse" id="builder3">
                          <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                        </div>
                        <div class="card-footer">
                          <ul class="list-inline ">
                            <li class="list-inline-item">updated mins ago :7</li>
                            <li class="list-inline-item">completed:12</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-sm-4 detailCard">
                      <div class="card">
                        <img class="card-img-top contentImages" src="images/building-4.jpg" alt="card image cap" >
                        <div class="card-img-overlay">
                          <h6 class="card-title"> Enling Builders </h6>
                          <button class="btn viewButton" data-toggle="collapse" data-target="#builder4">view caption
                          </button>
                        </div>
                        <div class="card-body collapse" id=builder4">
                          <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                        </div>
                        <div class="card-footer">
                          <ul class="list-inline ">
                            <li class="list-inline-item">updated mins ago :1</li>
                            <li class="list-inline-item">completed:8</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                      <div class="card">
                        <img class="card-img-top contentImages" src="images/building-5.jpg" alt="card image cap" >
                        <div class="card-img-overlay">
                          <h6 class="card-title"> INC Builders </h6>
                          <button class="btn viewButton" data-toggle="collapse" data-target="#builder5">view caption
                          </button>
                        </div>
                        <div class="card-body collapse" id="builder5">
                          <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                        </div>
                        <div class="card-footer">
                          <ul class="list-inline ">
                            <li class="list-inline-item">updated mins ago :12</li>
                            <li class="list-inline-item">completed:1</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                      <div class="card">
                        <img class="card-img-top contentImages" src="images/building-1.jpg" alt="card image cap" >
                        <div class="card-img-overlay">
                          <h6 class="card-title"> Incognita Builders </h6>
                          <button class="btn viewButton" data-toggle="collapse" data-target="#builder6">view caption
                          </button>
                        </div>
                        <div class="card-body collapse" id="builder6">
                          <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                        </div>
                        <div class="card-footer">
                          <ul class="list-inline ">
                            <li class="list-inline-item">updated mins ago :7</li>
                            <li class="list-inline-item">completed:1</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- slide controls -->
                <button class="btn prevButton float-left"  href="#topBuilderCauousel" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="btn nextButton float-right" href="#topBuilderCauousel" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>

              </div>
            </div>
        <!--top Builder carousel ends  -->
            </div>
        <!-- topBuilder tab ended -->
        <!-- topConsultants tab content -->
            <div class="tab-pane fade" id="topConsultants">
        <!--top Consultants Carousel starts  -->
            <div class="carousel slide" id="topConsultantCauousel" data-ride="carousel">
                <!-- slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-sm-4 detailCard">
                      <div class="card">
                        <img class="card-img-top contentImages consultantImages" src="images/person-1.png" alt="card image cap" >
                        <div class="card-img-overlay">
                          <h5 class="card-title"> Mango Consultant </h5>
                          <button class="btn viewButton" data-toggle="collapse" data-target="#consultant1">view details
                          </button>
                        </div>
                        <div class="card-body collapse" id="consultant1">
                          <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                        </div>
                        <div class="card-footer">
                          <ul class="list-inline ">
                            <li class="list-inline-item">total consults:12</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages consultantImages" src="images/person-2.png" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h5 class="card-title"> ING Consultant </h5>
                            <button class="btn viewButton" data-toggle="collapse" data-target="#consultant2">view details
                            </button>
                          </div>
                          <div class="card-body collapse" id="consultant2">
                            <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">total consults:23</li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages consultantImages" src="images/person-3.png" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h5 class="card-title"> Cingh Consultant </h5>
                            <button class="btn viewButton" data-toggle="collapse" data-target="#consultant3">view details
                            </button>
                          </div>
                          <div class="card-body collapse" id="consultant3">
                            <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">total consults:15</li>
                            </ul>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages consultantImages" src="images/person-2.png" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h5 class="card-title"> KJU Consultant </h5>
                            <button class="btn viewButton" data-toggle="collapse" data-target="#consultant4">view details
                            </button>
                          </div>
                          <div class="card-body collapse" id="consultant4">
                            <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">total consults:13</li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages consultantImages" src="images/person-4.png" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h5 class="card-title"> Mango Consultant </h5>
                            <button class="btn viewButton" data-toggle="collapse" data-target="#consultant5">view details
                            </button>
                          </div>
                          <div class="card-body collapse" id="consultant5">
                            <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">total consults:23</li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages consultantImages" src="images/person-3.png" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h5 class="card-title"> Mango Consultant </h5>
                            <button class="btn viewButton" data-toggle="collapse" data-target="#consultant6">view details
                            </button>
                          </div>
                          <div class="card-body collapse" id="consultant6">
                            <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">total consults:3</li>
                            </ul>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              <!-- slide controls -->
                <button class="btn prevButton float-left"  href="#topConsultantCauousel" data-slide="prev" class="btn btn-primary">
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="btn nextButton float-right" href="#topConsultantCauousel" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>

              </div>
            </div>
        <!-- top Consultants Carousel ends -->
            </div>
        <!-- topConsultants tab ended -->
                    <div class="tab-pane fade" id="topBrooker">
        <!--top Brooker Carousel starts  -->
            <div class="carousel slide" id="topBrookerCauousel" data-ride="carousel">
                <!-- slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-sm-4 detailCard">
                      <div class="card">
                        <img class="card-img-top contentImages consultantImages" src="images/person-1.png" alt="card image cap" >
                        <div class="card-img-overlay">
                          <h5 class="card-title"> Mango Consultant </h5>
                          <button class="btn viewButton" data-toggle="collapse" data-target="#brooker1">view details
                          </button>
                        </div>
                        <div class="card-body collapse" id="consultant1">
                          <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                        </div>
                        <div class="card-footer">
                          <ul class="list-inline ">
                            <li class="list-inline-item">total consults:12</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages consultantImages" src="images/person-2.png" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h5 class="card-title"> ING Consultant </h5>
                            <button class="btn viewButton" data-toggle="collapse" data-target="#consultant2">view details
                            </button>
                          </div>
                          <div class="card-body collapse" id="consultant2">
                            <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">total consults:23</li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages consultantImages" src="images/person-3.png" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h5 class="card-title"> Cingh Consultant </h5>
                            <button class="btn viewButton" data-toggle="collapse" data-target="#consultant3">view details
                            </button>
                          </div>
                          <div class="card-body collapse" id="consultant3">
                            <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">total consults:15</li>
                            </ul>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages consultantImages" src="images/person-2.png" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h5 class="card-title"> KJU Consultant </h5>
                            <button class="btn viewButton" data-toggle="collapse" data-target="#consultant4">view details
                            </button>
                          </div>
                          <div class="card-body collapse" id="consultant4">
                            <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">total consults:13</li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages consultantImages" src="images/person-4.png" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h5 class="card-title"> Mango Consultant </h5>
                            <button class="btn viewButton" data-toggle="collapse" data-target="#consultant5">view details
                            </button>
                          </div>
                          <div class="card-body collapse" id="consultant5">
                            <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">total consults:23</li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4 detailCard">
                        <div class="card">
                          <img class="card-img-top contentImages consultantImages" src="images/person-3.png" alt="card image cap" >
                          <div class="card-img-overlay">
                            <h5 class="card-title"> Mango Consultant </h5>
                            <button class="btn viewButton" data-toggle="collapse" data-target="#consultant6">view details
                            </button>
                          </div>
                          <div class="card-body collapse" id="consultant6">
                            <p class="card-text">orem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque</p>
                          </div>
                          <div class="card-footer">
                            <ul class="list-inline ">
                              <li class="list-inline-item">total consults:3</li>
                            </ul>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              <!-- slide controls -->
                <button class="btn prevButton"  href="#topConsultantCauousel" data-slide="prev" class="btn btn-primary">
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="btn nextButton  right-btn" href="#topConsultantCauousel" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>

              </div>
            </div>
        <!-- top Brooker Carousel ends -->
            </div>
          </div>
  <!--all tabs ended  -->

        </div>
      </div>
    </div>




</div>



<script>

function openNav() {
    var x = window.matchMedia("(max-width: 425px)")
    if (x.matches) { // If media query matches
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("sidebar").style.width="auto";

    }
    else{
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("openbutton").style.display ="none";
   }
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.getElementById("openbutton").style.display ="block";

}
</script>


</body>
</html>
