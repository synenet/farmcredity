<template>
    <div class="container">
        <!-- /.row -->
        <div class="row mt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users Table</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-success" @click="newModal" data-toggle="modal" data-target="#addNew">Add User <i class="fas fa-user-plus fa-fw" ></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr >
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Registered At</th>
                    <th>Modify</th>
                  </tr>
                  <tr v-for="user in users" :key="user.id">
                    <td>{{user.id}}</td>
                    <td> {{user.name | capitalize}}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.type}}</td>
                    <td><span class="tag tag-success">{{user.created_at | neatDate}}</span></td>
                    <td>
                        <a href="" @click.prevent="editModal(user)"><i class=" fa fa-edit"></i></a>
                        <a href="" class="pull-right" @click.prevent="deleteUser(user.id)"><i class=" fa fa-trash red "></i></a>
                    </td>
                  </tr>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          </div>

            <!-- Modal -->
            <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 v-show="!editMode" class="modal-title" id="exampleModalLabel">Add New</h5>
                    <h5 v-show="editMode" class="modal-title" id="exampleModalLabel">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form @submit.prevent="editMode ? updateUser() :createUser()">
                  <div class="modal-body">
                    <div class="form-group">
            
                      <input v-model="form.name" type="text" name="name" placeholder="Name"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                      <has-error :form="form" field="name"></has-error>
                    </div> 

                    <div class="form-group">
            
                      <input v-model="form.email" type="text" name="email" placeholder="Email Address"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                      <has-error :form="form" field="email"></has-error>
                    </div>

                    <div class="form-group">
            
                      <textarea  v-model="form.bio" name="bio" placeholder="Short Bio for the user"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                      <has-error :form="form" field="bio"></has-error>
                    </div>

                    <div class="form-group">
                        <select name="type" v-model="form.type" class="form-control" :class="{ 'is-invalid': form.errors.has('type') }"  >
                            <option value="">Select User Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">Standard User</option>
                            <option value="author">Author</option>
                        </select>
                         <has-error :form="form" field="type"></has-error>
                    </div> 

                    <div class="form-group">
            
                      <input v-model="form.password" type="password" name="password" 
                        class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                      <has-error :form="form" field="password"></has-error>
                    </div>

                 </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" v-show="!editMode" class="btn btn-primary">Create </button>
                    <button v-show="editMode" type="submit" class="btn btn-primary">Update </button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

        </div>
</template>

<script>
    export default {
        data (){
        return{
            editMode: false,
            users: {},
            form: new Form({
                id: '',
                name: '',
                email: '',
                password: '',
                type: '',
                bio: '',
                photo: '',
            })
        }
        },
        mounted() {
            console.log('Component mounted.')
            this.$Progress.start()
            axios.get('/api/user').then(({data}) => (this.users = data.data)  ); 
            this.$Progress.finish()
        },
        methods:{
            updateUser(){

            this.$Progress.start()
            this.form.put('/api/user/' +this.form.id).then(()=>{
             this.$Progress.finish()   
             this.$emit('AfterCreate')
             $('#addNew').modal('hide')
             toast({
                type:'success',
                title:'User updated successfully'
             })   
            }).catch(()=>{
              this.$Progress.fail()  
            })
            },
            editModal(user){
                this.editMode = true
                this.form.reset()
                $('#addNew').modal('show')
                this.form.fill(user)
            },
            newModal(){
                this.editMode = false
                this.form.reset()
                $('#addNew').modal('show')
            },
            deleteUser(id){
                swal({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                     if(result.value){
                   //Send ajax request tot the server
                   this.form.delete('api/user/' +id).then(()=>{
                      $('#addNew').modal('hide')                
                    swal(
                      'Deleted!',
                      'Your file has been deleted.',
                      'success'
                        )
                     

                      this.$emit('AfterCreate')
                                     
                   }).catch(()=>{
                    swal('Failed', 'There was something wrong', 'warning')
                   }) 
               } 
                })



            },
            createUser() {
             
                this.$Progress.start()
                this.form.post('api/user').then( () =>{
                this.$emit('AfterCreate');
                toast({
                    type: 'success',
                    title: 'User created Successfully'

                })

                $('#addNew').modal('hide')
                }).catch(() =>{

                 })
                

                this.$Progress.finish()
            },
            loadUsers(){
                axios.get('/api/user').then(({data}) => (this.users = data.data)  ); 
            }
        },

        created(){
            this.loadUsers()
           // setInterval(()=>this.loadUsers(), 3000)
           this.$on('AfterCreate', ()=> this.loadUsers());
           //Fire.$on('AfterDelete', ()=> this.loadUsers())
        }
    }
</script>
