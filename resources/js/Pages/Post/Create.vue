<template>

    <div>
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h4>TAMBAH POST</h4>
                <hr>
                <form @submit.prevent="storePost">
                    <div class="mb-3">
                        <label class="form-label">name POST</label>
                        <input type="text" class="form-control" v-model="post.name" placeholder="Masukkan name Post">
                        <div v-if="errors.name" class="mt-2 alert alert-danger">
                            {{ errors.name }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">description</label>
                        <textarea class="form-control" rows="5" v-model="post.description" placeholder="Masukkan description Post"></textarea>
                        <div v-if="errors.description" class="mt-2 alert alert-danger">
                            {{ errors.description }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-md shadow-sm me-2">SIMPAN</button>
                        <button type="reset" class="btn btn-warning btn-md shadow-sm">RESET</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</template>

<script>
    //import layout
    // import LayoutApp from '../../Layouts/App.vue'

    import { reactive } from 'vue'
    import { Inertia } from '@inertiajs/inertia'

    export default {

        //layout
        // layout: LayoutApp,

        //props
        props: {
            errors: Object
        },

        //define Composition Api
        setup() {

            //state posts
            const post = reactive({
                name: '',
                description: ''
            })

            //function storePost
            function storePost() {
                
                //define variable 
                let name   = post.name
                let description = post.description

                //send data
                Inertia.post('/posts/', {
                    name: name,
                    description: description
                })
             
            }

            return {
                post,
                storePost
            }

        }
    }
</script>