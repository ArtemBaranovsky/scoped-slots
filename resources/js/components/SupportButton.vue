<template>
    <div>
        <a class="text-transparent-50 hover:text-white"
           @click.prevent="$modal.show('contact-support-modal')"
        >
            Support
        </a>

        <modal
            name="contact-support-modal"
            height="auto"
            width="100%"
            :pivotY="0.1"
            classes="bg-white rounded-none shadow-inner"
        >
            <div class="py-6 container mx-auto">
                <h1 class="text-center text-2x1">Have a Question?</h1>

                <form
                      autocomplete="off"
                      class="p-8 lg:w-1/2 md:mx-auto"
                      @submit.prevent="contactSupport"
                      @keydown="submitted = false"
                >

                    <div class="control">
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="input is-minimal"
                            placeholder="What's your name?"
                            v-model="message.name"
                            required
                            @keydown="delete errors.name"
                        >
                        <span
                            class="text-xs text-red pt-2"
                            v-text="errors.name[0]"
                            v-if="errors.name"
                        ></span>
                    </div>

                    <div class="control">
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="input is-minimal"
                            placeholder="Which email address should we respond to?"
                            v-model="message.email"
                            required
                            @keydown="delete errors.email"
                        >
                        <span
                            class="text-xs text-red pt-2"
                            v-text="errors.email[0]"
                            v-if="errors.email"
                        ></span>
                    </div>

                    <div class="control">
                        <textarea
                            name="question"
                            id="body"
                            data-authorize
                            class="input is-minimal"
                            placeholder="What is your question?"
                            v-model="message.question"
                            required
                            @keydown="delete errors.question"
                        ></textarea>
                        <span
                            class="text-xs text-red pt-2"
                            v-text="errors.question[0]"
                            v-if="errors.question"
                        ></span>
                    </div>

                    <div class="control">
                        <input
                            name="verification"
                            type="verification"
                            id="verification"
                            class="input is-minimal"
                            placeholder="What is 1 + 4?"
                            v-model="message.verification"
                            required
                            @keydown="delete errors.verification"
                        >
                        <span
                            class="text-xs text-red pt-2"
                            v-text="errors.verification[0]"
                            v-if="errors.verification"
                        ></span>
                    </div>

                    <div class="flex justify-end">
                        <a
                            class="button is-default mr-4 py-1"
                            @click="cancel"
                        >
                            Cancel
                        </a>

                        <button type="submit" class="button is-blue py-1" :disabled="submitted">Send</button>

                    </div>
                </form>

            </div>
        </modal>
    </div>
</template>

<script>
    export default {
        name: "SupportButton",
        data(){
            return {
                message: {},
                errors: {},
                submitted: false,
            }
        },
        methods: {
            contactSupport() {
                this.submitted = true;
                axios
                    .post('/contact', this.message)
                    .then(() => {
                        this.$modal.hide('contact-support-modal');
                        this.resetForm();
                        swal('Thanks! we will be in touch soon.');
                    });
                    .catch(errors => {
                        // console.log(errors.response.data.errors);
                        this.errors = errors.response.data.errors
                    })

            },
            resetForm() {
                this.message = {};
                this.submitted = false;
            },
            cancel() {
                this.$modal.hide('contact-support-modal');
                this.resetForm;
            }
        }
    }
</script>

<style scoped>

</style>
