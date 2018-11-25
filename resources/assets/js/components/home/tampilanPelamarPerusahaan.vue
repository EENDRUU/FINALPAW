<template>
    <div>
          <section class="hero is-info is-bold" >  
              <div class="hero-body hero-image" >
                      
                  
              </div> 
              </section>
    <div class="isi">
      <div class="columns">
  
        <div class="column logo">
            <aside class="menu">
                <p class="menu-label">
                  DASHBOARD
                </p>
                <ul class="menu-list">
                  
                  <li><a>Lihat Pelamar</a></li>
                  <li><a>Edit Detail Lowongan</a></li>
                  <li><a>Profile Saya</a></li>
                </ul>
                
        </div>
  
        <div class="column no-scroll">
            <article class="media">
                <figure class="media-left">
                  <p class="image is-64x64">
                    <img src="https://bulma.io/images/placeholders/128x128.png">
                  </p>
                </figure>
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>Andrew</strong> -- <small>Teknik Informatika</small> 
                      <br>
                      <ul>
                        <li>Lulusan S1</li>
                        <li>Pekerja Keras</li>
                      </ul>
                    </p>
                  </div>
                </div>
                <figure class="media-right">
                    <button class="button is-primary">Lihat resume</button>
                    <button class="button is-danger">Hapus</button>
                </figure>
              </article>
              <article class="media">
                  <figure class="media-left">
                    <p class="image is-64x64">
                      <img src="https://bulma.io/images/placeholders/128x128.png">
                    </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p>
                        <strong>Alwan</strong> -- <small>Teknik Industri</small> 
                        <br>
                        <ul>
                          <li>Lulusan S1</li>
                          <li>Bisa Bekerja minimal 10 jam sehari</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                  <figure class="media-right">
                      <button class="button is-primary">Lihat resume</button>
                      <button class="button is-danger">Hapus</button>
                  </figure>
                </article>
                <article class="media">
                    <figure class="media-left">
                      <p class="image is-64x64">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                      </p>
                    </figure>
                    <div class="media-content">
                      <div class="content">
                        <p>
                          <strong>Lily</strong> --   <small>Arsitektur</small> 
                          <br>
                          <ul>
                            <li>Lulusan S1</li>
                            <li>Bisa Bekerja minimal 9 jam sehari</li>
                          </ul>
                        </p>
                      </div>
                    </div>
                    <figure class="media-right">
                        <button class="button is-primary">Lihat resume</button>
                        <button class="button is-danger">Hapus</button>
                    </figure>
                  </article>
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
