<template>
    <div class="main-layout-wrapper">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent m-0">
                <li class="breadcrumb-item">
                    <span>Dashboard</span>
                </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 pr-md-0">
                <div class="card dashboard-card-top">
                    <div class="card-content">
                        <div class="dashboard-card-parent">
                            <div class="dashboard-card-child-1">
                                <div class="purple dashboard-top-row-parent">
                                    <i class="la la-clipboard-list la-2x dashboard-top-row-child"></i>
                                </div>
                            </div>
                            <div class="dashboard-card-child-2">
                                <h5>4</h5>
                                <p>
                                    Total bookings for next 30 days
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 pr-md-0">
                <div class="card dashboard-card-top">
                    <div class="card-content">
                        <div class="dashboard-card-parent">
                            <div class="dashboard-card-child-1">
                                <div class="cyan dashboard-top-row-parent">
                                    <i class="la la-shopping-bag la-2x dashboard-top-row-child"></i>
                                </div>
                            </div>
                            <div class="dashboard-card-child-2">
                                <h5>3</h5>
                                <p>
                                    Confirmed bookings for next 30 days
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 pr-md-0">
                <div class="card dashboard-card-top">
                    <div class="card-content">
                        <div class="dashboard-card-parent">
                            <div class="dashboard-card-child-1">
                                <div class="orange dashboard-top-row-parent">
                                    <i class="la la-star la-2x dashboard-top-row-child"></i>
                                </div>
                            </div>
                            <div class="dashboard-card-child-2">
                                <h5>3</h5>
                                <p>
                                    Today's total bookings
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="card dashboard-card-top">
                    <div class="card-content">
                        <div class="dashboard-card-parent">
                            <div class="dashboard-card-child-1">
                                <div class="red dashboard-top-row-parent">
                                    <i class="la la-clipboard la-2x dashboard-top-row-child"></i>
                                </div>
                            </div>
                            <div class="dashboard-card-child-2">
                                <h5>1</h5>
                                <p>
                                    Today's pending bookings
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Dashboard"
    }
</script>

<style scoped>

</style>
