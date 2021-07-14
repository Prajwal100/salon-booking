<template>
    <div class="main-layout-wrapper">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent m-0">
                <li class="breadcrumb-item">
                    <span>Services</span>
                </li>
            </ol>
        </nav>
        <div class="main-layout-card">
            <div class="main-layout-card-header-with-button">
                <div class="main-layout-card-content-wrapper">
                    <div class="main-layout-card-header-contents">
                        <h5 class="bluish-text m-0">Service</h5>
                    </div>
                    <div class="main-layout-card-header-contents text-right  ">
                        <button class="btn btn-primary app-color" data-toggle="modal" data-target="#add-edit-modal">Create
                        </button>
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
                    tableName:'services',
                    columns:[
                        {title:'Title',key:'title',type:'text',uniquefield:'id',sortable:true},
                        {title:'Price',key:'price',type:'text',sortable:true},
                        {title:'Duration',key:'service_duration',type:'text',sortable:true},
                        {title:'Description',key:'description',type:'text',sortable:true},
                        {title:'Starts',key:'service_starts',type:'text',sortable:true},
                        {title:'Ends',key:'service_ends',type:'text',sortable:true},
                        {
                            title:'Status',key:'activation',type:'custom',
                            modifier:function (rowData) {
                                if(rowData=='1'){
                                    return{
                                        value:"active",
                                        class:"booking-status bg-success",
                                    }
                                }
                                else if(rowData=='0'){
                                    return{
                                        value:"inactive",
                                        class:"booking-status bg-warning"
                                    }
                                }
                            }
                        },
                        {title: 'Link',key:'',type: 'component',componentName:'service-copy-component'},
                        {
                            title:'Action',key:'action',type:'component',componentName: 'service-action-component'
                        }

                    ],
                    right_align: ['action'],
                    source: '/servicelist',
                    search: false,
                    customField: true, // For custom field display in datatable.
                    positionAfter:'activation',
                }

            }
        }
    }
</script>

<style scoped>

</style>
