@include('controls/admins.outline.header')

<div class="container mt-5">
    <h1>Tambah Produk</h1>
    <hr>

    <form action="/add-properties" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="properties_name" class="form-label">Properties Name</label>
            <input type="text" class="form-control" id="properties_name" name="properties_name" placeholder="Tuliskan nama Produk" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type Home</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Tuliskan nama Produk" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Tuliskan nama Produk" required>
        </div>

        <div class="mb-3">
            <label for="properties_image" class="form-label">Properties Image</label>
            <input type="file" class="form-control" id="properties_image" name="properties_image" >
        </div>

        <div class="mb-3">
            <label for="blueprint_image" class="form-label">Blueprint Image</label>
            <input type="file" class="form-control" id="blueprint_image" name="blueprint_image">
        </div>

        <div class="mb-3">
            <label for="properties_description" class="form-label">Properties Description</label>
            <textarea class="form-control" rows="4" id="properties_description" name="properties_description" placeholder="Tuliskan nama Produk"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Tuliskan nama Produk">
        </div>

        <div class="mb-3">
            <label for="notelp" class="form-label">No. Telp</label>
            <input type="number" class="form-control" id="notelp" name="notelp" placeholder="No. Telp yang dapat di hubungi">
        </div>

        <button type="submit" class="btn btn-primary" style="float: right;">Tambahkan</button>
    </form>

</div> <!-- container -->

@include('controls/admins.outline.footer')