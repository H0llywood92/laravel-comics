<ul class="artist-name">

    @foreach ($product[$type_of_artist] as $item)

    <li>{{ $item }} </li>

    @if(!$loop->last)
    ,
    @endif

    @endforeach

</ul>