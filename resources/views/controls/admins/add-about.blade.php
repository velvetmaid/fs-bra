@include('controls/admins.outline.header')

<div class="container mt-5">
    <h1>Update About</h1>
    <form id="sc" action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-6">
                <label for="banner" class="form-label">Banner</label>
                <input type="file" class="form-control" id="banner" name="banner" required>
            </div>
            <div class="form-group col-6">
                <label for="banner_text" class="form-label">Banner Text</label>
                <input type="text" class="form-control" id="banner_text" name="banner_text" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-12">
                <label for="banner_span" class="form-label">Banner Span</label>
                <input type="text" class="form-control" id="banner_span" name="banner_span" required>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" rows="4" id="description" name="description" required></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-6">
                <label for="visi" class="form-label">Visi</label>
                <input type="text" class="form-control" id="visi" name="visi" required>
            </div>

            <div class="form-group col-6">
                <label for="misi" class="form-label">Misi</label>
                <input type="text" class="form-control" id="misi" name="misi" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" onclick="updateConfirm()">Simpan</button>
    </form>
</div>

@include('controls/admins.outline.footer')