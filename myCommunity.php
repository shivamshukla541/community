<!DOCTYPE html>
<html>
<head>
	  <title>MyCommunity</title>
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

	  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
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
                            <a href="#">-Create Post</a>
                        </li>

                    </ul>
                </li>
                <li class="">
                            <a href="myCommunity.php">My Commmnity</a>
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


	<div id="main">
    <!-- navbar with search section -->
    	<nav class="navbar navbar-expand-lg navbar-light"
    			 style="margin-bottom: 0!important;padding: 10px;background: #333;color: white;">

	        <i id="openbutton" class="fas fa-bars" style="font-size: 25px;cursor:pointer;" onclick="openNav()"></i>
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
	              <a class="dropdown-item" href="">Login</a>
	              <a class="dropdown-item" href="">Signin</a>
	              <a class="dropdown-item" href="">About Us</a>
	            </div>
	          </div>
	            </li>
	            <li class="nav-item mr-lg-4 ">
	              <i class="fas fa-bell nav-link" style="font-size: 19px;padding-top: 7px !important;"></i>
	            </li>
	          </ul>

    	</nav>


    	<div class="container-fluid">
            <!-------------left section -------------->
    		<div class="row">
    			<div class="col-lg-2">
    				<div class="" style="background: white;height: 400px;margin-top: 20px;position: relative;" >
    					<span class=" form-control rounded-0 gold-btn">Current Community</span>
                        <ul class="list-group" id="joinedCommunity">
                            <li class="list-group-item active">Community 1</li>
                            <li class="list-group-item">Community 2</li>
                            <li class="list-group-item">Community 3</li>
                            <li class="list-group-item rounded-0">Community 4</li>
                        </ul>
                        <span class=" form-control rounded-0 btn btn-success" style="position: absolute;bottom: 0;">Create New +</span>
    				</div>
    			</div>
                <!---------------Center----------------->
    			<div class="col-lg-7 " style="padding: 0;">
    				<div class="container-fluid" style="background: white;min-height: 800px;margin-top: 20px;padding: 0">
    					 <div class="">
                            <div class="container-fluid nav-fluid">
                               <div class="ask-prop">
                                  <form action="" method="post" class="ask-form">
                                    <input type="text" name="query" placeholder="Discover Communities" class="form-control">
                                    <input type="submit" name="search" value="Search" class="btn btn-primary src-btn">
                                  </form>
                               </div>
                            </div>

                          </div>
                          <!---------Chat Box------------>
                           <div class="chat-box">
                               <div class="container-fluid">

                                       <div class="container-fluid mb-2 mt-2" id="receiver">
                                           <div class="row">
                                               <div class="col-8 chat-text">
                                                    <h6>SenderName</h6>
                                                    <div class="sender-text" style="background-color: white">
                                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.In fermentum vulputate semper.Morbi malesuada, elit vitae sollicitudin malesuada,

                                                      <br><b>Time</b>
                                                    </div>

                                               </div>
                                                <div class="col-4 ">

                                               </div>
                                           </div>
                                       </div>
                                       <div class="container-fluid mb-2 mt-2" id="sender">
                                           <div class="row">
                                              <div class="col-4">
                                               </div>
                                               <div class="col-8 chat-text">
                                                    <h6 class="text-right">ReceiverName</h6>
                                                   <p class=" receiver-text" style="background-color: white">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.In fermentum vulputate semper.Morbi malesuada, elit vitae sollicitudin malesuada,

                                                    <br><b>Time</b>
                                                    </p>


                                               </div>

                                           </div>
                                       </div>
                                       <div class="container-fluid mb-2 mt-2" id="sender">
                                           <div class="row">
                                              <div class="col-4">
                                               </div>
                                               <div class="col-8 chat-text">
                                                      <h6 class="text-right">ReceiverName</h6>
                                                   <p class=" receiver-text" style="background-color: white">                                                    Lorem ipsum dolor sit amet,
                                                    <br><b>Time</b>
                                                    </p>

                                               </div>

                                           </div>
                                       </div>
                                   <div class="container-fluid">
                                   <form action="" method="post" enctype="" class="send-form">
                                    <button class="file-btn icon-attach"><i class="fas fa-plus "></i></button>
                                       <input type="file" name="attachment" class="file-btn" style="opacity: 0">
                                       <input type="text" name="text" class="form-control rounded-0 pl-5" placeholder="Start Typing">
                                       <input type="submit" name="send" class="src-btn btn-primary btn" value="Send">
                                   </form>
                               </div>
                               </div>
                               <!-- <div class="container-fluid">
                                   <form action="" method="post" enctype="" class="send-form">
                                    <button class="file-btn icon-attach"><i class="fas fa-plus "></i></button>
                                       <input type="file" name="attachment" class="file-btn" style="opacity: 0">
                                       <input type="text" name="text" class="form-control rounded-0 pl-5" placeholder="Start Typing">
                                       <input type="submit" name="send" class="src-btn btn-primary btn" value="Send">
                                   </form>
                               </div> -->
                           </div>
                    </div>
                </div>
                <!----------------Right------------------>
    			<div class="col-lg-3">
    				<div class="" style="background: white;margin-top: 20px">
                        <div class="row ">
                            <div class="col-10">
                                <span class=" form-control rounded-0 gold-btn">Community 1 </span>
                            </div>
                            <div class="col-2">
                                <i class="fa fa-cog fa-2x float-right"
                                    style="font-size: 30px;color: #333;padding: 6px 12px;background: #dd960d;"></i>
                            </div>
                        </div>

                        <div class="container desc">
                            <h6><span>Admin : </span><a href="" class="text-primary">Username</a></h6>
                            <p>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit.In fermentum vulputate semper.Morbi malesuada, elit vitae sollicitudin malesuada, tellus lacus ultrices ipsum, at viverra erat ipsum quis elit.Pellentesque nec eros eget elit sagittis eleifend quis non eros. Aliquam aliquam ac dolor eu ultricies.Integer sed dignissim erat. Suspendisse at lectus mattis, tempus sapien at, interdum arcu.
                            </p>
                            <button class="btn btn-danger rounded-0">Invite</button>
                        </div>

                        <div class="commMembers">
                            <span class="form-control rounded-0 gold-btn" style="background: #333 !important;">Community members</span>
                            <ul class="list-group">
                                <li class="list-group-item rounded-0">
                                    <a href="">Username1</a> <span class="role">Developer</span> <i class="fas fa-comment-alt"></i>
                                </li>
                                <li class="list-group-item rounded-0">
                                    <a href="">Username1</a> <span class="role">Developer</span> <i class="fas fa-comment-alt"></i>
                                </li>
                                <li class="list-group-item rounded-0">
                                    <a href="">Username1</a> <span class="role">Developer</span> <i class="fas fa-comment-alt"></i>
                                </li>
                            </ul>
                        </div>

    				</div>
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
