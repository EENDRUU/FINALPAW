<template>
<div class="has-background-light">
    <div>
         <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.html">
                <img src="../../../img/logo.png" width="112" height="28">
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                <router-link :to="{name:'Index'}"  class="navbar-item" :class="{'is-black': burger}">
                    Home
                </router-link>

               <router-link :to="{name:'Search'}"  class="navbar-item" :class="{'is-black': burger}">
                    Cari Lowongan
                </router-link>
                <router-link :to="{name:'TambahLowongan'}"  class="navbar-item" :class="{'is-black': burger}">
                    Tambah Lowongan
                </router-link>
                <router-link :to="{name:'dashboardPelamar'}"  class="navbar-item" :class="{'is-black': burger}">
                    Dashboard Pelamar
                </router-link>
                <router-link :to="{name:'DashboardPerusahaan'}"  class="navbar-item" :class="{'is-black': burger}">
                    Dashboard Perusahaan
                </router-link>


                </div>

                <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons" style="padding-right:20px;">
                        <router-link :to="{name: 'Register'}"  class="button is-primary" :class="{'is-black': burger}">
                            Sign up
                        </router-link>
                        <a class="button is-info">
                            Log in
                        </a>
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
    .footer{
        background-color: black;
    }
</style>
