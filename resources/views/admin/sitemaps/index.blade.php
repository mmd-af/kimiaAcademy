@extends('admin.layouts.index')

@section('title')
    index sitemaps
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h5 class="mb-3 mb-md-0">نقشه ی سایت</h5>
                </div>
                <div class="col-md-3 m-5">
                    <a href="{{route('admin.sitemaps.generate')}}" class="btn btn-primary">تازه کردن نقشه ی سایت</a>
                </div>
            </div>
        </div>
    </div>
@endsection
