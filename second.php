
<php
<html lang="en">
<head>
  

<style>
.center 
{
  text-align: center;
  border: 3px;
}
</style>
</head>
<body>
<div class="center">

</div>

</body>


   <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link href="css/tab.css" rel="stylesheet" id="bootstrap-css">
    
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://coderglass.com');
        });
    </script>
</head>
<body>





	<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">

           <!-- <IMG SRC="gmail.jpg" WIDTH=60 HEIGHT=40>  -->
           Gmail <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li ><a  style='color:red;' href="#">Mail</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Tasks</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9 col-md-10">
            <!-- Split button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default">
                    <div class="checkbox" style="margin: 0;">
                        <label>
                            <input type="checkbox">
                        </label>
                    </div>
                </button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span><span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">All</a></li>
                    <li><a href="#">None</a></li>
                    <li><a href="#">Read</a></li>
                    <li><a href="#">Unread</a></li>
                    <li><a href="#">P1</a></li>
                    <li><a href="#">P2</a></li>
                </ul>
            </div>
            <button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
                &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;&nbsp;</button>
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    More <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mark all as read</a></li>
                    <li class="divider"></li>
                    <li class="text-center">
					<small class="text-muted">Select messages to see more actions</small>
					</li>
                </ul>
            </div>
            <div class="pull-right">
                <span class="text-muted"><b>1</b> of <b>10 </b></span>
                <div class="btn-group btn-group-sm">
                    <!--<button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>-->
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <a href="#" class="btn btn-danger btn-sm btn-block" role="button">COMPOSE</a>
            <hr />
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="index.php"><span class="badge pull-right">10</span> Inbox </a>
                </li>
                <li><a style='color:black;' href="">Starred</a></li>
                <li><a style='color:black;' href="">Important</a></li>
                <li><a style='color:black;' href="">Sent Mail</a></li>
                <li><a style='color:black;' href="">
				<!-- <span class="badge pull-right">445</span>Drafts</a></li> -->
            </ul>
        </div>
        <div class="col-sm-9 col-md-10">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">
				<span class="glyphicon glyphicon-inbox">
                </span>Inbox</a></li>
                <li><a style="color:black;" href="#profile" data-toggle="tab">
				<span class="glyphicon glyphicon-user">
				</span>Social</a></li>
                <li><a style="color:black;" href="#messages" data-toggle="tab">
				<span class="glyphicon glyphicon-tags">
				</span>Promotions</a></li>
                <li><a style="color:black;" href="#settings" data-toggle="tab">
				<span class="glyphicon glyphicon-plus no-margin">
                </span></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                <div style="padding-left:16px">



              <!-- <IMG SRC="up.jpg">   -->

             <h1><!-- <IMG SRC="logo.jpg" ALT="some text" WIDTH=40 HEIGHT=40>   -->
             Ping! available position just for you</h1>
             <br>
            <p><font size="4.5" style="font-weight:bold;">Sam Socrey</font> Sam.Socrey@FHJU.com</p>
            <p align="right">11:23 AM</p>
            <br>
<p><font size="4" color="black">
<p><p>Hello Ping<br>
How are you you doing?</p><p style=\"text-align:justify\">This is&nbsp;Sam Socrey, a director of Human Resource&nbsp;in the <strong>First Hospital of Jilin Univeristy at Changchun</strong>. I have received your resume from our department that you will be graduate on June 2020 and your academic major is Medical Informatics, you are having&nbsp;a high GPA, and we realized that your career goal is to work as Medical Information Analysis Engineer. So,we are so proud to invite you to be one of our members and we are believe that you will do hard in your future career, Please follow this <strong><a href=\"http://www.google.com\">LINK </a></strong>&nbsp;to complete your application as soon as you can, because we have only one position available and we strongly&nbsp;recommend it to you.</p><p style=\"text-align:justify\">&nbsp;</p><p>Please do not hesitate to contact me if you have questions.</p><p>Name：Sam Socrey<br />Position:&nbsp;Human Resource&nbsp;Director&nbsp;<br />Phone：+86-431-853698768<br />E-mail：Sam.Socrey@FHJU.com<br /><span style=\"font-size:9px\"><img src="http://cie.jlu.edu.cn/english/About_Us_-_College_of_International_Education_files/logo.png" style="height:75px; width:449px" /></span></p><p><font size="4" color="black">
</p>
</font></p>

					</span> 
					
					</a>
                        
                    </div>
                </div>
                
            </div>
           
        </div>
    </div>
</div>

</body>
</html>
