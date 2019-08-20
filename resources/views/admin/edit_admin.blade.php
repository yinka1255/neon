<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon | Edit Admin user</title>
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
								<a href="{{url('admin/admins')}}">Admin users</a>
							</li>
							<li class="active">
								<a href="#">Edit Admin user</a>
							</li>
						</ol>
					</div>
					<div class="col-xs-4">
						<div class="pull-right">
								<a href="{{url('admin/new_admin')}}" class="btn btn-primary"><i class="entypo-user"> </i> Add new</a>
						</div>
					</div>
				</div>
				<br/><br/>
				<form role="form" method="post" enctype="multipart/form-data" action="{{url('admin/update_admin')}}" class="form-horizontal ">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{$admin->id}}" />
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-5">
							<input type="text" name="name" class="form-control" value="{{$admin->name}}" placeholder="Name" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-5">
							<input type="email" name="email" value="{{$admin->email}}" class="form-control" placeholder="Email" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Phone</label>
						<div class="col-sm-5">
							<input type="text" name="phone" value="{{$admin->phone}}" class="form-control" placeholder="Phone" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-5">
							<input type="text" name="password" value="{{$admin->password}}" class="form-control" value="password" placeholder="Password" disabled>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-5">
							<button type="submit" class="btn btn-default">Update user info</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<hr>
		<br />
		<div class="row">
			<div class="col-md-12">
			<h3><b>Permissions</b></h3><br/>
			<form role="form" method="post" action="{{url('admin/save_permissions')}}" class="form-horizontal ">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{$admin->id}}" />
				<div class="row">
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="category_1" name="category_1" ></label>
							<label>View categories</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="category_2" name="category_2" ></label>
							<label>View, Add categories</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="category_3" name="category_3" ></label>
							<label>View, Add, Edit categories</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="product_1" name="product_1" ></label>
							<label>View products</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="product_2" name="product_2" ></label>
							<label>View, Add products</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="product_3" name="product_3" ></label>
							<label>View, Add, Edit products</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="inventory_1" name="inventory_1" ></label>
							<label>View inventory</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="inventory_2" name="inventory_2" ></label>
							<label>View, Add inventory</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="inventory_3" name="inventory_3" ></label>
							<label>View, Add, Edit inventory</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="order_1" name="order_1" ></label>
							<label>View order</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="order_2" name="order_2" ></label>
							<label>Manage status</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="order_3" name="order_3" ></label>
							<label>Manage order</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="order_1" name="order_1" ></label>
							<label>View order</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="order_2" name="order_2" ></label>
							<label>Manage status</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="order_3" name="order_3" ></label>
							<label>Manage order</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="admin_1" name="admin_1" ></label>
							<label>View admins</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="admin_2" name="admin_2" ></label>
							<label>View, Add admin</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="admin_3" name="admin_3" ></label>
							<label>View, Add, Edit admin</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="customer_1" name="customer_1" ></label>
							<label>View customers</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="customer_2" name="customer_2" ></label>
							<label>View, Add customer</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="customer_3" name="customer_3" ></label>
							<label>View, Add, Edit customer</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" id="report_1" name="report_1" ></label>
							<label>View reports</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-9 pull-right">
						<button type="submit" class="btn btn-default">Update user info</button>
					</div>
				</div>
			</form>
		<br /><br/><br/>
		
	</div>




	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="{{asset('public/admin/js/jvectormap/jquery-jvectormap-1.2.2.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/js/rickshaw/rickshaw.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/js/datatables/datatables.css')}}">
	<script src="{{asset('public/admin/js/datatables/datatables.js')}}"></script>
	@include('admin.includes.script')
	
</body>
</html>