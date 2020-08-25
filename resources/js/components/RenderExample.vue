<!--<template>-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-8">-->
<!--                <div class="card card-default">-->
<!--                    <div class="card-header">Example Component</div>-->
<!--                    <div class="card-body">-->
<!--                        I'm an example component.-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</template>-->

<script>
    export default {
        name: "RenderExample",
        data() {
            return { name : "John Doe"};
        },
        // render(createElement){
        //     return createElement("h1", "Hello world!");
        // }

        // render(h){ return h("h1", "Hello world!"); }

        // render: h => h("h1", "Hello world!")
        // render: h => h("h1", { class: 'foobar'}, "Hello world!") // also we could add style and so on
        // render: h => h("h1", { class: 'foobar'}, this.name)

        // render(el){
        //     return el("h1", this.name);
        // }

        render(el){
            return el("div", { attrs: { id: 'foobar'}}, [
                el("h1", this.name),
                el("h2", this.name)
            ]);
        }
    }
</script>

<style scoped>
</style>
