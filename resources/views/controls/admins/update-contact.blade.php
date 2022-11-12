@include('controls/admins.outline.header')

<div class="container pt-3">
    <div class="container d-flex justify-content-center">
        <a type="button" class="btn btn-info btn-dashboard" href="{{ url('contact') }}">Back</a>
    </div>

    <h1>Update Contact</h1>
    <form id="sc" action="{{ route('contact.update',$contact->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-6">
                <label for="no_hp" class="form-label">No Hp</label>
                <input type="number" class="form-control" id="no_hp" name="no_hp" value="{{ $contact->no_hp }}" required>
            </div>
            <div class="form-group col-6">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $contact->instagram }}" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-6">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $contact->facebook }}" required>
            </div>
            <div class="form-group col-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $contact->email }}" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-12">
                <label for="location" class="form-label">Location</label>
                <textarea class="form-control" rows="4" id="location" name="location" value="{{ $contact->location }}" required>{{ $contact->location }}</textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" onclick="updateConfirm()">Simpan</button>
    </form>
</div>

@include('controls/admins.outline.footer')