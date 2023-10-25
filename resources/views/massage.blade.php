@if (Session::get('success', false))
    @php
        $data = Session::get('success');
    @endphp

    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-success" role="alert">{{ $msg }}</div>
        @endforeach
    @else
        <div class="alert alert-success" role="alert">{{ $data }}</div>
    @endif
@endif

@if (isset($errors) && count($errors) > 0)
    <div class="alert alert-warning" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
