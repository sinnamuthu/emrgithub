<!DOCTYPE html>
<html>
<head>
    <title>Laravel Dropzone Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.3/dist/dropzone.min.css">
</head>
<body>

<h1>Laravel Dropzone Example</h1>

<form action="{{ url('/file-upload') }}" class="dropzone" id="my-dropzone">
    @csrf
</form>

<script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.3/dist/dropzone.min.js"></script>
<script>
    Dropzone.options.myDropzone = {
        maxFilesize: 2,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        init: function () {
            this.on("success", function (file, response) {
                // Handle success callback
            });

            this.on("removedfile", function (file) {
                // Handle file removal callback
            });
        }
    };
</script>

</body>
</html>