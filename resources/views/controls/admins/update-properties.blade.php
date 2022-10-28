@include('controls/admins.outline.header')

<div class="container mt-5">
    <h1>Update Produk</h1>
    <form id="sc" action="/update-data-properties/{{ $properties->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-6">
                <label for="properties_name" class="form-label">Properties Name</label>
                <input type="text" class="form-control" id="properties_name" name="properties_name" value="{{ $properties->properties_name }}" required>
            </div>
            <div class="form-group col-6">
                <label for="model" class="form-label">Home Model</label>
                <input type="text" class="form-control" id="model" name="model" value="{{ $properties->model }}" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-12">
                <label for="type" class="form-label">Home Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $properties->type }}" required>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-12">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" accept="image/*" id="image" name="image[]" multiple value="{{ $properties->image }}">
            </div>

            <div class="form-group col-12">
                <label for="properties_description" class="form-label">Properties Description</label>
                <textarea class="form-control" rows="4" id="properties_description" name="properties_description" value="{{ $properties->properties_description }}" required></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-6">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $properties->price }}" required>
            </div>

            <div class="form-group col-6">
                <label for="notelp" class="form-label">No. Telp</label>
                <input type="number" class="form-control" id="notelp" name="notelp" value="{{ $properties->notelp }}" placeholder="No. Telp yang dapat di hubungi">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" onclick="updateConfirm()">Simpan</button>
    </form>
</div>

<script>
   /*  function updateConfirm() {
        Swal.fire({
            title: "Are you sure you want to reset your game?",
            text: "You will not be able to recover your game!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function() {
            Swal.fire({
                    title: response,
                    text: "Your imaginary file has been deleted.",
                    type: "success",
                    //timer: 3000
                },
                function() {
                    window.location.href = "/index-properties";
                })
        });
    } */
</script>

@include('controls/admins.outline.footer')