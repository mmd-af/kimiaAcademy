@if ($errors->any())
    <div class="alert alert-danger">
        <div class="item">
            <div class="down-content">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        </div>

    </div>
@endif
