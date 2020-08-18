<nav class="{{ isset($isHomePage) ? 'mb-10' : 'new-nav' }}">
    <div>
    {{--    Top Section--}}
        @if (isset($isHomePage))
            <div class="flex justify-between items-center mb-8 pt-4">
        @else
            <div class="flex justify-between relative mb-8 container mx-auto pt-4">
        @endif
{{--                        <a href="/">
                            @if (isset($isHomePage))
                                @include ('layouts.partials.logo-black-svg')
                            @else
                                @include ('layouts.partials.logo-white-svg')
                            @endif
                        </a>--}}
                    <div>
                        <span class="nav-toggle" @click="toggleNav">
                        <span></span>
                        <span></span>
                        <span></span>

{{--                        @if ($signedin)--}}
{{--                            <div class="nav-right nav-menu relative">--}}
{{--                                <div class="nav-item">--}}
{{--                                    @include ('layouts.nav.account-dropdown')--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @else--}}
                            <div class="nav-right nav-menu relative">
                                <a href="/login"
                                   class="nav-item is-bold uppercase mr-4 text-sm"
                                   @click.prevent="dispatch('Login')"
                                >
                                    Sign In
                                </a>
                                <a class="nav-item is-bold uppercase border rounded-full text-sm" href="/join">
                                    Get Started
                                </a>
                            </div>
{{--                        @endif--}}
                    </div>
            </div>

            <!-- Bottom Section  -->
{{--                @unless (isset($isHomePage))--}}
            <div class="md:flex md:justify-center text-center md:w-l/2 md:mx-auto">

                <a href="/lessons"
                class="block md:px-8 md:flex-1 uppercase text-transparent-50 font-bold hover:text-white pb-8"
                >
                    Catalog
                </a>

                <series-dropdown></series-dropdown>

                <a href="/podcast"
                class="block md:px-8 md:flex-1 uppercase text-transparent-50 font-bold hover:text-white pb-8"
                >
                    Podcast
                </a>

                <a href="/podcast"
                class="block md:px-8 md:flex-1 uppercase text-transparent-50 font-bold hover:text-white pb-8"
                >
                    Discussions
                </a>
            </div>
{{--                @endunless--}}
    </div>
</nav>

<portal-target name="nav-after">
</portal-target>
