<script>
$(document).ready(function() {
    $('#roleCreatemodal').on('click', function() {
        $('#permissionModal').modal('show');
    });  
    $('.close, .cancel-btn').on('click', function() {
        $('#permissionModal').modal('hide');
    });
    let table1 = document.querySelector('#permissiontable');
    let dataTable = new simpleDatatables.DataTable(table1);
    
    $('#launchModalBtn').on('click', function(e) {
        e.preventDefault();
        var permissionName = $('#permission').val();

        $.ajax({
            url: '{{ route('permission.store') }}',
            type: 'POST',
            data: {
                permission: permissionName,
                _token: '{{ csrf_token() }}',
            },
            success: function(response) {
                var newRow = `
                <tr id="permission-row-${response.id}">
                    <td>${response.id}</td>
                    <td><label><input type="checkbox" name="permission[]" class="name form-check-input me-1" value="${response.id}"> ${response.name}</label></td>
                    <td>
                        <a href="javascript:void(0);" class="deletepermission" data-id="${response.id}" id="trash-${response.id}">
                             <span class="fa-fw select-all fas"></span>
                        </a>
                    </td>
                </tr>
            `;
            $('#permissiontable tbody').append(newRow);
                $('#permissionModal').modal('hide');
            },
            error: function(xhr, status, error) {
                alert('An error occurred: ' + error);
            }
        });
    });

    $('#permissionModal').on('hidden.bs.modal', function() {
        $('#permissionForm')[0].reset();
    });


    $('body').on('click', '.deletepermission', function(e) {
        e.preventDefault();

        var permissionId = $(this).data('id');
        var row = $('#permission-row-' + permissionId);

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '{{ route('permission.destroy', '') }}/' + permissionId,  
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        row.remove();
                        Swal.fire('Deleted!', 'Your permission has been deleted.', 'success');
                    },
                    error: function(xhr, status, error) {
                        Swal.fire('Error!', 'An error occurred while deleting the permission: ' + error, 'error');
                    }
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire('Cancelled', 'Your permission is safe :)', 'info');
            }
        });
    });
});

</script>