
  <!-- Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateProductModal" aria-hidden="true">
    <form action="" method="post" id="updateProductForm">
        @csrf

        <input type="hidden" id="up_id" name="up_id">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="updateProductModal">Update Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="errorMsgContainer mb-3">

                </div>
                <div class="mb-3">
                    <label for="up_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="up_name" name="up_name" placeholder="product name">
                    
                  </div>
                <div class="mb-3">
                    <label for="up_price" class="form-label">Product Price</label>
                    <input type="text" class="form-control" id="up_price" name="up_price" placeholder="product price">
                    
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary update_product">Update Product</button>
              </div>
            </div>
          </div>
    </form>
  </div>