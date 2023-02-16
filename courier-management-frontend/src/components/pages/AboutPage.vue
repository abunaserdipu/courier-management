<template>
  <HeaderLayout />
  <div class="about-header">
    <img src="../../assets/images/store.jpg" alt="">
    <p class="fs-1 fw-bold text-white">About Us</p>
  </div>
  <div class="row m-0 p-0">
    <div class="col-md-6 d-flex align-items-center">
      <div class="about-image">
    <img src="../../assets/images/about.jpg" alt="">
  </div>
    </div>
    <div class="col-md-6 p-3">
      <div class="about-text">
    <p class="fs-5 font-monospace">
The expert team of messengers, couriers and delivery drivers at Barishal Couriers can deliver any package of any size throughout the nation. People placing an order with our team in can rest assured that their deliveries are not only made on time but arrive safely. <br><br>

Since 2021 our company has had an experienced team of delivery professionals who understand the needs of our customers and always follow through on every single delivery. Our main goal is to streamline every single delivery and rush courier service that we offer by optimizing delivery routes and making use of our fleet of vehicles to get your package delivered across the country in the quickest way possible. <br><br>

All of our offices are open 24 hours a day 7 days a week. We also have sedans, cargo vans, and box trucks in our fleet of vehicles which allows us to quickly delivery packages that can weigh up to 10,000lbs. <br><br>

Our courier service specializes in rush deliveries on a national level. This means that if you need a package delivered anywhere in the country we strive to get it done as quickly as possible. All of your fragile and important deliveries are safe with Reliable Couriers because our delivery drivers are bonded and equipped with GPS which allows for real time tracking. You don’t have to worry about your item breaking during the shipping process because we pick it up at point A and drive it to point B with no stops in between. <br><br>

We also specialize in a variety of other courier services such as rush package delivery, medical courier services, legal courier services and same day freight delivery. We understand that businesses have a variety of delivery needs so we trained our couriers to specialize in certain deliveries to meet the qualifications and standards of these industries. <br><br>

No matter what type of rush or same day delivery you need Reliable Couriers has you covered. Our award winning customer service and trained delivery drivers make getting your package to it’s destination not only easy but gives you peace of mind that it will arrive on time every time.</p>
  </div>
    </div>
  </div>
  
  
</template>

<script>
import HeaderLayout from '../layouts/HeaderLayout.vue';
export default {
components:{
  HeaderLayout
}
}
</script>

<style scoped>
/* *{
  margin: 0;
  padding: 0;
} */

.about-header img{
  width: 100%;
  height: 300px;
  object-fit: cover;
  object-position:center;
  filter: brightness(0.5);
  position:relative;
  z-index: 0;
}
.about-header p{
  position: absolute;
  z-index: 1;
  top: 150px;
  left: 20px;
  border-bottom: 3px solid blue;
}
.about-image img{
  max-width: 100%;
}
.about-text p{
  text-align: justify;
}
</style>