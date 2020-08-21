<template>
    <div><slot></slot></div>
<!--    <div ref="series-banner-meta" class="series-banner-meta hidden md:block bg-red py-2">
        <div class="container">
            <ul class="level color-text-lighter text-xs">
&lt;!&ndash;                LEFT SIDE&ndash;&gt;
                <li class="level-left">
                    <div class="level-item">
                        <p class="in-caps">
                            <a href="/series?curated" class="inherits-color is-vertically-centered">
&lt;!&ndash;                                <span class= '*>&#8592;</span>&ndash;&gt;
                                <strong>Back to Main</strong>
                            </a>
                        </p>
                    </div>
                    <div class="level-item">
                    <span class="in-caps is-bold color-primary">
                    Updated &lt;!&ndash;{{ $series->updated_at->diffForHumans() }}&ndash;&gt;
                    </span>
                    </div>
                </li>
&lt;!&ndash;                RIGHT SIDE&ndash;&gt;
                <li class="level-right">
&lt;!&ndash;                    @if (count($series->skills))&ndash;&gt;
&lt;!&ndash;    &ndash;&gt;
&lt;!&ndash;                    @endif&ndash;&gt;
                </li>

            </ul>
        </div>
    </div>-->
</template>

<script>
    import { throttle } from 'lodash';
    export default {
        name: "SeriesBanner",
        mounted() {
            let el =  this.$el;
            let originalOffsetTop = this.$el.offsetTop;
            window.addEventListener(
                'scroll',
                throttle(function() {
                    el.classList.[
                        window.scrollY >= originalOffsetTop ? 'add' : 'remove'
                    ]('is-fixed-to-top');
                }, 300)
            );
        }
    }
</script>

<style scoped>

</style>
