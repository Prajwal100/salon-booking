<template>
    <div class="side-bar">
        <ul>
            <li class="side-bar-logo">
                <a href="#" >
                    <img  alt="">
                </a>
            </li>
            <li :class="{'active-side-bar' : route=='dashboard'}">
                <a href="javascript:;" @click="dashboardclick">
                    <i class="la la-desktop la-3x"></i>
                    <div>Dashboard</div>
                </a>
            </li>
            <li :class="{'active-side-bar':route=='services'}">
                <a href="javascript:;" @click="servicesclick">
                    <i class="la la-globe"></i>
                    <div>Services</div>
                </a>
            </li>
            <li >
                <a href="#">
                    <i class="la la-credit-card"></i>
                    <div> Booking</div>
                </a>
            </li>
            <li >
                <a href="javascript:;" @click="clientsclick">
                    <i class="la la-users"></i>
                    <div> Clients</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="la la-pie-chart"></i>
                    <div> Reports</div>
                </a>
            </li>
            <li>
                <a href="#" >
                    <i class="la la-cogs la-3x"></i>
                    <div>Settings</div>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
    import axiosGetPost from '../../helper/axiosGetPostCommon';
    export default {
        extends:axiosGetPost,
        props:['route','services'],

        methods:{
            dashboardclick(){
              let instance=this;
              instance.redirect('/dashboard');
            },
            servicesclick(){
                let instance=this;
                instance.redirect('/services');
            },
            clientsclick(){
                let instance=this;
                instance.redirect('/clients');
            },
        }
    }
</script>

<style scoped>

</style>
