<template>
<div class="hero-body">
    <div class="container">
        <div class="card">
            <div class="card-image">
            <figure class="image is-3by1">
                <img src="../../../img/EmployeeBenefits.jpg">
            </figure>
            </div>
            <div class="card-content">
                <div class="column is-6 is-offset-3">
                    <h1 class="title1">
                        Tambah Lowongan
                    </h1><br><br>
                    <form @submit.prevent="addmessage();load = true">
                        <div class="field">
                            <label class="label">Nama Lowongan</label>
                            <div class="control">
                                <input class="input" v-model="data.namaLowongan"  type="text" placeholder="Nama Lowongan">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Nama Perusahaan</label>
                            <div class="control">
                            <input class="input" type="text" v-model="data.namaPerusahaan" placeholder="Nama Perusahaan">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Lokasi</label>
                            <div class="control">
                            <input class="input" type="text" v-model="data.lokasi" placeholder="Lokasi">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Pendidikan</label>
                            <div class="control">
                            <input class="input" type="text" v-model="data.pendidikan" placeholder="Pendidikan">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Deskripsi Lowongan</label>
                            <div class="control">
                            <textarea rows="10" cols="95" v-model="data.deskripsiLowongan">

                            </textarea>

                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Deskripsi Perusahaan</label>
                            <div class="control">
                            <textarea rows="10" cols="95" v-model="data.deskripsiPerusahaan">

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
                namaLowongan: '',
                namaPerusahaan: '',
                lokasi: '',
                pendidikan: '',
                deskripsiLowongan: '',
                deskripsiPerusahaan: '',
            },
            load: false,
        }
    },
    methods:{
        addmessage(){
            let uri="/Lowongan";
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
