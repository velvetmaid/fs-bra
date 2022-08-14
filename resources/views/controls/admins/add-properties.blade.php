@include('controls/admins.outline.header')

<div class="container mt-5">
    @if(session('success'))
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="btn-close" data-bs-dissmiss="alert"></button>
        <h4>Success</h4>
        <p class="mb-0">Was added Successfuly</p>
    </div>
    @endif
    <h1>Tambah Produk</h1>
    <hr>
    <form action="/add-properties" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-row">
            <div class="form-group col-6">
                <label for="properties_name" class="form-label">Properties Name</label>
                <input type="text" class="form-control" id="properties_name" name="properties_name" placeholder="Tuliskan nama Produk">
            </div>

            <div class="form-group col-6">
                <label for="type" class="form-label">Type Home</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Tuliskan nama Produk">
            </div>
        </div>

        <div class="form-group">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Tuliskan nama Produk">
        </div>

        <div class="form-row">
            <div class="form-group col-12">
                <label for="image">Image</label>
                <input type="file" class="form-control" accept="image/*" id="image" name="image[]" maxlength="4" multiple>
            </div>

            <div class="form-group col-12">
                <label for="properties_description" class="form-label">Properties Description</label>
                <textarea class="form-control" rows="4" id="properties_description" name="properties_description" placeholder="Tuliskan nama Produk"></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-6">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Tuliskan nama Produk">
            </div>

            <div class="form-group col-6">
                <label for="notelp" class="form-label">No. Telp</label>
                <input type="number" class="form-control" id="notelp" name="notelp" placeholder="No. Telp yang dapat di hubungi">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
</div>

@include('controls/admins.outline.footer')