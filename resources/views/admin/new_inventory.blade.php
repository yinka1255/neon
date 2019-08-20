<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon | New Inventory</title>
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
				<div class="row">
					<div class="col-xs-8">
						<ol class="breadcrumb bc-3">
							<li>
								<a href="{{url('admin/index')}}"><i class="fa-home"></i>Dashboard</a>
							</li>
							<li>
								<a href="{{url('admin/inventories')}}">Inventory</a>
							</li>
							<li class="active">
								<a href="#">Inventory</a>
							</li>
						</ol>
					</div>
					<div class="col-xs-4">
						<div class="pull-right">
								
						</div>
					</div>
				</div>
				<br/><br/>
				<form role="form" method="post" enctype="multipart/form-data" action="{{url('admin/save_inventory')}}" class="form-horizontal ">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Invoice/Receipt no.</label>
						<div class="col-sm-7">
							<input type="text" name="invoice_number" class="form-control" placeholder="Invoice number" required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Product</label>
						<div class="col-sm-7">
							<select name="product_id" class="form-control" required>
								@foreach($products as $product)
								<option value="{{$product->id}}">{{$product->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Cost price</label>
						<div class="col-sm-7">
							<input type="number" name="cost_price" class="form-control" placeholder="Cost price" required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Selling price</label>
						<div class="col-sm-7">
							<input type="number" name="selling_price" class="form-control" placeholder="Selling price" required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Quantity</label>
						<div class="col-sm-7">
							<input type="number" name="quantity" class="form-control" placeholder="Quantity" required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Unit</label>
						<div class="col-sm-7">
							<input type="text" name="unit" class="form-control" placeholder="eg. Pack, Blister, Carton" required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Date</label>
						<div class="col-sm-7">
							<input type="text" name="date" class="form-control" id="datepicker" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-5">
							<button type="submit" class="btn btn-default">Create inventory</button>
						</div>
					</div>
				</form>
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
	<script src="{{asset('public/admin/js/wysihtml5/bootstrap-wysihtml5.js')}}"></script>
	<script src="{{asset('public/admin/js/ckeditor/ckeditor.js')}}"></script>
	<script src="{{asset('public/admin/js/ckeditor/adapters/jquery.js')}}"></script>
</body>
</html>