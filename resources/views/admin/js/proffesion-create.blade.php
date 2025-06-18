<script>
$(document).ready(function() {
    
     
    $(document).on('click', '#proffesion-category-save', function (e) {
        e.preventDefault();
        // Clear previous error states
        $('#name').removeClass('is-invalid');

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

        const form = $('#proffesioncategoryForm')[0]; // Use [0] to get raw DOM element
        const formData = new FormData(form);

        $.ajax({
            url: '{{ route("proffesion.store") }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            success: function (response) {
                Toastify({
                    text: "Proffesion submitted successfully!",
                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                    duration: 3000,
                    close: true,
                }).showToast();

                $('#proffesioncategoryForm')[0].reset();
               
                $('#name').removeClass('is-invalid');
               

                setTimeout(() => {
                    window.location.href = '{{ route("proffesion.create") }}';
                }, 2000);
            },
           error: function (xhr) {
                let errorMessage = "An error occurred. Please try again.";

                if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
                    // Laravel validation error format
                    const errors = xhr.responseJSON.errors;
                    errorMessage = Object.values(errors).map(messages => messages[0]).join('\n');
                }

                Toastify({
                    text: errorMessage,
                    backgroundColor: "linear-gradient(to right, #FF5F6D, #FFC371)",
                    duration: 4000,
                    close: true,
                }).showToast();

                console.error(xhr.responseText);
            }

        });
    });



    $(document).on('click', '#proffesion-update', function (e) {
        e.preventDefault();

        $('#name').removeClass('is-invalid');
      
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

        const form = $('#proffessionUpdateform')[0];
        const formData = new FormData(form);

        $.ajax({
            url: $('#proffessionUpdateform').attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            success: function (response) {
                Toastify({
                    text: "Proffesion updated successfully!",
                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                    duration: 3000,
                    close: true,
                }).showToast();

                setTimeout(() => {
                    window.location.href = '{{ route("proffesion.index") }}';
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
