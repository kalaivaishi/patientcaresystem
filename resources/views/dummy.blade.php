<h2>Testing</h2>
<table>
	
	<tr>
		<th>item_code</th>
		<th>item_name</th>
		<th>offer_price</th>
		<th>item_images</th>
	</tr>
	@foreach($collection as $row)
	<tr>
		<td>{{$row['item_code']}}</td>
		<td>{{$row['item_name']}}</td>
		<td>{{$row['offer_price']}}</td>
		<td>{{$row['item_images']}}</td>
	</tr>
	@endforeach
</table>