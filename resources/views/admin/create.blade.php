<html>
<head>
	<title></title>
	<style type="text/css">
		table,td,td,th{
			border:solid 1px black;
			padding: 5px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>#</th>
			<th>author</th>
			<th>title </th>
			<th> describtion</th>
			<th> genre</th>
			<th> avatar </th>


		</tr>
		@foreach ($books as $book)
			<tr>
				<td>{{ ++$loop->index }}</td>
				<td>{{ $book["authorNname"] }}</td>
				<td>{{ $book["title"] }}</td>
				<td>{{ $book["describtion"] }}</td>
				<td>{{ $book["genreId"] }}</td>
				<td>{{ $book["imageUrl"] }}</td>




			</tr>
		@endforeach

	</table>
</body>
</html>
