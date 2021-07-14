<template>
    <div class="main-layout-wrapper">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent m-0">
                <li class="breadcrumb-item">
                    <span>Clients</span>
                </li>
            </ol>
        </nav>
        <div class="main-layout-card">
            <div class="main-layout-card-header-with-button">
                <div class="main-layout-card-content-wrapper">
                    <div class="main-layout-card-header-contents">
                        <h5 class="bluish-text m-0">Client</h5>
                    </div>
                </div>
            </div>
            <datatable-component class="main-layout-card-content" :options="tableOptions"></datatable-component>
        </div>
    </div>
</template>

<script>
    import axiosGetPost from '../../helper/axiosGetPostCommon';
    export default {
        extends: axiosGetPost,
        data(){
            let instance=this;
            return{
                tableOptions:{
                    tableName:'clients',
                    columns:[
                        {title:'Name',key:'full_name',type:'clickable_link',uniquefield:'id',sortable:true},
                        {title:'Email',key:'email',type:'text',sortable:true},
                        {title:'Phone',key:'phone',type:'text',sortable:true},
                        {
                            title:'Action',key:'action',type:'component',componentName: 'service-action-component'
                        }

                    ],
                    right_align: ['action'],
                    source: '/clientlist',
                    search: true,
                }

            }
        }
    }
</script>

<style scoped>

</style>
