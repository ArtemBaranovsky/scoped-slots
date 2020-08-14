<template>
    <div class="container">
        <ul>
<!--			<li v-for="item in items" v-text="item">-->
			<li v-for="item in items">
<!--                <slot :item="item">{{ item }}</slot>-->
                <slot name="menu-item" :item="item">{{ item }}</slot>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['items'],
		// mounted() {
        //     console.log('Component mounted.')
        // }
    }
</script>
