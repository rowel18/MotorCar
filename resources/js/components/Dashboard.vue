<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <router-link to="/dbadmin" class="small-box bg-info">
                    <div class="inner">
                        <h3>2</h3>
                        <p>DBAdmin</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <router-link to="/dbadmin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link>
                </router-link>
            </div>
            <div class="col-md-4">
                <router-link to="/maintenance" class="small-box bg-warning">
                    <div class="inner">
                        <h3>3</h3>
                        <p>Maintenance</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <router-link to="/maintenance" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link>
                </router-link>
            </div>
            <div class="col-md-4">
                <router-link to="/employee" class="small-box bg-info">
                    <div class="inner">
                        <h3>2</h3>

                        <p>Employee</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <router-link to="/employee" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link>
                </router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <router-link to="/public" class="small-box bg-info">
                    <div class="inner">
                        <h3>2</h3>

                        <p>Public</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <router-link to="/public" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link>
                </router-link>
            </div>
            <div class="col-md-4">
                <router-link to="/agent" class="small-box bg-info">
                    <div class="inner">
                        <h3>2</h3>

                        <p>Agents</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <router-link to="/agent" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link>
                </router-link>
            </div>
            <div class="col-md-4">
                <router-link to="/sub-agent" class="small-box bg-info">
                    <div class="inner">
                        <h3>2</h3>

                        <p>Sub Agents</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <router-link to="/sub-agent" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
