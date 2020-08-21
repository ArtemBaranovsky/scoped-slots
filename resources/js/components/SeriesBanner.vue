<template>
    <div ref="series-banner-meta" class="series-banner-meta hidden md:block bg-red py-2">
        <div class="container">
            <ul class="level color-text-lighter text-xs">
<!--                LEFT SIDE-->
                <li class="level-left">
                    <div class="level-item">
                        <p class="in-caps">
                            <a href="/series?curated" class="inherits-color is-vertically-centered">
<!--                                <span class=Narrow'*>&#8592;</span>-->
                                <strong>Back to Main</strong>
                            </a>
                        </p>
                    </div>
                    <div class="level-item">
                    <span class="in-caps is-bold color-prlmary">
                    Updated <!--{{ $series->updated_at->diffForHumans() }}-->
                    </span>
                    </div>
                </li>
<!--                RIGHT SIDE-->
                <li class="level-right">
<!--                    @if (count($series->skills))-->
<!--    -->
<!--                    @endif-->
                </li>

            </ul>
        </div>
    </div>
</template>

<script>
    import { throttle } from 'lodash';
    export default {
        name: "SeriesBanner",
        mounted() {
            let bar =  this.$refs['series-banner-meta'];
            let originalOffsetTop = this.$refs['series-banner-meta'].offsetTop;
            window.addEventListener(
                'scroll',
                throttle(function() {
                    // console.log('you are scrolling');
                    if (window.scrollY >= originalOffsetTop) {
                        bar.classList.add(
                            'is-fixed-to-top'
                             // 'fixed', 'full', 'pin-t', 'z-10'
                        );
                    } else {
                        bar.classList.remove(
                            'is-fixed-to-top'
                            // 'fixed', 'full', 'pin-t', 'z-10'
                        );
                    }
                }, 300)
            );
        }
    }
</script>

<style scoped>

</style>
