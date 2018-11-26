<template>
<div>
    <div v-for="data in datas" :key="data.namaLowongan">
        <section class="hero is-info is-bold">
        <div class="hero-body" >
            <div class="columns is-desktop" >
                <div class="column is-three-fifths" style="margin-top: 0; padding-top: 0;">
                    <h1 class="title" style="padding-bottom: 60px">
                            {{data.namaLowongan}} {{data.namaPerusahaan}}, {{data.lokasi}}

                    </h1>
                    <a class="button is-white is-outlined" > Back to search result</a>
                </div>
                <div class="column">
                    <table style="font-size: 20px;">
                            <tr>
                                <td>
                                    <label>Lokasi: </label>
                                    <hr style="margin-top: 10px; margin-bottom: 10px; height: 1px">
                                </td>
                                <td>
                                        <label style="padding-left: 60px; padding-right: 50px;">
                                            {{data.lokasi}}
                                        </label>
                                        <hr style="margin-top: 10px; margin-bottom: 10px; height: 1px">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Perusahaan: </label>
                                    <hr style="margin-top: 10px; margin-bottom: 10px; height: 1px">
                                </td>
                                <td>
                                    <label style="padding-left: 60px; padding-right: 50px;">
                                        {{data.namaPerusahaan}}
                                    </label>
                                    <hr style="margin-top: 10px; margin-bottom: 10px; height: 1px">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Pendidikan: </label>
                                    <hr style="margin-top: 10px; margin-bottom: 10px; height: 1px">
                                </td>
                                <td>
                                    <label style="padding-left: 60px; padding-right: 50px;">
                                        {{data.pendidikan}}
                                    </label>
                                    <hr style="margin-top: 10px; margin-bottom: 10px; height: 1px">
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <div class="tile is-ancestor" style="margin: 30px;">
            <div class="tile is-vertical is-8">
                <div class="tile is-parent">
                <article class="tile is-child notification is-white">
                    <p class="title">Deskripsi</p><br>
                    <p class="subtitle">
                    </p>
                    <div class="content">
                    <p>
                            {{data.deskripsiLowongan}}
                    </p>
                    <div style="padding-top: 50px;">
                        <a class="button is-success is-outlined" > Back to search result</a>
                        <a href="#" class="button is-info is-outlined" @click="addLamaran($auth.user().name,data.namaPerusahaan,data.id,data.namaLowongan)">Lamar Pekerjaan</a>
                        
                    </div>

                    </div>
                </article>
                </div>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child notification is-white">
                <div class="content">
                    <p class="title">Profile Perusahaan</p>
                    <p class="subtitle"></p>
                    <div class="content">
                    <p class="image is-64x64">
                        <img src="https://bulma.io/images/placeholders/256x256.png">
                    </p>
                    <p class="subtitle">
                        Deskripsi Perusahaan
                    </p>
                    <p>
                         {{data.deskripsiPerusahaan}}
                    </p>
                    </div>
                </div>
                </article>
            </div>
            </div>

    </div>
</div>


</template>
<script>
export default {
    props: ['id'],
    data(){
        return{
            datas:[],
            a:{
                namaPelamar: '',
                namaPerusahaan: '',
                idLowongan: '',
                namaLowongan: '',
            },
            load: false,
        }
    },
    created(){
        this.getData();
    },

    methods:{
        getData(){
            
             axios.get("Lowongan/"+this.id).then((response) => {
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
        },
        addLamaran(nPelamar,nPerusahaan,idL,namaL){
            this.a.namaPelamar=nPelamar;
            this.a.namaPerusahaan=nPerusahaan;
            this.a.idLowongan=idL;
            this.a.namaLowongan=namaL;
            let uri="/Lamaran";
             axios.post(uri,this.a).then((response) => {
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

</style>
