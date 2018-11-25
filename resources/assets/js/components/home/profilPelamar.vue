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
                    Profil Pelamar
                </h1><br><br>
                <figure class="image is-128x128" style="center">
                    <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                </figure>
                <br>
                <div class="field">
                    <label class="label">Nama Pelamar</label>
                    <div class="control">
                    <input class="input" type="nama_pelamar" placeholder="">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                    <input class="input" type="email" placeholder="">
                    </div>
                </div>

                <div class="field">
                    <label class="label">TTL</label>
                    <div class="control">
                    <input class="input" type="ttl" placeholder="">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Keahlian</label>
                    <div class="control">
                    <textarea rows="10" cols="95">

                    </textarea>

                    </div>
                </div>

                <div class="field">
                    <label class="label">Pendidikan</label>
                    <div class="control">
                    <input class="input" type="pendidikan" placeholder="">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Pengalaman Kerja</label>
                    <div class="control">
                    <textarea rows="10" cols="95">

                    </textarea>

                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                    <br>
                    <router-link :to="{name:'RegisterPerusahaan'}" class="button is-link" :class="{'is-black': burger}">
                        Simpan</router-link>
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
