<template>
<div class="content">
    <div class="image1">
        <div class="container has-text-centered" style="padding-top: 100px">
                <div class="column">
                    <strong>
                        <h1 class="title" style="font-size: 50px;  color: white;">
                            <i>
                                    Daftar Sebagai Pencari Kerja
                            </i>
                        </h1>
                    </strong>
                    <h2 class="subtitle" >
                        <strong style=" color: white;">
                                TEMUKAN PEKERJAAN IMPIANMU
                        </strong>
                    </h2>
                    <h3>
                        <router-link :to="{name: 'RegisterPelamar'}"  class="button is-info" :class="{'is-black': burger}">
                            <strong>Registrasi Sekarang &#62;&#62;</strong>
                        </router-link>
                    </h3>
                </div>
        </div>
    </div>
    <div class="image2">
        <div class="container has-text-centered" style="padding-top: 100px">
            <div class="column">
                <strong>
                    <h1 class="title" style="font-size: 50px;  color: white;">
                        <i>
                                Daftar Sebagai Perusahaan
                        </i>
                    </h1>
                </strong>
                <h2 class="subtitle" >
                    <strong style=" color: white;">
                            TEMUKAN KANDIDAT POTENSIONAL
                    </strong>
                </h2>
                <h3>
                    <router-link :to="{name: 'RegisterPerusahaan'}"  class="button is-info" :class="{'is-black': burger}">
                            <strong>Registrasi Sekarang &#62;&#62;</strong>
                    </router-link>
                </h3>
            </div>
        </div>
    </div>
</div>
</template>
<script>
export default {

}
</script>

<style>
            .header-image {
                    background-image: url("../../../img/backgroud_index.jpg");
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
                    background-color: #999;
            }
            .image1{
                background-image: url("../../../img/2.jpg");
                height: 400px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }

        .image2{
            background-image: url("../../../img/3.jpg");
            height: 400px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;

        }
        h1, h2, h3{
            color: white;
        }

</style>
