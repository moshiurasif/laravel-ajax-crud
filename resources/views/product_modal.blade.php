
  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addProductModal" aria-hidden="true">
    <form action="{{url('/add-product')}}" method="post" id="addProductForm">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addProductModal">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="errorMsgContainer mb-3">

                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="product name">
                    
                  </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="product price">
                    
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_product">Save Product</button>
              </div>
            </div>
          </div>
    </form>
  </div>