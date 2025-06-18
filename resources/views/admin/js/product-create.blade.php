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
                Toastify({
                    text: "Product submitted successfully!",
                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                    duration: 3000,
                    close: true,
                }).showToast();

                $('#productForm')[0].reset();
                $('#name, #price, #images').removeClass('is-invalid');

                // Redirect after 2 seconds if needed
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
<script>
document.addEventListener('DOMContentLoaded', function () {
    const imageInput = document.getElementById('images');
    const imagePreview = document.getElementById('image-preview');
    let imageFiles = [];

    imageInput.addEventListener('change', function (e) {
        const files = Array.from(e.target.files);

        files.forEach((file) => {
            if (!file.type.startsWith('image/')) return;

            const reader = new FileReader();
            reader.onload = function (e) {
                const imgContainer = document.createElement('div');
                imgContainer.classList.add('position-relative');
                imgContainer.style.width = '100px';

                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('img-thumbnail');
                img.style.width = '100%';

                const closeBtn = document.createElement('button');
                closeBtn.innerHTML = '&times;';
                closeBtn.classList.add('btn', 'btn-danger', 'btn-sm');
                closeBtn.style.position = 'absolute';
                closeBtn.style.top = '0';
                closeBtn.style.right = '0';

                closeBtn.addEventListener('click', () => {
                    const index = imageFiles.indexOf(file);
                    if (index > -1) {
                        imageFiles.splice(index, 1);
                    }
                    imgContainer.remove();
                    updateInputFiles();
                });

                imgContainer.appendChild(img);
                imgContainer.appendChild(closeBtn);
                imagePreview.appendChild(imgContainer);

                imageFiles.push(file);
                updateInputFiles();
            };

            reader.readAsDataURL(file);
        });

        // Clear original input so same file can be re-added
        imageInput.value = '';
    });

    function updateInputFiles() {
        const dataTransfer = new DataTransfer();
        imageFiles.forEach(file => dataTransfer.items.add(file));
        imageInput.files = dataTransfer.files;
    }

    // Optional: handle form submission via AJAX here if needed
});
</script>
