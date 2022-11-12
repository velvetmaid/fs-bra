@include('controls/admins.outline.header')

<div class="container mt-5">
    <h2><b>Add Slideshow</b></h2>
    <form class="form" action="{{ route('slideshow.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-12">
                <label for="slide_image" class="form-label">Image Slideshow</label>
                <input type="file" class="form-control hide-border" id="slide_image" name="slide_image[]" accept="image/*" multiple>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@include('controls/admins.outline.footer')