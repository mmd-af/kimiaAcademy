

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

@yield('script')

</body>

</html>
