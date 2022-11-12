@include('controls/admins.outline.header')

<div class="container pt-3">
    <div class="container d-flex justify-content-center">
        <a type="button" class="btn btn-info btn-dashboard" href="{{ url('index-properties') }}">Back</a>
    </div>
    
    <h2><b>Add Properties</b></h2>
    <form action="/add-properties" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-row">
            <div class="form-group col-6">
                <label for="properties_name" class="form-label">Properties Name</label>
                <input type="text" class="form-control" id="properties_name" name="properties_name" placeholder="Tuliskan nama Produk" required>
            </div>
            <div class="form-group col-6">
                <label for="model" class="form-label">Home Model</label>
                <input type="text" class="form-control" id="model" name="model" placeholder="Tuliskan nama Produk">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-12">
                <label for="type" class="form-label">Home Type</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Tuliskan nama Produk" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-12">
                <label for="image">Image</label>
                <input type="file" class="form-control" accept="image/*" id="image" name="image[]" multiple>
            </div>

            <div class="form-group col-12">
                <label for="properties_description" class="form-label">Properties Description</label>
                <textarea class="form-control" rows="4" id="properties_description" name="properties_description" placeholder="Tuliskan nama Produk" required></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-6">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Tuliskan nama Produk" required>
            </div>

            <div class="form-group col-6">
                <label for="notelp" class="form-label">No. Telp</label>
                <input type="number" class="form-control" id="notelp" name="notelp" placeholder="No. Telp yang dapat di hubungi">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@include('controls/admins.outline.footer')