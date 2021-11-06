<template>
<!-- <div>
    <a :href="video.url" v-for="(video,index) in videos" :key="index" class="text-decoration-none" style = "color: black;">
    <b-card  no-body class="overflow-hidden">
      <b-row no-gutters>
        <b-col md="2">
            <b-button>{{video.episode_number}}</b-button>
        </b-col>
            <b-col md="10">
          <b-card-body :title="video.title">
            <b-card-text>
                 {{video.description.substring(0,200) + '...'}}
             </b-card-text>
         </b-card-body>
            </b-col>
      </b-row>
    </b-card>
    </a>
</div> -->
 


<div class="lesson-list">
     <a :href="video.url" v-for="(video,index) in videos" :key="index" class="text-decoration-none" style = "color: black;">
              <ul class="lesson-list__items">
                <li class="lesson-list__item">
                  <h2 class="lesson-list__title">
                    <a href="">Lesson {{video.episode_number}}:  {{video.description.substring(0,200) + '...'}}</a>
                  </h2>
                  <div class="lesson-list__meta"><span class="lesson-list__meta-item"><i class="fa fa-play" aria-hidden="true"></i> 20:30</span></div>
                  <ul class="lesson-list__actions">
                    <li class="lesson-list__action">
                      <a :href="video.url" class="btn lesson-list__action btn--start  video-btn" type="button">Start</a>

                    </li>
                  </ul>
                  
                </li>
                
              </ul>
              </a>
            </div>

    
</template>

<script>
    export default {
        props:['videos'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
