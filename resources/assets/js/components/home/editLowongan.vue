<template>
    <div class="hero-body">
                    <div class="container">
					
					
						<div class="card">
						  <div class="card-image">
							<figure class="image is-3by1">
							  <img src="../../../img/Banner-Search.jpg">
							</figure>
						  </div>
							<div class="card-content">
								<div class="column is-6 is-offset-3">
									<h1 class="title1">
										Edit Lowongan
									</h1><br><br>
									<div class="field">
									  <label class="label">Nama Perusahaan</label>
									  <div class="control">
										<input class="input" type="nama_perusahaan" placeholder="">
									  </div>
									</div>
									
									<div class="field">
									  <label class="label">Bidang Pekerjaan</label>
									  <div class="control">
										<input class="input" type="bidang_pekerjaan" placeholder="">
									  </div>
									</div>
									
									<div class="field">
									  <label class="label">Lokasi</label>
									  <div class="control">
										<input class="input" type="lokasi" placeholder="">
									  </div>
									</div>
									
									<div class="field">
									  <label class="label">Pendidikan</label>
									  <div class="control">
										<input class="input" type="pendidikan" placeholder="">
									  </div>
									</div>
									
									<div class="field">
									  <label class="label">Deskripsi</label>
									  <div class="control">
									  <textarea rows="10" cols="95">
		
									  </textarea>
		
									  </div>
									</div>
									<div class="field is-grouped">
									  <div class="control">
										<br>
										<router-link :to="{name:'DetailPekerjaan'}" class="button is-link" :class="{'is-black': burger}">
										Simpan
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
export default {
    data(){
        return{
            datas:[]
        }
    },
    created(){
        this.getData();
    },

    methods:{
        getData(){
             let uri="/api/Lowongan";
             axios.get(uri).then((response) => {
                 console.log(response);
                 this.datas = response.data;
            }).catch(error => {
                this.$toast.open({
                    duration: 2000,
                    message: error,
                    position: 'is-bottom',
                    type: 'is-danger',
                    queue: false,
                })
            });
        }
    }
}
</script>

 <style>
            .header-image {
                    background-image: url("");
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
                    background-color: #999;
            }

			.title1{
					font-size: 35pt;
					color: grey;
			}
			
			.card{
				
			  background: rgb(255,255,255); /* Fallback color */
			  background: rgba(255,255,255, 0.5); /* background with 0.5 opacity */
			}
</style>
