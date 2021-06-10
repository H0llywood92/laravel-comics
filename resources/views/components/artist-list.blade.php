<ul class="artist-name">

    @foreach ($type_of_artist as $item)

    <li>{{ $item }} {{!$loop->last ? ',' : '' }}
        {{-- This is the last iteration --}}
    </li>

    {{-- @if(!$loop->last)
    ,
    @endif --}}

    @endforeach

</ul>