<template>
   <div class="hero-body">
                    <div class="container">
						<div class="card">
						  <div class="card-image">
							<figure class="image is-3by1">
							  <img src="../../../img/Job-Search-SB.jpg">
							</figure>
						  </div>
							<div class="card-content">
								<div class="column is-6 is-offset-3">
									<h1 class="title1">
										Registrasi Pelamar
									</h1><br><br>
									<div class="field">
									  <label class="label">Nama</label>
									  <div class="control">
										<input class="input" type="text" placeholder="Nama">
									  </div>
									</div>

									<div class="field">
									  <label class="label">Email</label>
									  <div class="control">
										<input class="input" type="text" placeholder="Email">
									  </div>
									</div>

									<div class="field">
									  <label class="label">Kata Sandi</label>
									  <div class="control">
										<input class="input" type="password" placeholder="Kata Sandi">
									  </div>
									</div>

									<div class="field">
									  <label class="label">Konfirmasi Kata Sandi</label>
									  <div class="control">
										<input class="input" type="password" placeholder="Konfirmasi Kata Sandi">
									  </div>
									</div>
                    <div class="field is-grouped">
                        <div class="control">
                        <br>
                        <router-link :to="{name:'LoginPelamar'}"  class="button is-link" :class="{'is-black': burger}">
													Daftar
                        </router-link>
                        </div>
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
