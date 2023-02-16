<template>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../assets/images/store.jpg" class="d-block w-100 c-img-1" alt="...">
      <div class="carousel-head">
      <p class="carousel-title">We pick up & deliver your packages</p>
      <p class="carousel-text">Making rush <strong>same day</strong> deliveries throughout the Bangladesh. On time every time.</p>
    </div>
    </div>
    <div class="carousel-item">
      <img src="../../assets/images/transport.jpg" class="d-block w-100 c-img-2" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../assets/images/packaging.jpg" class="d-block w-100 c-img-3" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="service py-3">
  <div class="container-fluid">
  <h2 class="text-center fs-1">Services</h2>
  <hr>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <font-awesome-icon icon="fa-solid fa-boxes-packing" size="3x" />
          <div class="card-title">
            <h3>Packages</h3>
          </div>
          <div class="card-text">
            <p>
              Small Packages, Medium Packages,
               Large Packages, Oversized &
                Overweight Packages</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
        <font-awesome-icon icon="fa-solid fa-file-lines" size="3x" />
          <div class="card-title">
            <h3>Documents</h3>
          </div>
          <div class="card-text">
            Sensitive Documents, Passport Delivery and filing, Visa Delivery and Filing Court Filings, Real Estate Contracts, Court Document Retrieval
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
        <font-awesome-icon icon="fa-solid fa-gem" size="3x" />
          <div class="card-title">
            <h3>Valuables</h3>
          </div>
          <div class="card-text">
            Art Work, Jewelry, Precious Metals, Furs, Antiques, Collectibles, Glassware
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
</template>

<script>
export default {

}
</script>
 
<style scoped>
.carousel{
  position: relative;
  z-index: 0;
  filter: brightness(0.5);
}
.carousel-head{
  position:absolute;
  z-index: 1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.carousel-title{
  text-transform: capitalize;
  font-size:39px;
  font-weight: bold;
  color: white;
}
.carousel-text{
  text-transform: capitalize;
  font-size:17px;
  color: white;
}
.service hr{
  width: 100px;
  border-bottom: 3px solid red;
  margin: auto;
}
.card{
  text-align: center;
  border: none;
}
.card-text{
  font-size: 20px;
}
</style>