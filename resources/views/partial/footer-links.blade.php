<div class="column is-2 is-offset-1 is-hidden-mobile">
<h5 class="text-white font-semibold mb-6 uppercase">Learn</h5>
<ul class="leading-loose">
    <li><a class="text-transparent-50 hover:text-white" href="/lessons">Library</a><li>
    <li><a class="text-transparent-50 hover:text-white" href="/index">Lesson Index</a></li>
    <li><a class="text-transparent-50 hover:text-white" href="/shop">Apparel</a></li>
{{--    @unless ($signedIn)--}}
        <li><a class="text-transparent-50 hover:text-white" href="/join">Sign Up</a></li>
        <li>
            <a class="text-transparent-50 hover:text-white" href="/login" @click.prevent="dispatch('Login')">
                Sign in
            </a>
        </li>
{{--    @endunless--}}
    </ul>
</div>
<div class="column is-2 is-hidden-mobile">
<h5 class="text-white font-semibold mb-6 uppercase">Discuss</h5>
<ul class="leading-loose">
    <li><a class="text-transparent-50 hover:text-white" href="/discuss">Forum</a></li>
    <li><a class="text-transparent-50 hover: text-white" href="/podcast">Laracasts Snippet</a></li>
    <li><a class="text-transparent-50 hover:text-white" href="http://laravelpodcast.com">Laravel Podcast </a></li>
{{--    <li><a class="text-transparent-50 hover:text-white" href="#">Support</a></li>--}}
    <li><support-button></support-button</li>
</ul>
</div>
<div class="column is-2 is-hidden-mobile">
    <h5 class="text-white font-semibold mb-6 uppercase">Extras</h5>
</div>

