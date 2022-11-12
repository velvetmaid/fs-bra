@include('controls/admins.outline.header')

<style>
    @media screen and (max-width: 700px) {

        table,
        td,
        tr {
            display: grid;
        }
    }
</style>

<div class="container pt-3">
    <div class="container d-flex justify-content-center">
        <a type="button" class="btn btn-info btn-dashboard" href="{{ url('dashboard') }}">Back</a>
    </div>

    <div class="table-users">
        <div class="header">Slideshow
        </div>

        <table cellspacing="0">

            <tr>
                <th>Banner</th>
            </tr>

            @foreach($slideshow as $indexSlide)
            <tr>
                <td>
                    @php $slideshow_image = json_decode($indexSlide->slide_image); @endphp
                    <img src="{{ asset('images/slideshows/'. $slideshow_image[0]) }}">
                </td>
                <td>
                    <div class="w-100 d-flex justify-content-end">
                        <a class="btn btn-primary" href="{{ route('slideshow.edit',$indexSlide->id) }}">Edit</a>
                    </div>
                </td>
            </tr>
            @endforeach

        </table>

    </div>
</div>
@include('controls/admins.outline.footer')