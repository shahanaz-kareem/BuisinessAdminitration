<script>
$(document).ready(function() {
    $('#roleCreatemodal').on('click', function() {
        $('#permissionModal').modal('show');
    });  
    $('.close, .cancel-btn').on('click', function() {
        $('#permissionModal').modal('hide');
        $('#editPermissionModal').modal('hide');
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
                        <a href="#" class="editpermission" data-id="${response.id}" id="edit-permission">
                                            <span class="fa-fw select-all fas"></span>
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


    $(document).on('click', '.editpermission', function(e) {
        e.preventDefault();
        var permissionId = $(this).data('id');
        
            $.ajax({
                url: '{{ route('permission.edit', '') }}/' + permissionId, 
                type: 'GET',
                success: function(response) {
                    if(response.success) {
                        var permissionData = response.data;

                        $('#editPermissionModal #permissionName').val(permissionData.name); 
                        $('#editPermissionModal #id').val(permissionData.id); 
                        $('#editPermissionModal').modal('show');
                        
                        console.log(permissionData);
                    } else {
                        Swal.fire('Error!', 'Failed to retrieve permission data.', 'error');
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire('Error!', 'An error occurred while retrieving the permission: ' + error, 'error');
                }
            });
    });


    $(document).on('submit', '#permissioneditForm', function(e) {
        e.preventDefault(); 

        var permissionId = $('#id').val(); 
        var permissionName = $('#permissionName').val();  

 
     

        $.ajax({
            url: '{{ route('permission.update', '') }}/' + permissionId,  
            type: 'PATCH',
            data: {
                _token: '{{ csrf_token() }}', 
                permission: permissionName,  
            },
            success: function(response) {
                if (response.success) {
                    console.log(permissionName);
                    Swal.fire('Updated!', 'The permission has been updated.', 'success');
                    $('#editPermissionModal').modal('hide');
                    $('#permission-row-' + permissionId).find('.permission-name').text(permissionName);

                } else {
                    Swal.fire('Error!', 'Failed to update the permission.', 'error');
                }
            },
            error: function(xhr, status, error) {
                Swal.fire('Error!', 'An error occurred while updating the permission: ' + error, 'error');
            }
        });
    });


});


</script>