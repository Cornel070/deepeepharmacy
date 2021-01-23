<!DOCTYPE html>
<html>
<head>
	<title>Drug Prescription</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel='stylesheet' href='{{ asset('assets/css/bootstrap.min.css') }}' type='text/css' media='all' />
</head>
<body>
	<div class="card-hdr">
		<img src="{{ asset('assets/images/logo-1.png') }}" class="logo-dis" alt="" width="290" height="76" title="logo" style="padding-top: 20px;" />
		<div class="hdr" style="text-align: center;">
			<h3 class="" >{{ $p->title }}</h3>
			<i>Prescription Details:</i>
		</div>
	</div>

        <table class="table table-bordered table-striped item-tab" style="margin-top: -15% !important;">
        	<thead>
        		<tr>
        			<th>Drug</th>
        			<th>Dosage</th>
        		</tr>
        	</thead>
        	<tbody>
        		@foreach($p->items as $item)
	        		<tr>
	        			<td>{{$item->drug->name }}</td>
	        			<td>{{$item->description }}</td>
	        		</tr>
        		@endforeach
        	</tbody>
        </table>

	<style type="text/css">
		body{
			color: black !important;
			background-color: white !important; 
			font-family:"Calibri (Body)" !important;
		}
		.card-hdr{
			/*margin: 0 auto;*/
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			align-items: center;
		}
		table{
			width: 50% !important;
			margin: 0 auto;
		}

		.logo-dis{
			margin-left: 30% !important;
		}

		.hdr{
			margin-top: 19% !important;
			margin-bottom: 0 !important;
			margin-left: 5% !important;
		}
	</style>
<script type='text/javascript' src='{{ asset('assets/js/bootstrap.min.js') }}'></script>
</body>
</html>