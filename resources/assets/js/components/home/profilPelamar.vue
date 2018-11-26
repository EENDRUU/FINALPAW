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
                <form @submit.prevent="addmessage();load = true">
                            <figure class="image is-128x128" style="center">
                            <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                        </figure>
                        <br>
                        <div class="field">
                            <label class="label">Nama Pelamar</label>
                            <div class="control">
                            <input class="input" type="text" placeholder="" v-model="data.namaPelamar"> 
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                            <input class="input" type="text" placeholder="" v-model="data.emailPelamar">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">TTL</label>
                            <div class="control">
                            <input class="input" type="date" placeholder="" v-model="data.tangalLahirPelamar">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Keahlian</label>
                            <div class="control">
                            <textarea rows="10" cols="95" v-model="data.keahlianPelamar">

                            </textarea>

                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Pendidikan</label>
                            <div class="control">
                            <input class="input" type="text" placeholder="" v-model="data.Pendidikan">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Pengalaman Kerja</label>
                            <div class="control">
                            <textarea rows="10" cols="95" v-model="data.PengalamanKerja">

                            </textarea>

                            </div>
                        </div>
                        <div class="field is-grouped">
                            <div class="control">
                            <br>
                            <div class="control">
                                    <button class="button is-link" :class="{'is-loading':load}">Simpan</button>
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
    data(){
        return{
            data:{
                
                namaPelamar:'',
                emailPelamar:'',
                tangalLahirPelamar:'',
                keahlianPelamar:'',
                Pendidikan:'',
                PengalamanKerja:'',
            },
            load: false,
        }
    },

    methods:{
        addmessage(){
            let uri="/Pelamar";
             axios.post(uri,this.data).then((response) => {
                alert("Lowongan Berhasil Ditambah!!");
                this.load = false;


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
