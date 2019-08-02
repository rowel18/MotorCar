<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">REGISTRATION</div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">First Name:</label>
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Middle Name:</label>
                                        <input type="text" class="form-control" name="middlename" placeholder="Middle Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Last Name:</label>
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Email:</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Username:</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Password:</label>
                                        <input type="text" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="select">Type:</label>
                                            <select class="form-control" id="select" name="select">
                                                <option></option>
                                                <option>Admin</option>
                                                <option>Employee</option>
                                                <option>Agents</option>
                                                <option>Public</option>
                                            </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Authority:</label>
                                        <br>
                                            <div class="ml-4">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="">Admin
                                                </label>
                                            </div>
                                            <div class="ml-4">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="">Admin
                                                </label>
                                            </div>
                                            <div class="ml-4">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="">Admin
                                                </label>
                                            </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
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
