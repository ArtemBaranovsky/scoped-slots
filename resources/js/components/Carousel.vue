<template>
    <div data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true }'>
        <slot>
        </slot>
    </div>
</template>

<script>
    import Flickity from 'flickity';
    import 'flickity/dist/flickity.min.css';
    export default {
        name: "Carousel",
        props: {
            wraparound: { default: true },
            autoplay: { default: false }
        },
        mounted() {
            new Flickity(this.$el, {
                wrapAround: this.wraparound,
                autoPlay: this.autoplay,
                cellAlign: "left",
                contain: true
            })
        }
    }
</script>

<style scoped>

</style>
