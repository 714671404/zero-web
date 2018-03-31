<template>
    <div class="slide" v-on:mouseover="stop()" v-on:mouseout="move()">
        <div class="slideshow">
            <transition-group tag="ul" name="image">
                <li v-for="(img, index) in imgArray" v-show="index===mark" :key="index">
                    <a :href="img.href">
                        <img :src='img.img'>
                    </a>
                </li>
            </transition-group>
        </div>
        <div class="bar">
            <span v-for="(item, index) in imgArray" :class="{ 'active':index===mark }" @click="change(index)" :key="index"></span>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                timer: null, //定时器
                mark: 0, //比对图片索引的变量
                imgArray: [
                    {
                        img: '/images/index/recommend/google_logo.png',
                        href: 'https://www.google.com'
                    },
                    {
                        img: '/images/index/recommend/laravel.png',
                        href: 'https://laravel-china.org/docs/laravel/5.6'
                    },
                    {
                        img: '/images/index/recommend/laravel_book.png',
                        href: 'https://laravel-china.org/courses'
                    },
                    {
                        img: '/images/index/recommend/php_logo.png',
                        href: 'http://php.net/manual/zh/index.php'
                    }
                ]
            }
        },
        methods: {
            autoPlay () {
                this.mark++;
                if (this.mark === 4) {
                    this.mark = 0
                }
            },
            play () {
                this.timer = setInterval(this.autoPlay, 2500)
            },
            change (i) {
                this.mark = i
            },
            stop () {
                clearInterval(this.timer)
            },
            move () {
                this.timer = setInterval(this.autoPlay, 2500)
            }
        },
        created () {
            this.play()
        }
    }
</script>