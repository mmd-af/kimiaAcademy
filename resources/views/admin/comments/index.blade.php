@extends('admin.layouts.admin')

@section('title')
    index messsages
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4">
                <div class="table-responsive p-3">
                    <table class="table table-bordered table-striped text-center data-table">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>کاربر</th>
                            <th>متن کامنت</th>
                            <th>نوع</th>
                            <th>تاریخ</th>
                            <th>وضعیت</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody class="ml-5">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <p>{{$comments->id}}</p>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>
        $(function () {
            let languages = {
                'fa': "{{url('assets/admin/script/datatables-translates/fa.json')}}"
            };
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                pagingType: "simple",
                language: {
                    url: languages['{{ app()->getLocale() }}']
                },
                ajax: "{{ route('admin.comments.ajax.getDatatableData') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'user_id', name: 'user_id'},
                    {data: 'body', name: 'body'},
                    {data: 'commentable_type', name: 'commentable_type'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'is_active', name: 'is_active'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
    <script>
        // function showAlert(data){
        //     const obj = JSON.parse(data);
        //     // alert(obj['id']);
        //     console.log(obj);
            // swal({
            //     title: '<strong>'+${row->id}+'</strong>',
            //     icon: 'info',
            //     html:
            //         'You can use <b>bold text</b>, ' +
            //         '<a href="//sweetalert2.github.io">links</a> ' +
            //         'and other HTML tags',
            //     showCloseButton: true,
            //     showCancelButton: true,
            //     focusConfirm: false,
            //     confirmButtonText:
            //         '<i class="fa fa-thumbs-up"></i> Great!',
            //     confirmButtonAriaLabel: 'Thumbs up, great!',
            //     cancelButtonText:
            //         '<i class="fa fa-thumbs-down"></i>',
            //     cancelButtonAriaLabel: 'Thumbs down'
            // })
        // };
    </script>
@endsection
