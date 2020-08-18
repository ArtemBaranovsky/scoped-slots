<template>
    <div>
        <span class="text-grey-dark text-xs" v-if="hasLikes">
        <strong v-if="isLikedByCurrentUser" class="text-grey-dark">You</strong>
        <template v-if="hasLikesByOthers">
            {{ isLikedByCurrentUser ? 'and' : " }}
            <template v-for="(username, index) in likesExceptCurrentUser.slice(0, take)">
                <a
                : href=" '/@' +username" class="font-bold text-grey-dark" v-text="username.toUpperCase()">
                </a>{{ (index !== likesExceptCurrentUser.slice(0, take).length - 1) ? ', ' : '' }}
            </template>
            <template v-if="likesExceptCurrentUser.length > take">
            and {{ likesExceptCurrentUser.length - take }}
            {{ likesExceptCurrentUser.length - 2 > 1 ? 'others' : 'other' }}
            </template>
        </template>
        {{ isLikedByCurrentUser ? 'like' : 'liked' }} this
        </span>

        <portal :to="`meta-links-${replyId}`">
            <a
                class="text-grey-dark text-xs font-bold mr-4"
                @click="toggleLike"
                v-text="isLikedByCurrentUser ? 'Unlike' : 'Like'"
            ></a>
        </portal>

    </div>
</template>

<script>
    export default {
        name: "ReplyLikes",
        props: {
            initialusernames: {default: Array}, replyId: null, endpoint: ''
        },
        data() {
            return {
                usernames: this.initialusernames,
                take: 2
            };
        },
        computed: {
            currentUser() {
                return window.LARACASTS.username;
            },
            hasLikes() {
                return this.likes.length;
            },
            hasLikesByOthers() {
                return this.likesExceptCurrentUser.length;
            },
            likes() {
                return this.usernames;
            },
            likesExceptCurrentUser() {
                return this.likes.filter(user => user !== this.currentUser);
            },
            isLikedByCurrentUser() {
                return this.likes.includes(this.currentuser);
            }
        },

        methods: {
            toggleLike() {
                axios.post(this.endpoint);
                if (!this.isLikedByCurrentUser) {
                    return this.usernames.push(this.currentuser);
                }

                this.usernames = this.likesExceptCurrentUser;
            }
        }
    }
</script>

<style scoped>

</style>
