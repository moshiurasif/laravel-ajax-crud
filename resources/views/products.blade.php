<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <title>Laravel Ajax Crud</title>
  </head>
  <body>
   <div class="container">
    <h2 class="text-center my-3">Laravel Ajax Crud Operation</h2>
    <div class="row">
        <div class="col-md-8 m-auto">
            <a class="btn btn-primary shadow-none" data-bs-toggle="modal" data-bs-target="#addModal" href="">Add Product</a>
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
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a class="btn btn-success shadow-none" href=""><i class="las la-edit"></i></a>
                        <a class="btn btn-danger shadow-none" href=""><i class="las la-trash"></i></a>
                    </td>
                  </tr>
                 
                </tbody>
              </table>
        </div>
    </div>
   </div>

   @include('product_modal');
   @include('products_js');

  </body>
</html>