<script>
$(document).ready(function() {
   $(document).on('click', '#product-save', function (e) {
    e.preventDefault();

    // Clear previous error states
    $('#name, #price, #images').removeClass('is-invalid');

    const name = $('#name').val().trim();
    const price = $('#price').val().trim();
    const coverImage = $('#images').prop('files')[0];

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
        $('#images').addClass('is-invalid');
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

    const form = $('#projectForm')[0];
    const formData = new FormData(form);

    // Add project description from WYSIWYG editor (if used)
    const description = $('#editor').val();
    formData.set('project_description', description);

    // Append multiple video files manually
    const videoFiles = $('#productVideos')[0]?.files;
    if (videoFiles) {
        for (let i = 0; i < videoFiles.length; i++) {
            formData.append('productVideos[]', videoFiles[i]);
        }
    }

    $.ajax({
        url: '{{ route("uploads.store") }}',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        success: function (response) {
            Toastify({
                text: "Product submitted successfully!",
                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                duration: 3000,
                close: true,
            }).showToast();

            $('#productForm')[0].reset();
            $('#name, #price, #images').removeClass('is-invalid');

            setTimeout(() => {
                window.location.href = '{{ route("products.index") }}';
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