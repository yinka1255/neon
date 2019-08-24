<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon - Admin Panel| Reports</title>
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
							<a href="#">Reports</a>
						</li>
					</ol>
				</div>
				<div class="col-xs-4">
					<div class="pull-right">
							{{--<a href="{{url('admin/new_order')}}" class="btn btn-primary"><i class="entypo-user"> </i> Add new</a>--}}
					</div>
				</div>
				<table class="table table-bordered datatable" id="table-1">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Invoice/Receipt no.</th>
							<th>Total amount</th>
							<th>Date ordered</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach($orders as $key=>$order)
						<tr class="odd gradeX">
							<td>{{$key + 1}}</td>
							<td><a href="{{url('admin/order_details/'.$order->id)}}" >{{"#NEON".str_pad($order->id, 5, '0', STR_PAD_LEFT)}}</a></td>
							<td>₦{{number_format($order->total)}}</a></td>
							<td><a href="{{url('admin/order_details/'.$order->id)}}" >{{$order->created_at->format('d, M Y H:i:s')}}</a></td>
							@if($order->status == 1)
							<td><a href="{{url('admin/order_details/'.$order->id)}}" ><span class="primary">New</span></a></td>
							@elseif($order->status == 2)
							<td><a href="{{url('admin/order_details/'.$order->id)}}" ><span class="warning">Processing</span></a></td>
							@elseif($order->status == 3)
							<td><a href="{{url('admin/order_details/'.$order->id)}}" ><span class="success">Completed</span></a></td>
							@elseif($order->status == 4)
							<td><a href="{{url('admin/order_details/'.$order->id)}}" ><span class="danger">Failed</span></a></td>
							@endif
						</tr>
						@endforeach
						<tfoot align="right">
							<tr>
								<th></th>
								<th></th>
								<th id="total_td"></th>
								<th></th>
								<th></th>
							</tr>
						</tfoot>
					</tbody>
				</table>
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
	<script src="//cdn.datatables.net/plug-ins/1.10.19/api/sum().js" ></script>
	@include('admin.includes.script')
	<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var table1 = jQuery( '#table-1' );
			
			// Initialize DataTable
			var table = table1.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"bStateSave": true,
			"footerCallback": function ( row, data, start, end, display ) {
				var api = this.api(), data;
 
			// converting to interger to find total
			var intVal = function ( i ) {
				return typeof i === 'string' ?
					i.replace(/[\₦,]/g, '')*1 :
					typeof i === 'number' ?
						i : 0;
			};

			// computing column Total of the complete result 
			var total = api
				.column( 2 )
				.data()
				.reduce( function (a, b) {
					console.log(intVal(b));
					return intVal(a) + intVal(b);
				}, 0 );
				$("#total_td").html("₦"+total);
                   
                    // Update footer
                    //console.log(total);         
			}     
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