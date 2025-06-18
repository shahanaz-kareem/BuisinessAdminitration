<script>
$(document).ready(function() {
    // Initialize Select2
    $('#parent_id').select2({
        placeholder: "Select a parent category",
        allowClear: true,
        width: '100%' // Optional
    });
 
   $(document).on('click', '#category-update', function (e) {
        e.preventDefault();

        $('#name').removeClass('is-invalid');
        $('#parent_id').next('.select2-container').removeClass('is-invalid');

        const name = $('#name').val().trim();

        let hasError = false;

        if (!name) {
            $('#name').addClass('is-invalid');
            hasError = true;
        }

        if (hasError) {
            Toastify({
                text: "Please fill all required fields",
                backgroundColor: "linear-gradient(to right, #FF5F6D, #FFC371)",
                duration: 3000,
                close: true,
            }).showToast();
            return;
        }

        const form = $('#categoryUpdateform')[0];
        const formData = new FormData(form);

        $.ajax({
            url: $('#categoryUpdateform').attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            success: function (response) {
                Toastify({
                    text: "Category updated successfully!",
                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                    duration: 3000,
                    close: true,
                }).showToast();

                setTimeout(() => {
                    window.location.href = '{{ route("category.index") }}';
                }, 2000);
            },
            error: function (xhr) {
                if (xhr.status === 422 && xhr.responseJSON.errors) {
                    const errors = xhr.responseJSON.errors;
                    const messages = Object.values(errors).flat().join('\n');

                    Toastify({
                        text: messages,
                        backgroundColor: "linear-gradient(to right, #FF5F6D, #FFC371)",
                        duration: 5000,
                        close: true,
                    }).showToast();

                    if (errors.name) {
                        $('#name').addClass('is-invalid');
                    }
                    if (errors.parent_id) {
                        $('#parent_id').next('.select2-container').addClass('is-invalid');
                    }
                } else {
                    Toastify({
                        text: "An unexpected error occurred. Please try again.",
                        backgroundColor: "linear-gradient(to right, #FF5F6D, #FFC371)",
                        duration: 3000,
                        close: true,
                    }).showToast();
                }
            }
        });
    });

});
</script>
