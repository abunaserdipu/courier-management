<template>
  <HeaderLayout />
  <div class="track-header">
    <img src="../../assets/images/store.jpg" alt="">
    <p class="fs-1 fw-bold text-white">Order Track</p>
  </div>
  <div class="row p-0 m-0">
        <div class="col-md-6">
            <img src="../../assets/images/track.jpg" style="width:100%" alt="track">
        </div>
        <div class="col-md-6 pt-3 d-flex align-items-center">
            <form @submit.prevent="trackOrder()">
            <!-- <div class="form-group pb-3">
                <select class="form-control shadow rounded" id="track-system">
                     <option value="">CN Number</option> 
                    <option value="receiver_contact">Receiver Contact</option>
                    <option value="sender_contact">Sender Contact</option>
                </select>
              </div>
            <div class="form-group pb-3">
                <select class="form-control shadow rounded" name="track-limit" id="">
                    <option value="">Last 7 days</option>
                    <option value="">Last 14 days</option>
                    <option value="">Last 21 days</option>
                    <option value="">Last 30 days</option>
                </select>
              </div> -->
              <div class="form-group pb-3">
                <input class="form-control shadow rounded" type="search" v-model="trackSearch" placeholder="Track your order">
              </div>
              <input class="form-control btn btn-outline-danger shadow rounded" type="submit" value="Search">
        </form>
        {{ trackSearch }}
    </div>
    </div>
</template>

<script>
import HeaderLayout from '../layouts/HeaderLayout.vue';
import axios from "axios";
export default {
  data(){
    return {
      trackSearch:""
    }
  },
  methods:{
    trackOrder(){
      axios.post('http://127.0.0.1:5173/api/track/',{item:this.trackSearch}).then((response)=>{
        console.log(response);
      })
    }
  },
  components:{
  HeaderLayout
}
}
</script>

<style scoped>
.track-header img{
  width: 100%;
  height: 300px;
  object-fit: cover;
  object-position:center;
  filter: brightness(0.5);
  position:relative;
  z-index: 0;
}
.track-header p{
  position: absolute;
  z-index: 1;
  top: 150px;
  left: 20px;
  border-bottom: 3px solid blue;
}
</style>