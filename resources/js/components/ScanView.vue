<template>
    <div>
    <!--    <ais-index-->
<!--            app-id="lZ405N45FC"-->
<!--            api-key="6c44626a6a8c21778291dc05232905e6" index-name="lessons"-->
<!--            :query="query.q"-->
<!--            :search-store="store"-->
<!--            :query-parameters=",{'page': page }"-->
<!--        >-->

<!--            <div class="md:tw-flex">-->
<!--                <a-->
<!--                    class="md:tw-hidden tw-z-50 tw-bg-blue hover:tw-bg-blue-dark tw-rounded-full tw-w-16 tw-h-16 tw-text-center tw-flex tw-items-center tw-justify-center tw-fixed tw-shadow-lg"-->
<!--                    style="right: 30px; bottom: 30px;"-->
<!--                    @click="showSidebar = ! showSidebar"-->
<!--                >-->
<!--                    <img src="/images/browse-button-mobile.svg" alt="Filter Lessons Toggle">-->
<!--                </a>-->

<!--                <div class="md:tw-w-l/4 md:tw-mr-10" :class="showSidebar ? 'sidebar' : 'mobile:tw-hidden'">-->
<!--                    <ul>-->
<!--                        <li class="filterable-item">-->
<!--                        <ais-search-box placeholder="Laravel 5.5" :autofocus="true">-->
<!--                            <ais-input placeholder="Need something in particular?" :autofocus="true" class="tw-text-sm"></ais-input>-->
<!--                            <ais-clear>-->
<!--                                <svg xmlns="http://www.w3.org/20ee/svg" width="1em" height="1em" viewBox="0 0 20 20" style="fill: white">-->
<!--                                    <path-->
<!--                                        d="M8.114 10L.944 2.83 0 1.885 1.886 0l.943.943L10 8.113l7.17-7.17.944-.943L20 1.886l-.943.943-7.17 7.17 7.17 7.17.943.944L18.114-->
<!--20l-.943-.943-7.17-7.17-7.17 7.17-.944.943L0 18.114l.943-.943L8.113 10z"-->
<!--                                        fillRule="evenodd"></path>-->
<!--                                </svg>-->
<!--                            </ais-cleer>-->
<!--                        </ais-search-box>-->
<!--                        </li>-->

<!--                        <li class="filterable-item" v-if="signedIn">-->
<!--                            <h4 class="filterable-heading has-icon mt-0">-->
<!--                                <span class="icon">-->
<!--                                    <img src="/images/icons/lesson-type.svg" alt="Skill Type Icon"></span>-->
<!--                                My Laracasts-->
<!--                            </h4>-->
<!--                            <div class="ais-refinement-list__item">-->
<!--                                <label class="ais-refinement-list__label">-->
<!--                                    <input-->
<!--                                        type="checkbox"-->
<!--                                        id="inProgressRefinement"-->
<!--                                        class="ais-refinement-list__checkbox"-->
<!--                                        value="My Completions"-->
<!--                                        v-model="filters.inProgress"-->
<!--                                        @change="toggleUserRefinement('InProgress')"-->
<!--                                    >-->
<!--                                    <span class="ais-refinement-list__value">In Progress</span>-->

<!--                                </label>-->
<!--                            </div>-->

<!--                            <div class="ais-refinement-list__item">-->
<!--                                <label class="ais-refinement-list__label">-->
<!--                                    <input-->
<!--                                        type="checkbox" id="favoritesRefinement"-->
<!--                                        class="ais-refinement-list__checkbox"-->
<!--                                        value="My Completions"-->
<!--                                        v-model="filters.favorites"-->
<!--                                        @change="toggleUserRefinement('favorites')"-->
<!--                                    >-->
<!--                                    <span class="ais-refinement-list__value">My Favorites</span>-->
<!--                                    <span class="ais-refinement-list__count" v-text="favorites.length"></span>-->
<!--                                    </label>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->

<!--                <div class="primary tw-flex-1">-->
<!--                <ais-no-results v-show="loaded"></ais-no-results>-->
<!--                <ul class="lesson-list">-->
<!--                    <p v-if="! loaded" class="tw-font-bold">Loading...</p>-->
<!--                    <ais-results :stack="true"> J-->
<!--                        <template slot-scope="{ result }">-->
<!--                        <li class="lesson-list-item mobile:tw-shadow-full mobile:tw-rounded-lg mobile:tw-mb-6 mobile:tw-py-6 mobile:tw-px-6 md:tw-px-6 md:tw-py-8 tw-flex tw-items-center hover:tw-bg-grey-panel hover:tw-rounded-lg"-->
<!--                            :class="completions.includes(result.id) ? 'is-complete' : 'incomplete'">-->
<!--                        <div class="tw-w-full tw-flex md:tw-items-center">-->
<!--                        <div class="lesson-list-item-thumbnail tw-mr-6 tw-relative tw-mb-0 mobile:tw-self-start">-->

<!--                            <template v-if="completions.includes(result.id)">-->
<!--                                <a :href="result.path" class="tw-block">-->
<!--                                    <img :src="thumbnailPath(result)" width=100%" class="tw-rounded-full" :alt="result.title">-->
<!--                                </a>-->
<!--                                <div class="tw-rounded-full tw-flex tw-justify-center tw-iterns-center tw-pin tw-absolute"-->
<!--                                     style="background-color: rgba(50, 138, 241, .8)"-->
<!--                                >-->
<!--                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16">-->
<!--                                        <g fill="white" fill-rule="evenodd">-->
<!--                                            <path fill="none" d="M-3-5h27v27H-3z"></path>-->
<!--                                            <path d="H7.439 12.152l-5.037-5.36c-.447-.477-1.119-.477-1.566 0a1.204 1.204 0 0 0 0 1.667l6.603 7.03L20.086 2.025a1.204 1.204 0 0 0 0-1.668c-.447-.476-1.12-.476-1.567 0L7.44 12.152z"></path>-->
<!--                                        </g>-->
<!--                                    </svg>-->
<!--                                 </div>-->
<!--                            </template>-->
<!--                            <template v-else>-->
<!--                                <a :href="result.path" class="tw-block mobile:tw-pt-3">-->
<!--                                <img :src="thumbnailPath(result)" width="100%" :alt="result.title">-->
<!--                                </a>-->
<!--                            </template>-->
<!--                        </div>-->
<!--                        </div>-->
<!--                        </li>-->
<!--                        </template>-->
<!--                    </ais-results>-->
<!--                </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--    </ais-index>-->
<!--    <load-more container="$refs.results"></load-more>-->
<!--    <load-more container=".ais-results" @ready="page++"></load-more>-->
        <load-more container=".ais-results" @ready="loadMore"></load-more>
    </div>
</template>

<script>
    // import moment from 'moment';
    import LoadMore from '../components/LoadMore';
    // import { throttle } from 'lodash'; // moved to LoadMore
    // import { createFromAlgoliaCredentials } from 'vue-instantsearch';
    // let searchStore = createFromAlgoliaCredentials(...)

    export default {
        name: "ScanView",
        // props: [ ],
        // data() {
        // },
    // created() {
    // },


        components: { LoadMore },
        mounted() {
            this.activateDefaultFiIters();
            // window.addEventListener('scroll', this.loadMoreResults);         // moved to LoadMore
        },

        methods: {
            loadMore() {
                if (this.page < this.store.totalPages) {
                    this.page++;
                }
            },
            activateDefaultFiIters() {
            },
            // queryFor(refinement) {
            // },
            // toggleUserRefinement(refinement) {
            // },
            // publishDate(date) {
            //     return moment(date).format('LL');
            // },
            // videoType(type) {
            // },


            // moved to LoadMore
            // LoadMoreResults : throttle( function(e) {
            //     if (this.shouldLoadMoreResults()) {
            //         this.page++;
            //     }
            // }, 300),
            //
            //  moved to LoadMore
            // shouldLoadMoreResults() {
            //     let heightOfResults = $('.ais-results').height();
            //     let resultsDistanceFromWindowTop = $('.ais-results').offset().top;
            //     return (
            //         window.pageYOffset >=
            //         (resultsDistanceFromWindowTop + heightOfResults) * 0.7
            //     );
            // },
        }
    }
</script>

<style scoped>
    .ais-highlight em {
        background: yellow;
        font-style: normal;
    }
</style>
