<template>
    <transition name="fade">
        <div v-if="isVisible">
        <slot></slot>
    </div>
    </transition>
</template>

<script>
    import inViewPort from 'in-viewport';
    export default {
        name: "ConditionalElement",
        props: ['whenHidden'],
        data() {
            return {
                isVisible: false
            }
        },
        mounted() {
            window.addEventListener('scroll', this.checkDisplay, { passive: true });
        },
        methods: {
            checkDisplay() {
                this.isVisible = ! inViewPort(
                    document.querySelector(this.whenHidden)
                );
                console.log(this.isVisible);
            }
        }
    }
</script>

<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .3s;
    }
    .fade-enter, .fade-leave-to {
        opacity: 0;
    }
</style>
