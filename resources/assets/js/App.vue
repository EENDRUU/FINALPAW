<template>
<div class="has-background-light">
    <div>
         <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.html">
                <img src="../img/logo.png" width="112" height="28">
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                <router-link :to="{ name: 'home' }" class="navbar-item">Home</router-link>

               <router-link :to="{name:'Search'}"  class="navbar-item" :class="{'is-black': burger}">
                    Cari Lowongan
                </router-link>
                <router-link :to="{name:'TambahLowongan'}"  class="navbar-item" :class="{'is-black': burger}">
                    Tambah Lowongan
                </router-link>


                </div>

                <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons" style="padding-right:20px;" v-if="!$auth.check()">
                    
                        <router-link :to="{name: 'register'}"  class="button is-info" :class="{'is-black': burger}">
                            Sign up
                        </router-link>
                        <router-link :to="{name: 'login'}"  class="button is-primary" :class="{'is-black': burger}">
                            Log in
                        </router-link>
                    </div>
                    <div class="buttons" style="padding-right:20px;" v-if="$auth.check()">
                        
                        <router-link :to="{name: 'DashboardPelamar'}"  class="button is-info" :class="{'is-black': burger}">
                            Dashboard
                        </router-link>
                        <a href="#" @click.prevent="$auth.logout()">Logout</a>
                    </div>
                </div>
                </div>
            </div>
        </nav>
        <div id="appPage">
            <main class="pageContent">
            <transition name="fade">
            <router-view></router-view>
            </transition>
            </main>
        </div>
        <footer class="footer">
            <div class="content has-text-centered">
                <h6>
                    <strong>InfoKerja </strong> @2018 find us on <a href="https://facebook.com">Facebook</a> or
                    <a href="http://twitter.com">Twitter</a>
                </h6>
            </div>
        </footer>
    </div>
</div>
</template>
<script>
export default {
    // props: ['email','role'],
    // data(){
    //     return{
    //         datas:[

    //         ],
    //     }
    // }
    // created(){
    //     this.getData();
    // },

    // methods:{
    //     getData(){

    //          axios.get("Lowongan/"+this.id).then((response) => {
    //              console.log(response);
    //              this.datas = response.data;
    //         }).catch(error => {
    //             this.$toast.open({
    //                 duration: 2000,
    //                 message: error,
    //                 position: 'is-bottom',
    //                 type: 'is-danger',
    //                 queue: false,
    //             })
    //         });
    //     }
    // }
}
document.addEventListener('DOMContentLoaded', () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
        el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

        });
    });
    }

    });
</script>
<style>

</style>
