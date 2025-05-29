<script>
$(document).ready(function() {
    $(document).on('click', '#product-save', function (e) {
        e.preventDefault();

        // Clear previous error states
        $('#name, #price, #image_name').removeClass('is-invalid');

        const name = $('#name').val().trim();
        const price = $('#price').val().trim();
        const coverImage = $('#image_name').prop('files')[0];

        let hasError = false;

        if (!name) {
            $('#name').addClass('is-invalid');
            hasError = true;
        }

        if (!price) {
            $('#price').addClass('is-invalid');
            hasError = true;
        }

        if (!coverImage) {
            $('#image_name').addClass('is-invalid');
            hasError = true;
        }

        if (hasError) {
            return;
        }

        const form = $('#productForm')[0];
        const formData = new FormData(form);

        $.ajax({
            url: '{{ route("products.store") }}',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            success: function (response) {
                alert('Product submitted successfully!');
                $('#productForm')[0].reset();
                $('#name, #price, #coverImage').removeClass('is-invalid');
            },
            error: function (xhr) {
                alert('An error occurred. Please try again.');
                console.error(xhr.responseText);
            }
        });
    });
});
</script>
