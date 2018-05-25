<span
        @if (isset($id))
        id="{{ $id }}"
        @endif
        class="tooltips {{ $class or '' }}"
        data-toggle="tooltip"
        data-placement="top"
        data-original-title="{{ $title or $text }}"
>
	{{ $text }}
</span>