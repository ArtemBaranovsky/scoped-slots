<template>
<div>
    <accordion-item
        v-for="(item, index) in items"
        :title="item[titleName]"
        :body="item[bodyName]"
        :key="index"
        :is-open="activeItemIndex == index"
        @toggled="onToggle"
    ></accordion-item>
</div>
</template>

<script>
import AccordionItem from './AccordionItem';
    export default {
        name: 'Accordion',
        components: { AccordionItem },
        // props: ['items'],
        props: {
            items: { default: {} },
            titleName: { default: 'question' },
            bodyName: { default: 'answer' }
            // titleName: { default: 'title' },
            // bodyName: { default: 'body' }
        },
        data() {
            return {
                activeItemIndex: null,
                // activeIndex: null
                // isOpen: false
            }
        },
        methods: {
            onToggle(index) {
                if (this.activeItemIndex == index) {
                    return (this.activeItemIndex = null);
                }
                this.activeItemIndex = index;
                // console.log('the accordion item with an index of ' + index + ' was toggled.')
            }
        },
    }
</script>
