<template>
    <div @mouseover="active = true" @mouseout="active = false">
        <a href="/series"
           class="block md:px-8 md:flex-1 uppercase text-transparent-50 font-bold hover:text-white pb-8"
        >
            Series
        </a>
        <portal to="nav-after">
            <div v-show="active" class="bg-danger absolute w-full z-10" style="height: 250px;"
                 @mouseover="active = true"
                 @mouseout="active = false">

                <div class="container mx-auto py-8">
                    <div class="flex">
                    <!--SKILLS-->
                        <div class="border-r border-grey-lighter border-solid pr-10 mr-10">
                            <a href="#"
                               class="block font-bold uppercase mb-6 hover:text-blue"
                               :class="selected === skill ? 'text-blue' : 'text-grey-darkest'"
                               v-for="skill in skills"
                               v-text="skill"
                               @mouseover="showSkill(skill)"
                            ></a>
                        </div>

                        <div>
                            <ul class="flex flex-wrap">
                                <li class="w-l/3 mb-3" v-for="item in skillList">
                                    <a :href="'/series/'+item.slug"
                                        v-text="item.title"
                                        class="text-sm text-grey-darker hover:text-blue"></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </portal>
    </div>



</template>

<script>
    export default {
        name: "SeriesDropdown",
        data() {
            return {
                active: false,
                selected: 'PHP',
                series: []
            };
        },
        created() {
            $.getJSON('/api/series', series => (this.series = series));
        },
        computed: {
            skills() {
                return ['PHP', 'Laravel', 'Testing', 'JavaScript', 'Tooling'];
            },
            skillList(){
                return this.series[this.selected];
            },
        },
        methods: {
            showSkill(name) {
                this.selected = name;
            }
        }
    };
</script>
<style>
    .series-dropdown {
        box-shadow: 0 6px 15px 0 rgba(36, 37, 38, 0.08);
    }
</style>
