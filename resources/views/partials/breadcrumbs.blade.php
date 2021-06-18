@if (count($breadcrumbs))

    <ul class="breadcrumb breadcrumb-transparent breadcrumb-slash font-weight-bold p-0 my-2 font-size-sm">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ul>

@endif

