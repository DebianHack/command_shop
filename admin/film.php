<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/db.php';
?>

<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="web/css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="web/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="web/css/font.css" type="text/css"/>
<link href="web/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- charts -->
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<link rel="stylesheet" href="web/css/morris.css">
<!-- //charts -->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
	<nav class="main-menu">
		<ul>
			<li>
				<a href="index.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Films
					</span>
				</a>
			</li>
			<li>
				<a href="books.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Books
					</span>
				</a>
			</li>
			<li>
				<a href="music.php">
					<i class="fa fa-cogs"></i>
					<span class="nav-text">
					Music
					</span>
				</a>
			</li>
		</ul>
		
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="index.php"><img src="images/logo.png" alt="" />ADMIN</a></h1>
			</div>
			
			<div class="w3l_search">
				<form action="#" method="post">
					<input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
			<div class="header-right">
				<div class="profile_details_left">
					
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
									<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
		
		<div class="main-grid">
			<a href="Options/FILMS/add_films.php?" type="button">Добавить</a>
			<div class="card-body table-full-width table-responsive">
			
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Название</th>
                                            <th>Год</th>
                                            <th>Режиссер</th>
                                            <th>Актеры</th>
                                            <th>Описание</th>
                                            <th>Страна</th>
                                            <th>Постер</th>
                                            <th>Жанр</th>
                                            <th>Торрент</th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                              $sql = "SELECT * FROM films";
                                              $result = mysqli_query($connect, $sql) ;
                                              while ($row = mysqli_fetch_assoc($result)) {
                                                  ?>
                                                  <tr>
                                                    <td><?php echo $row['name'] ?></td>
                                                    <td><?php echo $row['year'] ?></td>
                                                    <td><?php echo $row['director'] ?></td>
                                                    <td><?php echo $row['actors'] ?></td>
                                                    <td><?php echo $row['description'] ?></td>
                                                    <td><?php echo $row['country'] ?></td>
													<td><?php echo $row['baner'] ?></td>
                                                    <td><?php echo $row['categories_films_id'] ?></td>
                                                    <td><?php echo $row['torrent'] ?></td>
                                                    



                                                    <td>
                                                       <div class="btn-group" role="group" aria-label="Basic example">
                                                          <a href = "Options/FILMS/edit_films.php?id=<?php echo $row['id'] ?>" type="button" >Редактировать</a>
                                                          <a href = "Options/FILMS/delete_films.php?id=<?php echo $row['id'] ?>"type="button" >Удалить</a>
                                                         
                                                       </div> 



                                                    </td>
                                                    
                                                    

                                                  </tr>

                                                  
                                                  <?php
                                              }
                                               


                                            ?>
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
			
		
		
		<!-- footer -->
		<!-- <div class="footer">
			<p>© 2016 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div> -->
		<!-- //footer -->
	</section>
	<script src="bootstrap.js"></script>
	
</body>
</html>