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
    <title>Cart | E-Shopper</title>
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('cechss/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/prettyPhoto.css');?>" rel="stylesheet">
    <link href="<?php echo  base_url('css/price-range.css');?>" rel="stylesheet">
    <link href="<?php echo  base_url('css/animate.css');?>" rel="stylesheet">
	<link href="<?php echo  base_url('css/main.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('css/responsive.css'); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
    	
    <script>

				
		$(document).on("click", "a", function(){
    $('tbody').empty();
});
				
			
		</script>

   
</head><!--/head-->
<style>
.button {
    background-color: white;
    border-radius: 10px;
    color: black;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
    height: 40px;
}
</style>

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
                                
                			  <?php echo "Hello ".$this->session->userdata('f_name')." ".ucfirst($this->session->userdata('l_name'))?>
                			</a></li>
								
								<li><a href="#"><i class="fa fa-envelope"></i> <?php echo $this->session->userdata('user_name')?></a></li>
								 <li><a href="<?php echo site_url('Welcome/logout');?>"name="logout" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
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
							<a href="index.php"><img src="../images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="../checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="user/User_Account.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info" id="item">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					
					<?php  
							
					foreach ($this->cart->contents() as $items)
						
					 {?>
						<tbody>
						
						<tr>
							<td class="cart_product">
								<a href=""><img src="../../images/home/<?php echo $items['name'];?>" alt="" id="image"></a>
							</td>
							<td class="cart_description">
								
							</td>
							<td class="cart_price">
								<p><?php echo $this->cart->format_number($items['price']);?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
								<form action="<?php echo site_url('Welcome/product_q')."?id=".$items['rowid'];?>" method="post">									
									<input type="submit" class="cart_quantity_up" id="plus" value="+" name="plus"/>
										<?php $q = $items['qty'];?>
									<input type="text" id="value" class="cart_quantity_input" value="<?php echo isset($q)?$q:1;?>" name="quantity_value" size='2'/>									
									<input type="submit" class="cart_squantity_up" id="minus" value="-" name="minus"/>
								</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $this->cart->format_number($items['subtotal']);?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url('index.php/Welcome/cart_delete')."?delete=".$items['rowid'];?>" id="delete" onClick= "return confirm('do you want delete it?')"><i class="fa fa-times" ></i></a>
							</td>
						</tr>
							<tr>
								<td>
									<a href="" class="button" >Move to wishlist</a>
								</td>
							</tr>
						
					</tbody>
					<?php } ?>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
<?php include("includes/footer.php");?>
	


    <script src="<?php echo base_url('js/jquery.js');?>"></script>
	<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('js/jquery.scrollUp.min.js');?>"></script>
    <script src="<?php echo base_url('js/jquery.prettyPhoto.js');?>"></script>
    <script src="<?php echo base_url('js/main.js');?>"></script>
</body>
</html>