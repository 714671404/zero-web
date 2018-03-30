<template>
    <div class="page">
        <ul>
            <li><a href="javascript:void(0)" @click="son_update_page('t')">首页</a></li>
            <li v-if="cur>1"><a href="javascript:void(0)" @click="son_update_page(0)">上一页</a></li>
            <li v-if="cur==1"><a class="banclick">上一页</a></li>
            <li v-if="cur!=recordCount"><a href="javascript:void(0)" @click="son_update_page(1)">下一页</a></li>
            <li v-if="cur==recordCount"><a class="banclick">下一页</a></li>
            <li><a href="javascript:void(0)" @click="son_update_page('f')">尾页</a></li>
            <li>{{ '总共 ' + recordCount + ' 页'}}</li>
        </ul>
    </div>
</template>
<script>
    export default {
        data () {
            return {
                cur: 1,
            }
        },
        props: [
            'recordCount'
        ],
        computed: {

        },
        methods: {
            son_update_page (id) {
                if (id == 0) {this.cur --} else if (id == 1) {this.cur ++}
                if (id == 't') {this.cur = 1} else if (id == 'f') {this.cur = this.recordCount}
                this.$emit('child_list', this.cur)
            },
        }
    }
</script>