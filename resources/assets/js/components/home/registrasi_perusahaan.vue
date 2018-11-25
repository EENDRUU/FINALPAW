<template>
<div class="hero-body">
    <div class="container">
        <div class="card">
            <div class="card-image">
                <figure class="image is-3by1">
                    <img src="../../../img/gmbr.jpg">
                </figure>
            </div>
            <div class="card-content">
                <div class="column is-6 is-offset-3">
                    <h1 class="title1">
                        Registrasi Perusahaan
                    </h1><br><br>
                    <div>
                        <div class="alert alert-danger" v-if="error && !success">
                            <p>There was an error, unable to complete registration.</p>
                        </div>
                        <div class="alert alert-success" v-if="success">
                            <p>Registration completed. You can now <router-link :to="{name:'login'}">sign in.</router-link></p>
                        </div>
                        <form autocomplete="off" @submit.prevent="addmessage();load = true" v-if="!success" method="post">
                            <div class="field" v-bind:class="{ 'has-error': error && errors.name }">
                                <label>Nama Perusahaan</label>
                                 <div class="control">
                                     <input class="input" type="text" placeholder="Nama Perusahaan" v-model="namaPerusahaan" required>
                                 </div>
                                <span class="help-block" v-if="error && errors.name">{{ errors.name }}</span>
                            </div>
                            <div class="field" v-bind:class="{ 'has-error': error && errors.email }">
                                <label>E-mail</label>
                                    <input type="email"  class="input" placeholder="user@example.com" v-model="email" required>
                                <span class="help-block" v-if="error && errors.email">{{ errors.email }}</span>
                            </div>
                            <div class="field" v-bind:class="{ 'has-error': error && errors.password }">
                                <label for="password">Password</label>
                                    <input type="password" class="input" v-model="password" required>
                                <span class="help-block" v-if="error && errors.password">{{ errors.password }}</span>
                            </div>
                            <div class="field" v-bind:class="{ 'has-error': error && errors.cpassword }">
                                <label>Comfirm Password</label>
                                    <input type="password" class="input" v-model="cpassword" required>
                                <span class="help-block" v-if="error && errors.cpassword">{{ errors.cpassword }}</span>
                            </div>
                            <div class="field is-grouped">
                                <div class="control">
                                <br>
                                <button class="button is-link" :to="{name:'LoginPerusahaan'}" :class="{'is-loading':load}">Daftar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
// export default {
//     data(){
//         return{
//             datas:[]
//         }
//     },
//     created(){
//         this.getData();
//     },

//     methods:{
//         getData(){
//              let uri="/api/Lowongan";
//              axios.get(uri).then((response) => {
//                  console.log(response);
//                  this.datas = response.data;
//             }).catch(error => {
//                 this.$toast.open({
//                     duration: 2000,
//                     message: error,
//                     position: 'is-bottom',
//                     type: 'is-danger',
//                     queue: false,
//                 })
//             });
//         }
//     }
// }
</script>
<style>

    .title1{
            font-size: 35pt;
            color: grey;
    }

    .card{

        background: rgb(255,255,255); /* Fallback color */
        background: rgba(255,255,255, 0.5); /* background with 0.5 opacity */
    }
 </style>
