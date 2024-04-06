<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribers</title>
	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>
	<table id="myTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
			@foreach($subscribers as $subscriber)
				<tr>
				
					<td>{{ $loop->iteration }}</td>
					<td>{{ $subscriber->email }}</td>
				</tr>
			@endforeach
        </tbody>
    </table>
	
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
	<script>
		let table = new DataTable('#myTable');
	</script>
</body>
</html>