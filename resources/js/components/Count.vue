<template>
<!--    <span v-text="to"></span>-->
    <span v-text="count"></span>
</template>
<script>
    import inView from 'in-viewport';
    export default {
        name: "Count",
        props: ['to'],
        data() {
            return {
                count: 0,
                interval: null,
                // increment: 1
            };
        },
        mounted() {
            // setInterval(()=>{
            //    if (this.count < this.to) {
            //        this.count++;
            //    } else {
            //        clearInterval();
            //    }
            // }, 10);

            // if (this.to > 1000) {
            //     this.increment = 50;
            // }
            //
            // if (this.to > 500) {
            //     this.increment = 25;
            // }
            //
            // if (this.to > 300) {
            //     this.increment = 15;
            // }
            // this.increment = Math.ceil(this.to / 20);

            inView(this.$el, ()=> {
               // console.log('I am visible!');
                this.interval = setInterval(this.tick, 20);
            });

        },
        computed: {
            increment() {
                return Math.ceil(this.to / 20);
            }
    },
    methods: {
        tick() {
            if (this.count + this.increment >= this.to) {
                this.count = this.to;
                return clearInterval(this.interval);
            }

            // if (this.count < this.to) {
            //     // return this.count++;
            //     return (this.count += this.increment);
            // }
            // clearInterval(this.interval);
            return (this.count += this.increment);

        }
    }
    }
</script>


<style scoped>

</style>
