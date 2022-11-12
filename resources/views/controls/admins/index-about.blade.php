@include('controls/admins.outline.header')

<style>
    @media screen and (max-width: 700px) {

        td:nth-child(2):before {
            content: "Banner Text";
        }

        td:nth-child(3):before {
            content: "Banner Span";
        }

        td:nth-child(4):before {
            content: "Description";
        }

        td:nth-child(5):before {
            content: "Visi";
        }

        td:nth-child(6):before {
            content: "Misi";
        }
    }
</style>

<div class="container pt-3">
    <div class="container d-flex justify-content-center">
        <a type="button" class="btn btn-info btn-dashboard" href="{{ url('dashboard') }}">Back</a>
    </div>
    <div class="table-users">
        <div class="header">About
        </div>

        <table cellspacing="0">
            <tr>
                <th>Banner</th>
                <th>Banner Text</th>
                <th>Banner Span</th>
                <th>Description</th>
                <th>Visi</th>
                <th>Misi</th>
            </tr>

            @foreach($about as $indexAbout)
            <tr>
                <td>
                    <img src="/images/abouts/{{ $indexAbout->banner }}">
                </td>
                <td>{{ $indexAbout->banner_text }}</td>
                <td>{{ $indexAbout->banner_span }}</td>
                <td>{{ $indexAbout->description }}</td>
                <td>{{ $indexAbout->visi }}</td>
                <td>{{ $indexAbout->misi }}</td>
                <td>
                    <div class="w-100 d-flex justify-content-end">
                        <a class="btn btn-primary" href="{{ route('about.edit',$indexAbout->id) }}">Edit</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>

@include('controls/admins.outline.footer')