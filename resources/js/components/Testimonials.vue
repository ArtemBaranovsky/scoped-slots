<template>
    <div class="columns has-text-centered-tablet">
        <div class="column">
            <div>
                <div class="flex justify-center mb-8 pb-3 text-center">
                    <h3 class="text-6x1 font-light w-3/5 tracking-tight">
                        Thousands of developers up their game with Laracasts every day
                    </h3>
                </div>

                <div class="flex" style="min-height: 500px">
                    <!--left-->
                    <div class="w-3/U bg-grey-lightest p-8 flex flex-wrap justify-center items-center">
<!--                            <a :href="testimonial.link"-->
<!--                        @mouseover = "featuredTestimonial = testimonial"-->
                            <a :href="testimonial.link"
                               :id="`testimonial-${++index}`"
                               class="p-4"
                               target="_blank"
                               v-for="(testimonial, index) in testimonials"
                               @mouseover = "updateFeaturedTestimonial(testimonial)"
                               @mouseout="clearTimer"
                            >
<!--                                <img src="`/images/reviews/${ testimonial.avatar }`" />-->
                                <img :src="testimonial.avatar"
                                     :alt="testimonial.name"
                                     class="rounded-circle w-12 border-2 border-solid hover:border-blue-darker"
                                     :class="featuredTestimonial.id === testimonial.id ? 'border-blue-darker' : 'border-transparent'"
                                >
                            </a>
                    </div>

                    <!--right-->
                    <div class="w-2/5 bg-grey-lighter absolute inset-y-0 right-0 text-center flex items-center p-10 justify-center">
                        <div >
                            <!--src="/images/reviews/taylor-otwell.jpg"-->
<!--                            :src="`/images/reviews/${featuredTestimonial.name}`"-->
                            <img class="rounded-circle inline-block mb-2 w-16 xl:w-24"
                                :src="featuredTestimonial.avatar"
                                 :alt="featuredTestimonial.name">

<!--                            <p class="text-black font-bold text-xs mb-6"">Taylor Otwell</p>-->
                            <p class="text-black font-bold text-xs mb-6" v-text="featuredTestimonial.name"></p>
<!--                            <p class="text-grey-dark mb-8">-->
<!--                            "If you're not a member of Laracasts, what are you doing?"-->
                            <p class="text-grey-dark mb-8" v-text="featuredTestimonial.body"></p>

                            <a href="/testimonials" class="btn btn-blue bg-blue rounded-full text-white font-bold text-xs py-5 px-8 uppercase">More
                                Testimonials</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import _ from 'lodash';

    export default {
        name: "Testimonials",
        data() {
            return {
                testimonials: [],
                featuredTestimonial: {},
                timer: null
            }
        },
        created() {
            $.getJSON('/api/testimonials', testimonials =>
                {
                    console.log(testimonials);
                    this.testimonials = testimonials;
                    this.featuredTestimonial = testimonials[0];
                }
            );
        },
        methods: {
/*            updateFeaturedTestimonial: _.debounce(function(testimonial) {
               // console.log('Update the featured tesimonial to be ' + testimonial.name + '\'s');
               this.featuredTestimonial = testimonial;
            }, 300)*/       // to change only after long hover!!!
            updateFeaturedTestimonial(testimonial) {
                this.timer = setTimeout(()=>{
                    console.log('Updating ' + testimonial.name)
                    this.featuredTestimonial = testimonial;
                },250)      // this logic fires not earlier than after .25 sec.
            },
            /*updateFeaturedTestimonial: _.throtte(function(){
                console.log('I was Callleo');
                this.featuredTestimonial = testimonial;
            }, 2000 );*/      // this logic fires 2 sec after last main function ignition
            clearTimer() {
                clearTimeout(this.timer);
            }
        }
    }
</script>

<style scoped>

</style>
