<script src="{{ asset('/') }}static/js/components/dark.js"></script>
<script src="{{ asset('/') }}extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script src="{{ asset('/') }}compiled/js/app.js"></script>

<!-- Need: Apexcharts -->
<script src="{{ asset('/') }}extensions/apexcharts/apexcharts.min.js"></script>
<script src="{{ asset('/') }}static/js/pages/dashboard.js"></script>

<script src="{{ asset('/') }}static/js/initTheme.js"></script>
{{-- Datatable --}}
<script src="{{ asset('/') }}extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="{{ asset('/') }}static/js/pages/simple-datatables.js"></script>
{{-- Select --}}
<script src="{{ asset('/') }}extensions/choicesjs/public/assets/scripts/choices.js"></script>
<script src="{{ asset('/') }}static/js/pages/form-element-select.js"></script>
{{-- Upload File --}}

<script
    src="{{ asset('/') }}extensions/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js">
</script>
<script
    src="{{ asset('/') }}extensions/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js">
</script>
<script src="{{ asset('/') }}extensions/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
<script
    src="{{ asset('/') }}extensions/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js">
</script>
<script src="{{ asset('/') }}extensions/filepond-plugin-image-filter/filepond-plugin-image-filter.min.js"></script>
<script src="{{ asset('/') }}extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js">
</script>
<script src="{{ asset('/') }}extensions/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
<script src="{{ asset('/') }}extensions/filepond/filepond.js"></script>
<script src="{{ asset('/') }}extensions/toastify-js/src/toastify.js"></script>
<script src="{{ asset('/') }}static/js/pages/filepond.js"></script>
{{-- Sweetalert2 --}}
<script src="{{ asset('/') }}extensions/sweetalert2/sweetalert2.min.js"></script>
>
<script src="{{ asset('/') }}static/js/pages/sweetalert2.js"></script>
>
<script>
    // Toast
    @if (Session::has('success'))
        Toast.fire({
            icon: 'success',
            title: '{{ Session::get('success') }}'
        })
    @elseif (Session::has('error'))
        Toast.fire({
            icon: 'error',
            title: '{{ Session::get('error') }}'
        })
    @endif

    // Delete data
    function deleteRow(id, name) {
        Swal2.fire({
            icon: "error",
            title: "Are you sure ?",
            text: "You want to delete " + name + " ?",
            showCancelButton: true,
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            confirmButtonColor: "#dc3545",
            cancelButtonColor: "#6c757d",
        }).then((response) => {
            if (response == true) {
                $('#deleteAction' + id).submit();
            }
        });
    }
</script>
@stack('custom-js')
