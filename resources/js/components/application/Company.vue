<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 ">
                <div class="card card-default">
                    <div class="card-header">Company/Farm Details</div>

                    <div class="card-body">
                        <div class="form-group">
                         
                          <input  class="form-control" name="company_name" placeholder="Company name" />
                        </div>

                        <div class="form-group">
                          <textarea class="form-control" name="company_address" >Company Address</textarea>
                        </div>

                        <div class="form-group">
                         
                          <input  class="form-control" type="text" name="company_operation" placeholder="Years operation started" />
                        </div>

                        <div class="form-group">
                         
                          <input  class="form-control" type="text" name="compnay_turnover" placeholder="Company Turnover" />
                        </div>

                        <div class="form-group">
                         
                          <input  class="form-control" type="text" name="farm_size" placeholder="Farm size" />
                        </div>

                        <div class="form-group">
                         
                          <input  class="form-control" type="text" name="staff_size" placeholder="Your staff size" />
                        </div>

                        <button class="btn btn-info mt-3"><router-link to="/personal">Back</router-link></button>
                        <button class="btn btn-primary mt-3"><router-link to="/loan">Next</router-link></button>
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
