<script>
$(document).ready(function() {
      let tableProduct = document.querySelector('#productTable');
      let dataTable = new simpleDatatables.DataTable(tableProduct);


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
                        // Show success alert
                        Swal.fire('Success!', 'Product has been ' + (status === 'approved' ? 'approved' : 'rejected'), 'success');

                        $('.approveButton' + productId).prop('disabled', true).text(status === 'approved' ? 'Approved' : 'Rejected');
                        $('.rejectButton' + productId).prop('disabled', true).text(status === 'rejected' ? 'Rejected' : 'Approved');

                        if (status === 'approved') {
                            $('.rejectButton' + productId).hide(); 
                        } else {
                            $('.approveButton' + productId).hide(); 
                        }
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


    $(document).on('submit', '.delete-product-form', function(e) {
    e.preventDefault(); // prevent normal form submission

    let form = this;
    let url = $(form).attr('action');
    let token = $(form).find('input[name="_token"]').val();

    Swal.fire({
        title: 'Are you sure?',
        text: "This action will permanently delete the product.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _method: 'DELETE',
                    _token: token
                },
                success: function(response) {
                    Swal.fire('Deleted!', 'Product has been deleted.', 'success').then(() => {
                        // Reload or remove the product row
                        location.reload();
                    });
                },
                error: function(xhr) {
                    Swal.fire('Error!', 'Something went wrong.', 'error');
                }
            });
        }
    });
});

});
</script>
