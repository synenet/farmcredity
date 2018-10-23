<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 ">
                <div class="card card-default">
                    <div class="card-header">Personal Details</div>

                    <div class="card-body">
                        <div class="form-group">
                         
                          <input  class="form-control" name="fullname" placeholder="Fullname" />
                        </div>

                        <div class="form-group">
                          <textarea class="form-control" name="address" >Your address here</textarea>
                        </div>

                        <div class="form-group">
                         
                          <input  class="form-control" type="text" name="occupation" placeholder="Occupation" />
                        </div>

                        <div class="form-group">
                         
                          <input  class="form-control" type="text" name="kin" placeholder="Next of kin" />
                        </div>

                        <div class="form-group">
                         
                          <input  class="form-control" type="email" name="email" placeholder="Email" />
                        </div>

                        <div class="form-group">
                         
                          <input  class="form-control" type="phone" name="phone" placeholder="Phone number" />
                        </div>


                        <button class="btn btn-primary mt-3"><router-link to="/company">Next</router-link></button>
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
