<script>
$(document).ready(function() {
    // Initialize Select2
    $('#parent_id').select2({
        placeholder: "Select a parent category",
        allowClear: true,
        width: '100%' // Optional
    });
  let tableProduct = document.querySelector('#catTable');
      let dataTable = new simpleDatatables.DataTable(tableProduct);
    $(document).on('click', '#category-save', function (e) {
        e.preventDefault();

        // Clear previous error states
        $('#name').removeClass('is-invalid');
        $('#parent_id').next('.select2-container').removeClass('is-invalid');

        const name = $('#name').val().trim();
        const parent_id = $('#parent_id').val();

        let hasError = false;

        if (!name) {
            $('#name').addClass('is-invalid');
            hasError = true;
        }

        if (!parent_id) {
            $('#parent_id').next('.select2-container').addClass('is-invalid');
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

        const form = $('#categoryForm')[0]; // Use [0] to get raw DOM element
        const formData = new FormData(form);

        $.ajax({
            url: '{{ route("category.store") }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            success: function (response) {
                Toastify({
                    text: "Category submitted successfully!",
                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                    duration: 3000,
                    close: true,
                }).showToast();

                $('#categoryForm')[0].reset();
                $('#parent_id').val("0").trigger('change'); // Reset Select2
                $('#name').removeClass('is-invalid');
                $('#parent_id').next('.select2-container').removeClass('is-invalid');

                setTimeout(() => {
                    window.location.href = '{{ route("category.index") }}';
                }, 2000);
            },
            error: function (xhr) {
                Toastify({
                    text: "An error occurred. Please try again.",
                    backgroundColor: "linear-gradient(to right, #FF5F6D, #FFC371)",
                    duration: 3000,
                    close: true,
                }).showToast();
                console.error(xhr.responseText);
            }
        });
    });
});
</script>
