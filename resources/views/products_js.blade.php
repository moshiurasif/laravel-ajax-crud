<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    
    $.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

</script>
<script>
    $(document).ready(function(){
       $(document).on('click', '.add_product', function(e){
        e.preventDefault();
        let name = $('#name').val();
        let price = $('#price').val();
        
        $.ajax({
            url:"{{route('add.product')}}",
            method: 'post',
            data: {name:name, price:price},
            success: function (res) {
                if (res.status == 'success') {
                   $('#addModal').modal('hide'); 
                   $('#addProductForm')[0].reset();
                   $('#success').text('Product Added Successfully');
                   $('.table').load(location.href + ' .table');
                }
            },
            error: function(err){
                let error = err.responseJSON;
                $.each(error.errors, function(index, value){
                    $('.errorMsgContainer').append('<span class="text-danger">'+value+'</span>'+'</br>')
                })
            }
        })
       })
})
</script>