<?php if(!$this->session->userdata('user_name') && $this->session->userdata('user_name') ==''){
		$this->load->view('user/login');
		exit();
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo  base_url('css/prettyPhoto.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('css/price-range.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/animate.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('css/main.css');?>" rel="stylesheet">
	<link href="<?php echo  base_url('css/responsive.css')?>" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">

   
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><img src="../../profile_pics/<?php echo $this->session->userdata('profile_pic');?>" style="border-radius:50px;width:50px;height:40px;">
                			<a class="navbar-brand" href="../user/User_Account.php">
                                
                			  <?php echo "Hello ".ucfirst($this->session->userdata('f_name'))." ". $this->session->userdata('l_name');?>
                			</a></li>
								
								<li><a href="#"><i class="fa fa-envelope"></i> <?php echo $this->session->userdata('user_name')?></a></li>
								 <li><a href="<?php echo base_url('index.php/Welcome/logout');?>"name="logout" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
							</ul>

						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="../index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="../checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?php echo base_url();?>index.php/Welcome/cart_detail"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="../index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="../shop.php">Products</a></li>
										<li><a href="../product-details.php">Product Details</a></li> 
										<li><a href="../checkout.php">Checkout</a></li> 
										<li><a href="../cart.php">Cart</a></li> 
										
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="../blog.php">Blog List</a></li>
										<li><a href="../blog-single.php">Blog Single</a></li>
                                    </ul>
                                </li> 
								
								<li><a href="../contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="../images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="../images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="../images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="../images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="../images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="../images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<?php include("includes/leftbar.php");?>
						
						<div class="shipping text-center"><!--shipping-->
							<img src="../images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
					<?php 							
                           
							$this->db->select('COUNT(id) AS total_image');
							$this->db->from('images');
							$query = $this->db->get();
							$row = $query->row_array();

								$total_pages = ceil($row['total_image']/10);
							$selected_page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
						//	echo $selected_page;

							$start = ($selected_page-1)*10;
							$this->db->select('image,price');
							//$this->db->from('images');
							$query = $this->db->get('images','10',$start);
								$row = $query->num_rows();
									// echo "<pre>";
										
								
                            	?>


				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						
                            <?php	foreach($query->result() as $value){
                            	// $_SESSION[$value['image']] = $value['image'];
                            	// $_SESSION[$value[p'rice']] = $value['price'];
                            	?>
  							<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="../../images/home/<?php echo $value->image?>" alt="" style="width:220px; height:200px;"/>
										<h2><?php echo "$".$value->price ?></h2>
										<p>Easy Polo Black Edition</p>
										<?php 
										echo '<a href="cart.php?page='.$value->image.'" class="btn btn-default add-to-cart" id="add"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
											?>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?php echo "$".$value->price?></h2>
											<p>Easy Polo Black Edition</p>
											<?php 
											$_SESSION['insert'] = "insert";
										echo '<a href="cart?page='.$value->image.'?price='.$value->price.'" class="btn btn-default add-to-cart" id="add"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
											?>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>                   
						         	
						<?php                                               	} 
                                   for($i=1 ; $i<=$total_pages;$i++){
                                    echo '<ul class="pagination pagination">';   
                            		echo '<li><a href=?page='.$i.'>'.$i.'</a></li>';
                            		echo '</ul>';}
                            	?>

					</div>

					
				</div>

			</div>
		</div>
	</section>
	
<?php include("includes/footer.php");?>

  
   <script src="<?php echo base_url('js/jquery.js'); ?>"></script>
	<script src="<?php echo  base_url('js/price-range.js');?>"></script>
    <script src="<?php echo base_url('js/jquery.scrollUp.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo  base_url('js/jquery.prettyPhoto.js');?>"></script>
    <script src="<?php echo base_url('js/main.js');?>"></script>
</body>
</html>
