<template>
    <div class="app_bg_auth_inner">
        <div class="app_bg_auth_inner_content">
            <p>CRAZY UP</p>
            <div class="form-group">
                <input type="text" name="username" value="" class="form-control" placeholder="username" ref="user" @click="if_show('username')">
                <span class="error" ref="error_user"></span>
            </div>
            <div class="form-group">
                <input type="email" name="email" value="" class="form-control" placeholder="email" ref="email" @click="if_show('email')">
                <span class="error" ref="error_email"></span>
            </div>
            <div class="form-group">
                <input type="password" name="password" value="" class="form-control" placeholder="password" ref="pass" @click="if_show('password')">
                <span class="error" ref="error_pass"></span>
            </div>
            <div class="form-group">
                <input type="password" name="password" value="" class="form-control" placeholder="confirm password" ref="confirm_pass" @click="if_show('confirm_password')">
                <span class="error" ref="error_confirm_pass"></span>
            </div>
            <button type="submit" class="btn btn-default btn-block btn-primary" @click="login">提交</button>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                user: {}
            }
        },
        computed: {

        },
        methods: {
            login () {
                let user = this.$refs.user
                let email = this.$refs.email
                let pass = this.$refs.pass
                let confirm_pass = this.$refs.confirm_pass
                let error_user = this.$refs.error_user
                let error_email = this.$refs.error_email
                let error_pass = this.$refs.error_pass
                let error_confirm_pass = this.$refs.error_confirm_pass
                if (!user.value) {
                    error_user.innerHTML='账号不能为空';return false
                } else {
                    if (!/^[\w\d]{6,32}$/.test(user.value)) {
                        error_user.innerHTML='请输入6-30以内位账号';return false
                    }
                }
                if (!email.value) {
                    error_email.innerHTML='email不能为空';return false
                } else {
                    if (!/^[\w\d]{3,20}@[\w\d]{0,10}\.(com|net|cn)$/.test(email.value)) {
                        error_email.innerHTML='请填写正确的email';return false
                    }
                }
                if (!pass.value) {
                    error_pass.innerHTML='密码不能为空';return false
                }
                if (!confirm_pass.value) {
                    error_confirm_pass.innerHTML='确认密码不能为空';return false
                }
                if (pass.value !== confirm_pass.value) {
                    error_pass.innerHTML='两次密码必须一致';return false
                }
                if (error_user.innerHTML=='' && error_email.innerHTML=='' && error_pass.innerHTML=='' && error_confirm_pass.innerHTML=='') {
                    let get_register = {
                        method: 'post',
                        url: '/api/register',
                        params: {
                            name: user.value,
                            email: email.value,
                            password: pass.value
                        }
                    }
                    this.get_data(get_register)
                    if (this.user.code == 200) {

                        window.location.href='/';
                    }
                }
            },
            if_show (el) {
                switch (el) {
                    case 'username': this.$refs.error_user.innerHTML='';break;
                    case 'email': this.$refs.error_email.innerHTML='';break;
                    case 'password': this.$refs.error_pass.innerHTML='';this.$refs.error_confirm_pass.innerHTML='';break;
                    case 'confirm_password': this.$refs.error_pass.innerHTML='';this.$refs.error_confirm_pass.innerHTML='';break;
                }
            },
            get_data (accept_object) {
                this.$axios(accept_object)
                    .then(data => {
                        this.user = data.data
                    })
            }
        },
        watch: {

        }
    }
</script>

<style scoped>
    .form-group {
        position: relative;
        margin-bottom: 1.5rem;
    }
    .form-group>.error {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 12px;
        font-family: 微软雅黑;
        font-weight: normal;
        color: red;
    }
</style>