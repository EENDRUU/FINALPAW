<template>
<div>
    <section class="hero is-info is-bold" >
    <div class="hero-body hero-image" >


    </div>
    </section>
    <div class="isi">
        <div class="columns" style="padding: 50px; ">
            <div class="column is-one-quarter ">
                <div class="card ">
                    <div class="card-content">
                    <aside class="menu" style="padding-bottom: 150px">
                        <p class="menu-label">
                            DASHBOARD
                        </p>
                        <ul class="menu-list" >
                            <li><a class="is-active" style="color: white">Lihat Pelamar</a></li>
                            <li>
                                <router-link :to="{name:'TambahLowongan'}" style="color: blue"  :class="{'is-loading':load}">
                                    Tambah Lowongan
                                </router-link>
                            </li>
                            <!-- <li>
                                <router-link :to="{name:'ProfilePelamar'}" style="color: blue"  :class="{'is-loading':load}">
                                    Profile saya
                                </router-link>
                            </li>
                            <li>
                                <router-link :to="{name:'EditPelamar'}" style="color: blue"  :class="{'is-loading':load}">
                                    Edit Profile
                                </router-link>
                            </li> -->
                        </ul>
                    </aside>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="tile is-parent" style="padding: 0">
                    <article class="tile is-child notification is-light" style="padding-bottom: 100px">
                    <p class="title">Lihat Pelamar</p>
                    <hr>
                    <div class="content">
                        <table>
                        <tr class="has-background-primary" style="color: white">
                            <td>id</td>
                            <td>Nama Lowongan</td>
                            <td>Nama Pelamar</td>
                            <td>Apply Date</td>
                            <td>Action</td>
                        </tr>
                        <tr v-for="data in datas" :key="data.id">
                            <td>{{data.id}}</td>
                            <td>{{data.namaLowongan}}</td>
                            <td>{{data.namaPelamar}}</td>
                            <td>{{data.created_at}}</td>
                            <td>
                                <router-link :to="{name:'DetailPekerjaan', params: { id: data.idLowongan }}"  class="button is-link" :class="{'is-loading':load}">
                                    View Pelamar
                                </router-link>
                            </td>
                        </tr>
                        </table>
                    </div>
                    </article>
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
            datas:[],
        }
    },
    created(){
        this.getData();
    },

    methods:{
        getData(){
             let uri="/api/Lamaran/1/it";
             axios.get(uri).then((response) => {
                 this.datas= response.data;
                 console.log(this.datas);
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
            .panel{
                max-width: 25%


            }
            html {
                    height: 100vh;
                    width: 100vw;
                }

                body {
                    height: 100%;
                    width: 100%;
                }

                .columns {
                    height: 100%;
                }

                .column.no-scroll {
                    overflow: auto;
                }

                .column.logo {
                    max-width: 20%;
                    margin-left: 2%;
                    display: flex;
                    justify-content: left;
                    align-items: left;
                }

                .placeholder {
                    background-color: cyan;
                    margin: 2rem;
                    height: 250px;
                }
                .hero-image{
                    background-image: url("../../../img/tileatasPelamar.jpg");
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: auto;
                    background-color: #999;
                }
                .isi{
                margin-top: 2%
                }

 </style>
