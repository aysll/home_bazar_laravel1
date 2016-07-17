@extends('layout')

@section('content')

<div class="container">
          <ol class="breadcrumb bg-white m-t-2">
            <li><a href="/">Ana səhifə</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
            <li>Səbətim</li>
          </ol>
          <hr>
          <div class="row">
          <div class="col-md-12">
          	<h2>Səbətim</h2>
          </div>
          
          <table id="cardtable" class="item-list table table-responsive">
          	<thead>
          		<tr >
          			<th class="sectionheader" >Product</th>
          			<th class="sectionheader" >Description</th>
          			<th class="sectionheader" >Availability</th>
          			<th class="sectionheader" >Quantity</th>
          			<th class="sectionheader" >Price</th>
          			<th class="sectionheader" >Total</th>
          		</tr>
          	</thead>
          	<tbody>
          		<tr class="cardrow" data-productid='15'>
	          		<td class="itemimage"><img class="img-responsive" src="images/coaster.jpg" height="100px" width="140px"></td>
	          		<div class="mini-brand">
	          			<div class="homebazaar"></div>
	          		</div>
	          		<td class="item-list">
	          			<div class="row name">
	          			<a href="#">Fruit Bottle</a>
	          				<p class="category">Bottles</p>
	          				<p class="size">500ml</p>
	          				<p class="color">Color:pink</p>
	          			</div>
	          		</td>

	          		<td>
	          			<ul>
	          				<li >Is in stock</li>
	          			</ul>
	          		</td>
	          		<td>
	          		<select class="quantity"  name="quantity">
	          			<option value="1" selected="selected">1</option>
	          			<option value="2">2</option>
	          			<option value="3">3</option>
	          			<option value="4">4</option>
	          			<option value="5">5</option>
	          			<option value="6">6</option>
	          			<option value="7">7</option>
	          			<option value="8">8</option>
	          			<option value="9">9</option>
						<option value="10">10</option>

	          		</select>
	          		<p class="remove-item">Remove item</p>
	          		</td>
	          		<td class="price" data-price="5">5</td>
	          		<td class="total"  data-total='5'  >5.00 AZN</td>
          		</tr>

          		<tr class="cardrow" data-productid='28'>
	          		<td class="itemimage"><img class="img-responsive" src="images/coaster.jpg" height="100px" width="140px"></td>
	          		<div class="mini-brand">
	          			<div class="homebazaar"></div>
	          		</div>
	          		<td class="item-list">
	          			<div class="row name">
	          			<a href="#">Fruit Bottle</a>
	          				<p class="category">Bottles</p>
	          				<p class="size">500ml</p>
	          				<p class="color">Color:pink</p>
	          			</div>
	          		</td>

	          		<td>
	          			<ul>
	          				<li >Is in stock</li>
	          			</ul>
	          		</td>
	          		<td>
		          		<select class="quantity"  name="quantity">
		          			<option value="1" selected="selected">1</option>
		          			<option value="2">2</option>
		          			<option value="3">3</option>
		          			<option value="4">4</option>
		          			<option value="5">5</option>
		          			<option value="6">6</option>
		          			<option value="7">7</option>
		          			<option value="8">8</option>
		          			<option value="9">9</option>
							<option value="10">10</option>

		          		</select>
		          		<p class="remove-item">Remove item</p>
	          		</td>
	          		<td class="price" data-price="5">5</td>
	          		<td class="total" data-total='5'>5.00 AZN</td>
          		</tr>
          		
          	</tbody>
          </table>
          



          <div class="row">
          	<div class="col-md-4 col-md-offset-8"><b>Total Price: <span id="result">5.00</span> AZN</b></div>
          </div>
          <div class="row">
          <div class="col-md-4 col-md-offset-8">
          	<button class="btn-success btn-md" type="submit" id="checkout">Checkout</button>
          	</div>
          </div>
         
           </div>
        </div>
     
<script>
 						    $(document).ready( function(){
					   	        
					   		$(".quantity").change(function () {
					   			var price = $(this).parents('td').next().data('price');
					   			var total = $(this).val()*price;
					   			$(this).parents('td').next().next().text(total + ' AZN');
					   			$(this).parents('td').next().next().data('total',total);
					   			var result=0;
					   			$('.total').each(function(){
					   				result = result +  $(this).data('total');
					   			});
					   			$('#result').text(result);
					   		});


					   		$('.remove-item').click(function(){
					   			$(this).parent().parent().remove();
					   		});

					   		$('#checkout').click(function(){


					   			var data = {}

					   			$('.cardrow').each(function(index){
					   					data[index] = {
					   						'productid': $(this).data('productid'),
					   						'count' : $(this).find('select[name=quantity]').val()
					   					}

					   					$.ajax({
					   						url:'ajax/check',
					   						type:'POST',
					   						dataType:'json',
					   						success:function(result){
					   							
					   						}
					   					})
					   			});

					   			console.log(data);
					   		})

					        });

			</script> 
@stop
