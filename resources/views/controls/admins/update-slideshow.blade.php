@include('controls/admins.outline.header')

<div class="container pt-3">
    <div class="container d-flex justify-content-center">
        <a type="button" class="btn btn-info btn-dashboard" href="{{ url('slideshow') }}">Back</a>
    </div>
    <h1>Update Slideshow</h1>
    <form id="sc" action="{{ route('slideshow.update',$slideshow->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-12">
                <label for="slide_image" class="form-label">Image Slideshow</label>
                @php $slideshow_image = json_decode($slideshow->slide_image); @endphp
                <img src="{{ asset('images/slideshows/'. $slideshow_image[0]) }}" width="200px">
                <input type="file" class="form-control hide-border" id="slide_image" name="slide_image[]" accept="image/*" multiple value="{{ $slideshow->slide_image }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" onclick="updateConfirm()">Simpan</button>
    </form>
</div>

@include('controls/admins.outline.footer')