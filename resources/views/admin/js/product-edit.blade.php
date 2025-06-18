<script>
$(document).ready(function() {
    $(document).on('click', '#product-update', function (e) {
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

        if (hasError) {
            Toastify({
                text: "Please fill all required fields",
                backgroundColor: "linear-gradient(to right, #FF5F6D, #FFC371)",
                duration: 3000,
                close: true,
            }).showToast();
            return;
        }

        const form = $('#productUpdateForm')[0];
        const formData = new FormData(form);

        $.ajax({
            url: '{{ route('products.update', $product->id) }}',
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

                $('#productUpdateForm')[0].reset();
                $('#name, #price, #images').removeClass('is-invalid');

                // Redirect to index page after 2 seconds
                setTimeout(function() {
                    window.location.href = '{{ route('products.index') }}';
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
    const removedImagesInput = document.getElementById('removed_images');

    let imageFiles = [];
    let removedImages = [];

    // Handle new image uploads & previews
    imageInput.addEventListener('change', function (e) {
        const files = Array.from(e.target.files);

        files.forEach((file) => {
            if (!file.type.startsWith('image/')) return;

            // Prevent duplicate new files
            if (imageFiles.some(f => f.name === file.name && f.size === file.size)) {
                return;
            }

            const reader = new FileReader();
            reader.onload = function (e) {
                const imgContainer = document.createElement('div');
                imgContainer.classList.add('position-relative');
                imgContainer.style.width = '100px';
                imgContainer.style.marginRight = '10px';
                imgContainer.style.marginBottom = '10px';
                imgContainer.style.height = '100px';

                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('img-thumbnail');
                img.style.width = '100%';
                img.style.height = '100%';
                img.style.objectFit = 'cover';

                const closeBtn = document.createElement('button');
                closeBtn.innerHTML = '&times;';
                closeBtn.classList.add('btn', 'btn-danger', 'btn-sm');
                closeBtn.style.position = 'absolute';
                closeBtn.style.top = '0';
                closeBtn.style.right = '0';
                closeBtn.style.padding = '0 6px';
                closeBtn.style.lineHeight = '1';

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

        // Reset input so same file can be reselected
        imageInput.value = '';
    });

    function updateInputFiles() {
        const dataTransfer = new DataTransfer();
        imageFiles.forEach(file => dataTransfer.items.add(file));
        imageInput.files = dataTransfer.files;
    }

    // Handle removing existing images
    document.querySelectorAll('.remove-existing-image-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const imageId = this.getAttribute('data-image-id');

            // Remove image container from DOM
            const container = document.getElementById('current-image-' + imageId);
            if (container) container.remove();

            // Add to removedImages array (only unique IDs)
            if (!removedImages.includes(imageId)) {
                removedImages.push(imageId);
            }

            // Update hidden input value
            removedImagesInput.value = removedImages.join(',');
        });
    });
});
</script>

