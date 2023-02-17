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
              <!-- <input class="form-control btn btn-outline-danger shadow rounded" type="submit" value="Search"> -->
              <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Open modal
</button>
        </form>
    </div>
    </div>
    <!-- Button to Open the Modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Open modal
</button> -->

<!-- The Modal -->
<div class="modal" id="myModal" v-if="searchResult.length > 0">
  <div class="modal-dialog  modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <table class="table table-striped table-bordered">
          <tr>
            <th>Sender Name</th>
            <th>Sender Mobile</th>
            <th>Receiver Name</th>
            <th>Receiver Mobile</th>
            <th>Order Status</th>
          </tr>
          <tr v-for="info in searchResult" :key="info.id">
            <td>{{ info.sender_name }}</td>
            <td>{{ info.sender_contact }}</td>
            <td>{{ info.receiver_name }}</td>
            <td>{{ info.receiver_contact }}</td>
            <td>{{ info.status }}</td>
          </tr>
        </table>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</template>

<script>
import HeaderLayout from '../layouts/HeaderLayout.vue';
import axios from "axios";
export default {
  data(){
    return {
      trackSearch:"",
      searchResult:[],
    }
  },
  methods:{
    trackOrder(){
      axios.post('http://127.0.0.1:8000/api/track/',{item:this.trackSearch}).then((response)=>{
        this.searchResult = response.data;
        // console.log(response.data);
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