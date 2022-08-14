@include('controls/admins.outline.header')

<!-- Update Alert -->
@if (session('updateAlert'))
<div class="alert alert-success"> {{ session('updateAlert') }} </div>
@endif
<!-- End Alert -->

<div class="container mt-3">
	<h1 class="tabel1"><strong>Data Produk</strong></h1>
	<a href="/add-properties" class="btn btn-primary">
		<i class="fas fa-plus">
		</i> Tambah
	</a>

	<table class="table table-bordered table-striped" id="table">
		<thead>
			<tr style="text-align: center;">
				<th>No</th>
				<th>Properties Name</th>
				<th>Type</th>
				<th>Location</th>
				<th>Image</th>
				<th>Description</th>
				<th>Price</th>
				<th>No. Telp</th>
				<th>Created</th>
				<th>Option</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<?php $no = 1; ?>
				@foreach($properties as $property)
				<td><?php echo $no++; ?></td>
				<td>{{ $property->properties_name }}</td>
				<td>{{ $property->type }}</td>
				<td>{{ $property->location }}</td>
				<td>
					<?php $property_images = json_decode($property->image); ?>
					<img src="{{ asset('images/blueprint/'. $property_images[0]) }}" style="border: 1px solid hotpink; width:30px; height:30px;">
				</td>
				<td>{{ $property->properties_description }}</td>
				<td>{{ $property->price }}</td>
				<td>{{ $property->notelp }}</td>
				<td><?php echo date('d-m-y | H:i:s', strtotime($property['created_at'])); ?></td>
				<td width=10%>
					<a href="/update-properties/{{ $property->id }}"> <button class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button></a>
					<form action="{{ url('/properties', ['id' => $property->id]) }}" method="post">
						@csrf
						@method('delete')
						<input class="btn btn-danger" type="submit" value="Delete" />
					</form>
				</td>
			</tr>
		</tbody>
		@endforeach

	</table>

</div> <!-- container -->

@include('controls/admins.outline.footer')