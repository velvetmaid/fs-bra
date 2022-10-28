@include('controls/admins.outline.header')

<div class="container mt-5">
    <h1>Update About</h1>
    <form id="sc" action="{{ route('about.update',$about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-6">
                <label for="banner" class="form-label">Banner</label>
                <img src="/images/abouts/{{ $about->banner }}" width="200px">
                <input type="file" class="form-control hide-border" id="banner" name="banner" value="{{ $about->banner }}">
            </div>
            <div class="form-group col-6">
                <label for="banner_text" class="form-label">Banner Text</label>
                <input type="text" class="form-control" id="banner_text" name="banner_text" value="{{ $about->banner_text }}" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-12">
                <label for="banner_span" class="form-label">Banner Span</label>
                <input type="text" class="form-control" id="banner_span" name="banner_span" value="{{ $about->banner_span }}" required>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" rows="4" id="description" name="description" value="{{ $about->description }}" required>{{ $about->description }}</textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-6">
                <label for="visi" class="form-label">Visi</label>
                <input type="text" class="form-control" id="visi" name="visi" value="{{ $about->visi }}" required>
            </div>

            <div class="form-group col-6">
                <label for="misi" class="form-label">Misi</label>
                <input type="text" class="form-control" id="misi" name="misi" value="{{ $about->misi }}" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" onclick="updateConfirm()">Simpan</button>
    </form>
</div>

@include('controls/admins.outline.footer')