<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">SL. No.</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $key => $data)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->price}}</td>
        <td>
            <a class="btn btn-success shadow-none update-form-button" href=""
            data-bs-toggle="modal" data-bs-target="#updateModal"
            data-id = {{$data->id}}
            data-name = {{$data->name}}
            data-price = {{$data->price}}

            >
              <i class="las la-edit"></i>
            </a>
            <a class="btn btn-danger shadow-none delete_product"
            data-id = {{$data->id}} href=""><i class="las la-trash"></i></a>
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
  {{$products->links()}}