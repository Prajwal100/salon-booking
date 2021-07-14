<template>
    <div>
        <div class="form-row">
            <div class="form-group"
                >
                <label for="search">Search</label>
                <input id="search" type="text" class="form-control">
            </div>
        </div>
        <div>
            <div class="row px-3">
                <div class="table-responsive">
                    <table class="table custom-table-responsive">
                        <thead>
                        <template v-for="column in options.columns">
                            <th >
                                <!-- Check if Column is Sortable -->
                                <a href="" v-if="column.sortable"
                                   class="sortable-table-head app-color-text">
                                    <div class="data-table-sort-parent">
                                        <div class="left-align data-table-sort-child">{{column.title}}
                                        </div>
                                        <div class="text-right data-table-sort-child">
                                            <div ><i
                                                class="fa fa-caret-down"></i></div>
                                            <div><i
                                                class="fa fa-caret-up"></i></div>
                                            <div class="data-table-sort-icon"><i
                                                class="fa fa-sort"></i></div>
                                        </div>
                                    </div>
                                </a>
                                <span v-else>
                                            {{column.title}}
                                        </span>
                            </th>

                            <th v-if="column.key==options.positionAfter" v-for="name in columnName">
                                {{name}}
                            </th>
                        </template>

                        </thead>
                        <tbody v-if="datasets.length>0">
                        <tr v-for="(data,index) in datasets">
                            <!-- {{data}} -->
                            <template v-for="column in options.columns">
                                <td :data-label="column.title"
                                    :class="((index+2 === datasets.length || index+1 === datasets.length) && options.summary) ? {'font-weight-bold':options.summary, 'border-bottom-0':index+1 === datasets.length, 'text-right':includes(options.right_align, column.key) } : {'text-right':includes(options.right_align, column.key) || column.type === 'component' , 'table-col-truncate': column.type === 'text' && column.key === 'description'}">
                                    <span>{{data[column.key]}}</span>
                                    <span v-for="value in data[column.key]">{{value}}<br></span>
                                </td>
                            </template>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row margin-fix">
                <div class="col s12">
                    <h6 class="text-center"> Not found</h6>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['options'],
        data(){
            return{
                datasets:[],
                columnName:[],
                includes: (array, value) => {
                    if (_.includes(array, value)) {
                        return true;

                    }
                    return false;
                },
            }
        }
    }
</script>

<style scoped>

</style>
