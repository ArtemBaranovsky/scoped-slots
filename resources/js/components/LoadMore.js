import { throttle } from 'lodash';

export default {
    template: '<div><slot>Loading more...</slot></div>',
    name: "LoadMore",
    props: {
        container: {}
    },
    mounted() {
        window.addEventListener('scroll', this.loadMore);
    },
    methods: {
        loadMore : throttle( function(e) {
            if (this.shouldLoadMore()) {
                // this.page++;
                this.$emit('ready');
            }
        }, 300),

        shouldLoadMore() {
            // let heightOfResults = $('.ais-results').height();
            let containerHeight = $(this.container).height();
            // let resultsDistanceFromWindowTop = $('.ais-results').offset().top;
            let distanceFromWindowTop = $(this.container).offset().top;
            console.log($(this.container));
            return (
                window.pageYOffset >=
                (distanceFromWindowTop + containerHeight) * 0.7
            );
        },
    }
}
