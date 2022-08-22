@extends('admin.layouts.index')

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
    @foreach($comments as $comment)
        <div class="modal fade" id="exampleModalCenter_{{$comment->id}}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title float-right"
                            id="exampleModalLongTitle">{{$comment->user_id}}</h5>
                    </div>
                    <div class="modal-body">
                        <time> تاریخ : {{verta($comment->created_at)->format('H:i Y/n/j')}}</time>
                        <div class="modal-body">
                            {{$comment->body}}
                        </div>
                    </div>
                    @if($comment->parent_id ==0)
                        <div class="container">
                            <form action="{{ route('admin.comments.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="parent_id" value="{{$comment->id}}">
                                <input type="hidden" name="commentable_type" value="{{$comment->commentable_type}}">
                                <input type="hidden" name="commentable_id" value="{{$comment->commentable_id}}">
                                {{--                            <input type="hidden" name="post_id" value="{{$comment->posts->id}}">--}}
                                <div class="form-group">
                                    <label>پاسخ به نظر</label>
                                    <textarea class="form-control" name="body" cols="30" rows="3" required></textarea>
                                    <button type="submit"
                                            class="btn btn-primary mb-2 mt-2 px-3 text-light btn-sm float-left">
                                        پاسخ
                                    </button>
                                </div>
                            </form>
                        </div>
                    @endif
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            بستن
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
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
@endsection
