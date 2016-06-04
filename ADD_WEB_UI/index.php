<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Administration Panel</title>
		<link rel="shortcut icon" href="../favicon.ico">
                <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
                <script src="js/Admin_Site.js" type="text/javascript"></script>
                <style>
        .menu-item::before {
            display: inline-block;
            width: 60px;
            text-align: center;
            text-transform: none;
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            font-family: 'Glyphicons Halflings';
            line-height: 1;
            speak: none;
            -webkit-font-smoothing: antialiased;
        }
        </style>
                <script>
                       $(document).ready(function (){
                           OpenDashBoard();
                       });
               </script>
	</head>
	<body>
            <div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>
                                                                <li>
                                                                    <a href="javascript:OpenDashBoard();" class="menu-item glyphicon-dashboard"><span>Dashboard</span></a>
								</li>
                                                                <li>
                                                                    <a href="javascript:OpenCategeory();" class="menu-item glyphicon-list-alt"><span>Categeory</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:OpenAdvertiesmentType();" class="menu-item glyphicon-filter"><span>Advertiesment Type</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:OpenUserManagement();" class="menu-item glyphicon-user"><span>User Management</span></a>
                                                                </li>
								<li>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a ></a></li>
				<li><a ><span></span></a></li>
                                <li><a class="menu-item glyphicon-log-out" ><span>Logout</span></a></li>
			</ul>
		</div><!-- /container -->  
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>                              
                <iframe style="width:100%;height:800px;margin-top:62px;" id="adminFrame">
                    
                </iframe>
	</body>
</html>
