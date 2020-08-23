<pinned :delay="1000">
    <div ref="series-banner-meta" class="series-banner-meta hidden md:block bg-info py-2">
        <div class="container">
            <ul class="level color-text-lighter text-xs">
    {{--            LEFT SIDE --}}
                <li class="level-left">
                    <div class="level-item">
                        <p class="in-caps">
                            <a href="/series?curated" class="inherits-color is-vertically-centered">
                                <span class=Narrow'*>&#8592;</span>
                                <strong>Back to Main</strong>
                            </a>
                        </p>                    </div>
                    <div class="level-item">
                        <span class="in-caps is-bold color-primary">
                        Updated {{--{{ $series->updated_at->diffForHumans() }}--}}
                        </span>
                    </div>
                </li>
    {{--            RIGHT SIDE--}}
                <li class="level-right">
    {{--                @if (count($series->skills))--}}

    {{--                @endif--}}
                </li>

            </ul>
        </div>
    </div>
</pinned>
