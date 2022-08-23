@include('controls/admins.outline.header')

<div class="table-users">
   <div class="header">Users
      <div class="d-flex justify-content-end">
         <a href="/add-properties" class="btn btn-primary ">
            <i class="fas fa-plus">
            </i>
         </a>
      </div>
   </div>

   <table cellspacing="0">

      <tr>
         <th>Picture</th>
         <th>Name</th>
         <th>Location</th>
         <th>Phone</th>
         <th>Description</th>
         <th>Option</th>
      </tr>

      @foreach($properties as $property)
      <tr>
         <td>
            @php $property_images = json_decode($property->image); @endphp
            <img src="{{ asset('images/blueprints/'. $property_images[0]) }}">
         </td>
         <td>{{ $property->properties_name }}</td>
         <td>{{ $property->type }}</td>
         <td>{{ $property->location }}</td>
         <td>{{ $property->properties_description }}</td>
         <td>
            <div class="w-100 d-flex justify-content-end">
               <button style="width: 100px; height: 50px;" href="/update-properties/{{ $property->id }}" class="btn btn-warning editConfirm"><i class="fas fa-edit"></i> Edit</button>
               <form method="post" class="deleteConfirm" data-route="{{route('destroyProperties',$property->id)}}">
                  @csrf
                  @method('delete')
                  <button style="width: 100px; height: 50px;" type="submit" class="btn btn-danger btn-sm">Delete</button>
               </form>
            </div>
         </td>
      </tr>
      @endforeach

   </table>

</div>

@include('controls/admins.outline.footer')