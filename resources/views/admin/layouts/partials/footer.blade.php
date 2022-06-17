<!-- Scroll to Top Button-->
@include('admin.layouts.partials.scroll_top')

<!-- JavaScript-->
<script src="{{ asset('assets/admin/script/admin.js') }}"></script>
<script src="{{ asset('assets/admin/libs/ckeditor/ckeditor.js') }}"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    // $("#czTag").czMore();
    var options = {
        filebrowserImageBrowseUrl: '/filemanager?type=Images',
        filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/filemanager?type=Files',
        filebrowserUploadUrl: '/filemanager/upload?type=Files&_token='
    };

    CKEDITOR.replace('editor', options);

    $('#files').filemanager('file');
    $('#images').filemanager('image');

</script>
{{--@include('sweet::alert')--}}
@include('sweetalert::alert')

@yield('script')

<script>
    function fireSweetAlert(form) {
        swal({
            title: "آیا از پاک کردن این اطلاعات مطمئن هستید؟",
            text: "در صورت تایید برای همیشه پاک می شود",
            icon: "error",
            buttons: true,
            dangerMode: true,
        })
            .then(function (isOkay) {
                if (isOkay) {
                    form.submit();
                }
            });
        return false;
    }
</script>
</body>

</html>
