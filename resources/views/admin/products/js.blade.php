<script>
    $(document).ready(function() {
      let table1 = document.querySelector('#productTable');
      let dataTable = new simpleDatatables.DataTable(table1);


    $(document).on('click', '#approveButton, #rejectButton', function(e) {
    e.preventDefault();

    var status = $(this).data('status');
    var productId = $(this).data('product');; 
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes!',
        cancelButtonText: 'cancel!'
    }).then((result) => {
        if (result.isConfirmed) {
         
      

            var formData = {
                id: productId,
                status: status,
                _token: $('input[name="_token"]').val()
            };

            // AJAX Request
            $.ajax({
                url:"{{ route('products.approve') }}",
                type: 'POST',
                data: formData,
                success: function(response) {
                    Swal.fire(
                        'Success!',
                    );
                },
                error: function(xhr, status, error) {
                    Swal.fire(
                        'Error!',
                        'Something went wrong. Please try again.',
                        'error'
                    );
                }
            });
        }
    });
});


});
</script>