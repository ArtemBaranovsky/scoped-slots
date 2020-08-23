<template>
<!--        <div ref="body" v-show="false">-->
        <div v-show="false">
            <slot></slot>
        </div>
</template>

<script>
    import Tooltip from 'tooltip.js';
    export default {
        name: "Tooltip",
        props: {
            name: {},
            placement: { default: 'top' },
            offset: { default: false }
        },
        mounted() {
            document
                .querySelectorAll(`[data-tooltip-name=${this.name}]`)
                .forEach(elem => {
                    new Tooltip(elem, {
                        // placement: 'top',
                        placement: this.placement,
                        // offset: '0, 30',
                        offset: this.offset,
                        // title: 'The title of the tooltip.'
                        // title: this.$refs.body.innerHTML,
                        title: this.$el.innerHTML,
                        html: true
                    });
                });
        }
    };
</script>

<style scoped>

</style>
