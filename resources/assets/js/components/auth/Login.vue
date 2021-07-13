<template>

    <div class="back-img">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col"></div>
                <div class="col-md-4 col-lg-3 login-form">

                    <div class="sign-in-sign-up-form">
                        <form >
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <h6 class="text-center mb-0">Hi There</h6>
                                    <label for="" class="text-center d-block">Sign in to your dashboard.</label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="email">Email Address</label>
                                    <input id="email" type="email" name="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-row loginButton">
                                <div class="form-group col-12">
                                    <common-submit-button class="btn-block text-center auth-button text-white" buttonText="login"></common-submit-button>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-6">
                                    <a href="javascript:;" @click="homePage" class="bluish-text"><i class="las la-home"/> Home </a>
                                </div>
                                <div class="form-group col-6 text-right">
                                    <a href="javascript:;" @click="register" class="bluish-text"><i class="las la-lock"/> Register </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
</template>

<script>
    import axiosGetPost from '../../helper/axiosGetPostCommon';

    export default {
        extends:axiosGetPost,
        methods:{
            homePage(){
                let instance=this;
                instance.redirect('/');
            },
            register(){
                let instance=this;
                instance.redirect('/register');
            }
        }
    }
</script>

<style scoped>
    .login-form{
        background: white;
        margin-top:10%;
    }
</style>
