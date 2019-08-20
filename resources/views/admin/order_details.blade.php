<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon - Admin Panel| Order Details</title>
	@include('admin.includes.head')

</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	@include('admin.includes.sidemenu')
	<div class="main-content">
		@include('admin.includes.header')
		<hr />
		
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-8">
					<ol class="breadcrumb bc-3">
						<li>
							<a href="{{url('admin/index')}}"><i class="fa-home"></i>Dashboard</a>
						</li>
						<li class="active">
							<a href="#">Orders</a>
						</li>
					</ol>
				</div>
				<div class="col-xs-4">
					<div class="pull-right">
							{{--<a href="{{url('admin/new_order')}}" class="btn btn-primary"><i class="entypo-user"> </i> Add new</a>--}}
					</div>
				</div>
				<br class="hidden-print" />
		
				<div class="invoice">
				
					<div class="row">
					
						<div class="col-sm-6 invoice-left">
						
							<a href="#">
								<img src="{{asset('public/admin/images/logo-light@2x.png')}}" width="185" alt="" />
							</a>
							
						</div>
						
						<div class="col-sm-6 invoice-right">
						
								<h3>INVOICE NO. {{"#NEON".str_pad($order[0]->id, 5, '0', STR_PAD_LEFT)}}</h3>
								<span>{{$order[0]->created_at}}</span>
						</div>
						
					</div>
					
					
					<hr class="margin" />
					
				
					<div class="row">
						<div class="col-sm-7 invoice-left">
							<div class="invoice-left">
								Neon LTD
								<br/>
								TJAC building, Southern view estate.
								<br />
								Lekki, Lagos, Nigeria.
								<br />
								+234 811 9487 489
								<br />
								Yinka Adeniran
								<br />
								info@neon.com
							</div>
							<br />
						</div>
						
						<div class="col-md-5 invoice-right">
							<h4>Customer details:</h4>
							<table style="width: 100%;">
								<tr>
									<td class="grey">
										Customer Name:
									</td>
									<td class="light">
										{{$order[0]->customer_name}}
									</td>
								</tr>
								<tr>
									<td class="grey">
										Customer Phone:
									</td>
									<td class="light">
										{{$order[0]->customer_phone}}
									</td>
								</tr>
								<tr>
									<td class="grey">
										Contact Name:
									</td>
									<td class="light">
										{{$order[0]->contact_person}}
									</td>
								</tr>
								<tr>
									<td class="grey">
										Contact Phone:
									</td>
									<td class="light">
										{{$order[0]->phone}}
									</td>
								</tr>
								<tr>
									<td class="grey">
										Address:
									</td>
									<td class="light">
										{{$order[0]->address}}
									</td>
								</tr>
							</table>
							<br />
						</div>
						
					</div>
					
					<div class="margin"></div>
					
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th width="60%">Product</th>
								<th>Quantity</th>
								<th>Price</th>
							</tr>
						</thead>
						
						<tbody>
							<?php 
								$total = 0;
							?>
							@foreach($order as $key=>$ord)
							<?php $total += $ord->selling_price* $ord->qty; ?>
							<tr>
								<td class="text-center">{{$key+1}}</td>
								<td>{{$ord->name}}</td>
								<td>{{$ord->qty}}</td>
								<td class="text-right">₦{{number_format($ord->selling_price* $ord->qty)}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					
					<div class="margin"></div>
				
					<div class="row">
					
						<div class="col-sm-6">
						
							<div class="invoice-left">
					
								TJAC building, Southern view estate.
								<br />
								Lekki, Lagos, Nigeria.
								<br />
								+234 811 9487 489
								<br />
								Yinka Adeniran
								<br />
								info@neon.com
							</div>
						
						</div>
						
						<div class="col-sm-6">
							
							<div class="invoice-right">
								
								<ul class="list-unstyled">
									<li>
										Sub - Total amount: 
										<strong>₦{{number_format($total)}}</strong>
									</li>
									<li>
										Delivery: 
										<strong>₦1,500</strong>
									</li>
									<li>
										Discount: 
										-----
									</li>
									<li>
										Grand Total:
										<strong>₦{{number_format($total + 1500)}}</strong>
									</li>
								</ul>
								
								<br />
								
								<a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
									Print Invoice
									<i class="entypo-doc-text"></i>
								</a>
								
								&nbsp;
								
								{{--
								<a href="mailbox-compose.html" class="btn btn-success btn-icon icon-left hidden-print">
									Send Invoice
									<i class="entypo-mail"></i>
								</a>
								--}}
							</div>
							
						</div>
						
					</div>
				
				</div>
			</div>
		</div>
		
		<br />
		
		<br />
		
	</div>




	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="{{asset('public/admin/js/jvectormap/jquery-jvectormap-1.2.2.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/js/rickshaw/rickshaw.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/js/datatables/datatables.css')}}">
	<script src="{{asset('public/admin/js/datatables/datatables.js')}}"></script>
	@include('admin.includes.script')
	<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table1 = jQuery( '#table-1' );
			
			// Initialize DataTable
			$table1.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"bStateSave": true
			});
			
			
		} );
	</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script>
        function openConfirm(order_id, status){
            $.confirm({
					icon: 'glyphicon glyphicon-warning-sign',
                    title: 'Confirm',
                    content: 'Are you sure your want to continue with this process? This action cannot be reversed',
                    typeAnimated: true,
                    buttons: {
                        'Go back': function () {
                            text: 'Go back'
                            
                        },
                        'Yes continue': {
							btnClass: 'btn-success',
							action: function () {
								window.location.href = "../admin/order_status/"+order_id+"/"+status;
							},
						}
                    }
                });
        }
	</script>

</body>
</html>