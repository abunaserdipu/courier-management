<script>
import HomeLayout from './components/layouts/HomeLayout.vue';
import FooterLayout from './components/layouts/FooterLayout.vue';
export default{
  components:{
    HomeLayout,FooterLayout
  }
}
</script>

<template>
  <router-view></router-view>
  <FooterLayout />
</template>

<style>

</style>
