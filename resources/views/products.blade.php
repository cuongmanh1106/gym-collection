@extends('include.layout')
@section('title','Products')
@section('content')
<!-- Women's-Product-Display -->
@include('include.slider')
	<div class="wthreeproductdisplay">
		<div id="cbp-pgcontainer" class="cbp-pgcontainer">
			<ul class="cbp-pggrid">
				@foreach($products as $product)
				<li class="wthree aits w3l">
					<div class="cbp-pgcontent" id="women-1">
						<span class="cbp-pgrotate"><i class="fa fa-exchange" aria-hidden="true"></i></span>
						<a href="{{ route('products.single',$product->id) }}">
							<div class="cbp-pgitem a3ls">
								<div class="cbp-pgitem-flip">
									<img src="{{ asset('/public/img/'.$product->image) }}" alt="Groovy Apparel">
									<img src="{{ asset('/public/img/'.$product->image) }}" alt="Groovy Apparel">
								</div>
							</div>
						</a>
						<ul class="cbp-pgoptions w3l">
							<li class="cbp-pgoptcompare">
								<input type="checkbox" name="checkboxG31" id="checkboxG31" class="css-checkbox w3"><label for="checkboxG31" class="css-label"></label>
							</li>
							<li class="cbp-pgoptfav">
								<span>4.5 <i class="fa fa-star" aria-hidden="true"></i></span>
							</li>
							<li class="cbp-pgoptsize agile">
								<span data-size="XL">XL</span>
								<div class="cbp-pgopttooltip">
									<span data-size="XL">XL</span>
									<span data-size="L">L</span>
									<span data-size="M">M</span>
									<span data-size="S">S</span>
								</div>
							</li>
							<li class="cbp-pgoptcart">
									<!-- <form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3l_item" value="Striped Top "> 
										<input type="hidden" name="amount" value="25.00"> 
										<button type="button" class="w3l-cart pw3l-cart" onclick="sale({{ $product->id }})"><i class="fa fa-cart-plus" aria-hidden="true" ></i></button>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1"></a>
									</form> -->
									<button type="button" class="w3l-cart pw3l-cart" onclick="sale({{ $product->id }})"><i class="fa fa-cart-plus" aria-hidden="true" ></i></button>
									
									<!-- <a class="w3l-cart pw3l-cart" href="{{ route('cart.sale',array($product->id,$product->name)) }}"><i class="fa fa-cart-plus" aria-hidden="true"></i></a> -->

							</li>
						</ul>
					</div>
					<a href="womens_single.html">
						<div class="cbp-pginfo w3layouts">
							<h3>{{ $product->name }}</h3>
							<span class="cbp-pgprice">${{ $product->price }}</span>
						</div>
					</a>
				</li>
				@endforeach
				
			</ul>
		</div>
	</div>
	<!-- //Women's-Product-Display -->






	
@endsection