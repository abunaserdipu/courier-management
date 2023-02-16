<template>
  <div class="row p-0 m-0">
        <div class="col-md-6">
            <img src="../../assets/images/track.jpg" style="width:100%" alt="track">
        </div>
        <div class="col-md-6 pt-3 d-flex align-items-center">
            <form action="">
            <div class="form-group pb-3">
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
              </div>
              <div class="form-group pb-3">
                <input class="form-control shadow rounded" type="search" name="track-search" placeholder="Track your order">
              </div>
              <input class="form-control btn btn-outline-danger shadow rounded" type="button" value="Search" id="search">
        </form>
    </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>

</style>