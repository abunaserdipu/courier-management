<template>
    <div class="container-fluid review">
        <h2 class="text-center fs-1">Reviews</h2>
  <hr>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../assets/images/transport.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../assets/images/packaging.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../assets/images/store.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
.review hr{
  width: 100px;
  border-bottom: 3px solid red;
  margin: auto;
}
</style>