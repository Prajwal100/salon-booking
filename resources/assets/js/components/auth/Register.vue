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
                                    <label for="" class="text-center d-block">Sign up to your dashboard.</label>
                                </div>
                            </div>

                            <div class="alertBranch" v-if="alertMessage.length>0">
                                <div class="alert alert-warning alertBranch" role="alert">
                                    {{alertMessage}}
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="f_name">First name</label>
                                    <input id="f_name" v-validate="required" v-model="first_name" type="text" name="first_name" class="form-control" placeholder="John">
                                    <small class="text-danger" v-show="errors.has('first_name')">{{errors.first('first_name')}}</small>
                                </div>
                                <div class="form-group col-6">
                                    <label for="l_name">Last name</label>
                                    <input id="l_name" v-validate="required" v-model="last_name" type="text" name="last_name" class="form-control" placeholder="Doe">
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="email">Email Address</label>
                                    <input id="email" v-validate="required" v-model="email" type="email" name="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="password">Password</label>
                                    <input type="password" v-validate v-model="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="password_confirmation">Confirmation Password</label>
                                    <input type="password" v-validate="'required|confirmed:password'" v-model="password_confirmation" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirmation Password">
                                </div>
                            </div>

                            <div class="form-row loginButton">
                                <div class="form-group col-12">
                                    <common-submit-button @submit="registersPost"  class="btn-block text-center auth-button text-white" buttonText="Register"></common-submit-button>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-6">
                                    <a href="javascript:;" @click="homePage" class="bluish-text"><i class="las la-home"/> Home </a>
                                </div>
                                <div class="form-group col-6 text-right">
                                    <a href="javascript:;" @click="login" class="bluish-text"><i class="las la-lock"/> Login </a>
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

    import {required,minLength,sameAs} from 'vuelidate/lib/validators';

    export default {
        extends:axiosGetPost,
        data(){
            return {
                first_name:'',
                last_name: '',
                email: '',
                password: '',
                password_confirmation: '',
                submitted: false,
                isDisabled:false,
                isActiveText:false,
                alertMessage:'',
            }
        },
        methods:{
            registersPost(){
                let instance=this;
                this.submitted=true;
                this.$validator.validateAll().then((result)=>{
                    if(result){
                        console.log('clicked');
                        this.inputFields={
                            first_name:this.first_name,
                            last_name:this.last_name,
                            password:this.password,
                            password_confirmation:this.password_confirmation,
                        };
                        instance.isDisabled=true;
                        instance.isActiveText=true;

                        if(instance.emailAdd && instance.token){
                            instance.axiosPost('/register/'+instance.token,{
                                first_name:this.first_name,
                                last_name:this.last_name,
                                email: this.email,
                                password:this.password,
                                password_confirmation:this.password_confirmation,
                            },function (response) {
                                if(response){
                                    instance.alertMessage=response.data.message;
                                }
                                instance.login();

                            },function (error) {
                                instance.errors=error.data.errors;

                            })
                        }
                        else{
                            alert('here');
                        }
                    }
                })

            },
            login(){
                let instance=this;
                instance.redirect('/login');
            },
            homePage(){
                let instance=this;
                instance.redirect('/');
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
