<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon | New Product</title>
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
								<a href="{{url('admin/products')}}">Products</a>
							</li>
							<li class="active">
								<a href="#">Product</a>
							</li>
						</ol>
					</div>
					<div class="col-xs-4">
						<div class="pull-right">
								
						</div>
					</div>
				</div>
				<br/><br/>
				<form role="form" method="post" enctype="multipart/form-data" action="{{url('admin/save_product')}}" class="form-horizontal ">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-7">
							<input type="text" name="name" class="form-control" placeholder="Name" required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Category</label>
						<div class="col-sm-7">
							<select name="category_id" class="form-control"  required>
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Image</label>
						<div class="col-sm-7">
							<input type="file" accept=".jpg,.png" name="image" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Description</label>
						<div class="col-sm-7">
							<textarea name="description" class="form-control ckeditor required">
								
							</textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-5">
							<button type="submit" class="btn btn-default">Create product</button>
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