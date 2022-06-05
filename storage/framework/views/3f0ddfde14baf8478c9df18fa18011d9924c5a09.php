<?php $__env->startSection('title'); ?>
    create course
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ایجاد دوره</h5>
            </div>
            <hr>
            <?php echo $__env->make('admin.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(route('admin.courses.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="title">نام دوره:</label>
                        <input class="form-control" id="title" name="title" type="text"
                               value="<?php echo e(old('title')); ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="slug">نام دوره به انگلیسی:</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                               value="<?php echo e(old('slug')); ?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="category_id">نوع دسته</label>
                        <select class="form-control selectpicker" data-live-search="true" id="category_id"
                                name="category_id">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group col-md-12 mt-5">
                        <div class="form-group col-md-3">
                            <label for="url">ویدئو دوره:</label>
                            <div class="input-group">
                                <input id="thumbnail" class="form-control" type="text" name="url">
                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                   class="btn btn-primary text-light">
                                    انتخاب
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="form-group col-md-12 mt-4">
                        <label for="description">توضیحات:</label>
                        <textarea name="description" id="editor"></textarea>

                    </div>

                    <div class="form-group col-md-3 mt-3">
                        <label for="actual_price">قیمت دوره:</label>
                        <input class="form-control" id="actual_price" name="actual_price" type="number"
                               value="<?php echo e(old('actual_price')); ?>">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <label for="discount_price">تخفیف دوره:</label>
                        <input class="form-control" id="discount_price" name="discount_price" type="number"
                               value="<?php echo e(old('discount_price')); ?>">
                    </div>


                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="course_lang">زبان دوره</label>
                            <input class="form-control" id="course_lang" name="course_lang" type="text"
                                   value="<?php echo e(old('course_lang')); ?>">
                        </div>
                    </div>

                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="course_time">زمان دوره</label>
                            <input class="form-control" id="course_time" name="course_time" type="text"
                                   value="<?php echo e(old('course_time')); ?>">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="course_size">حجم دوره</label>
                            <input class="form-control" id="course_size" name="course_size" type="text"
                                   value="<?php echo e(old('course_size')); ?>">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="course_kind">نوع دوره</label>
                            <input class="form-control" id="course_kind" name="course_kind" type="text"
                                   value="<?php echo e(old('course_kind')); ?>">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-12 mt-3">
                            <div class="form-group col-md-3">
                                <label for="is_active">وضعیت</label>
                                <select class="form-control" id="is_active" name="is_active">
                                    <option value="1" selected>فعال</option>
                                    <option value="0">غیرفعال</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12 mt-3">
                        <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                        <a href="<?php echo e(route('admin.courses.index')); ?>" class="btn btn-dark mt-5 mr-3">بازگشت</a>
                    </div>
                </div>
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <script>
        // $('#image').change(function() {
        //     //get the file name
        //     var fileName = $(this).val();
        //     //replace the "Choose a file" label
        //     $(this).next('.custom-file-label').html(fileName);
        // });
        // $("#czTag").czMore();
        // $(function () {
        //     $('.selectpicker').selectpicker();
        // });
        //
        // ClassicEditor
        //     .create(document.querySelector('#editor'))
        //     .catch(error => {
        //         console.error(error);
        //     });

        var options = {
            filebrowserImageBrowseUrl: '/filemanager?type=Images',
            filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/filemanager?type=Files',
            filebrowserUploadUrl: '/filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace('editor', options);

        $('#lfm').filemanager('file');
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WebSite\kimiaAcademy-next\kimiaAcademy\resources\views/admin/courses/create.blade.php ENDPATH**/ ?>