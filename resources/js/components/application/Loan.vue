<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 ">
                <div class="card card-default">
                    <div class="card-header">Loan Request</div>

                    <div class="card-body">
                        <div class="form-group">
                         <label>Please select the type of Loan request</label>
                         <select class="form-control">
                           <option>Cash loan</option>
                           <option>Machinery request</option>
                           <option>Agric input request</option>
                           <option>Storage facility</option>
                           <option>Fertilizers and additives</option>
                           <option>Production and processing</option>
                         </select>
                          
                        </div>

                        <div class="form-group">
                          <textarea col="500" rows="20" class="form-control" name="loan_description" >Describe the purpose and the scope of this loan</textarea>
                        </div>

                        <div class="form-group">
                         
                        <select class="form-control">
                          <option>Are you currently benefiting from any loan scheme</option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                        </div>

                        

                        <button class="btn btn-info mt-3"><router-link to="/company">Back</router-link></button>
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
