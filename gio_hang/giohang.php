<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Demo of Flying products image to shopping cart in jquery</title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">


<div class="collapse navbar-collapse" id="collapse-1">

<ul class="nav navbar-nav navbar-right" data-price="0">
<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> <strong>$0</strong></a></li>
</ul>
</div>
</div>
</nav>

<div class="container">
<h1 class="product-title">Products</h1>
<div class="row">
<div class="col-sm-3 product" data-price="5">
<a href="#"><img src="https://thuthuatnhanh.com/wp-content/uploads/2019/07/anh-girl-xinh-facebook-tuyet-dep-387x580.jpg" width="250" height="auto" alt="" class="img-responsive"></a>
<div class="title">
Product 1
<span>$5</span>
</div>
<div class="description">
This amazing item is what you wanted since you borned.
</div>
<button class="btn btn-default btn-block"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>
</div>

<div class="col-sm-3 product" data-price="8">
<a href="#"><img src="https://thuthuatnhanh.com/wp-content/uploads/2019/07/anh-girl-xinh-facebook-tuyet-dep-387x580.jpg" width="250" height="auto" alt="" class="img-responsive"></a>
<div class="title">
Product 2
<span>$8</span>
</div>
<div class="description">
This amazing item is what you wanted since you borned.
</div>
<button class="btn btn-default btn-block"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>
</div>

<div class="col-sm-3 product" data-price="2">
<a href="#"><img src="https://thuthuatnhanh.com/wp-content/uploads/2019/07/anh-girl-xinh-facebook-tuyet-dep-387x580.jpg" width="250" height="auto" alt="" class="img-responsive"></a>
<div class="title">
Product 3
<span>$2</span>
</div>
<div class="description">
This amazing item is what you wanted since you borned.
</div>
<button class="btn btn-default btn-block"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>
</div>

<div class="col-sm-3 product" data-price="10">
<a href="#"><img src="https://thuthuatnhanh.com/wp-content/uploads/2019/07/anh-girl-xinh-facebook-tuyet-dep-387x580.jpg" width="250" height="auto" alt="" class="img-responsive"></a>
<div class="title">
Product 4
<span>$10</span>
</div>
<div class="description">
This amazing item is what you wanted since you borned.
</div>
<button class="btn btn-default btn-block"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {

		if ( 0 < $('.product button').length ) {
			$('.product button').click(function() {
				var offset = $(this).parent().offset();
				$(this).parent().clone().addClass('product-clone').css({
					'left' : offset.left + 'px',
					'top' : parseInt(offset.top-$(window).scrollTop()) + 'px',
					'width' : $(this).parent().width() + 'px',
					'height' : $(this).parent().height() + 'px'
				}).appendTo($('.product').parent());

				var cart = $('nav .navbar-right strong').offset();

				$('.product-clone').animate( { top: parseInt(cart.top-$(window).scrollTop()) + 'px', left: cart.left + 'px', 'height': '0px', 'width': '0px' }, 800, function(){
						$(this).remove();
						var price = parseInt($('nav .navbar-right').attr('data-price'));
						var productPrice = parseInt($(this).attr('data-price'));
						var cartPrice = parseInt(price+productPrice);
						$('nav .navbar-right strong').html('$' + cartPrice);
						$('nav .navbar-right').attr('data-price', cartPrice);
				});
			});
		}

});
</script>