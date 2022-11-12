@include('controls/admins.outline.header')

<style>
    @media screen and (max-width: 700px) {
        td:nth-child(2):before {
            content: "Instagram";
        }

        td:nth-child(3):before {
            content: "Facebook";
        }

        td:nth-child(4):before {
            content: "Location";
        }

        td:nth-child(5):before {
            content: "Email";
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
                <th>No Hp</th>
                <th>Instagram</th>
                <th>Facebook</th>
                <th>Location</th>
                <th>Email</th>
            </tr>

            @foreach($contact as $indexContact)
            <tr>
                <td>{{ $indexContact->no_hp }}</td>
                <td>{{ $indexContact->instagram }}</td>
                <td>{{ $indexContact->facebook }}</td>
                <td>{{ $indexContact->location }}</td>
                <td>{{ $indexContact->email }}</td>
                <td>
                    <div class="w-100 d-flex justify-content-end">
                        <a class="btn btn-primary" href="{{ route('contact.edit',$indexContact->id) }}">Edit</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@include('controls/admins.outline.footer')