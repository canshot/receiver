
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

            <h1><!--<IMG SRC="logo.jpg" ALT="some text" WIDTH=40 HEIGHT=40>-->Job search tips</h1>
            <br>
            <p><font size="4.5" style="font-weight:bold;">Marran Aldossari</font> maldoss@gmail.com</p>
            <p align="right">10:26 AM</p>
            <br>
<p><font size="4" color="black">
<p>Dear university student,<br/>I hope this email finds you well,<p>
Since, the Summer semester is around the corner, and most of the students are seeking a job,&nbsp;
I would share&nbsp;with you some tips that I have found and I&nbsp;am&nbsp;sure that&nbsp;will help you to find your future job. Please read these steps&nbsp;carefully and follow them in order to get your dream&#39;s job:&nbsp;</p><ol><li>Create a free Indeed account and upload your resume</li><li>Browse positions by location in the search bar</li><li>Filter results based on your requirements</li><li>Set up jobs alerts to stay up to date</li><li>Research companies to learn more</li><li>Explore average salaries by company and job title</li></ol><p>I have found&nbsp; these tips on&nbsp;&quot;Guide: Using Indeed.com Job Search&quot;</p><p>Enjoy the rest of your day!</p><p>Marran</p></p>
<p><font size="4" color="black">
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
