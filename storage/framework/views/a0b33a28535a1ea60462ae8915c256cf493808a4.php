<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>kimyagaracademy.com - <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>

    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('assets/admin/css/admin.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('style'); ?>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
<?php echo $__env->make('admin.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
        <?php echo $__env->make('admin.layouts.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <?php echo $__env->yieldContent('content'); ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
    <?php echo $__env->make('admin.layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<?php echo $__env->make('admin.layouts.partials.scroll_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- JavaScript-->
<script src="<?php echo e(asset('assets/admin/script/admin.js')); ?>"></script>
<script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>



<?php echo $__env->yieldContent('script'); ?>

</body>

</html>
<?php /**PATH D:\WebSite\kimiaAcademy-next\kimiaAcademy\resources\views/admin/layouts/admin.blade.php ENDPATH**/ ?>