<template>
    <div class="show_article app_bg">
        <h1 v-html="title"></h1>
        <div v-html="content"></div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                title: '',
                content: ''
            }
        },
        methods: {
            getList () {
                var id, url, href
                href = window.location.href
                id = href.split('/')
                id = id[id.length-1]
                url = {
                    method: 'GET',
                    url: '/api/article/list',
                    params: {
                        id: id
                    }
                }
                this.$axios(url)
                    .then(data => {
                        let d = data.data.data
                        this.title = d.title
                        this.content = d.content
                        console.log(this.title)
                    })
            }
        },
        mounted () {
            this.getList()
        }
    }
</script>