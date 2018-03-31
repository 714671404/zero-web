<template>
    <div class="app_content app_bg">
        <ul>
            <li v-for="list in lists">
                <div class="app_content_left">
                    <a :href="'/article/' + list.id">
                        <img :src="list.avatar">
                        {{ list.title }}
                    </a>
                </div>
                <div class="app_content_right">
                    <a :href="'/article/' + list.id">{{ list.time }}</a>
                </div>
            </li>
        </ul>
        <page :recordCount="recordCount" @child_list="child_list"></page>
    </div>
</template>

<script>
    import Page from '../public/Page'
    export default {
        components: {
            Page
        },
        data () {
            return {
                lists: {},
                pageSize: 30,
                recordCount: 0
            }
        },
        mounted () {
            this.get_list()
        },
        methods: {
            child_list (i) {
                var i = parseInt(i)
                if (i !== 1) {i = (i - 1) * this.pageSize} else if (i == 1) {i = 0} else if (i == this.recordCount) {i = this.recordCount}
                this.get_list(i)
            },
            get_list (i = 0) {
                this.$axios({
                    method: 'get',
                    url: '/api/article',
                    params: {
                        id: i,
                        size: this.pageSize,
                    }
                })
                    .then(lists => {
                        this.lists = lists.data.data
                        this.recordCount = Math.ceil(lists.data.count / this.pageSize)
                    })

            }
        }
    }
</script>