<template>
  <div class="footer">
    <div class="row m-0 p-0">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3>Barishal Courier</h3>
                    </div>
                    <div class="card-text">
                        <p>Mirpur-14, Puraton Kachukhet, Dhaka-1206
                            <br>Call: 01521327682
                            <br>Mail: mdabunaserdipu@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Important Links</h4>
                        
                    </div>
                    <div class="card-text">
                        <ul>
                            <li><router-link to="/track">Track Order</router-link></li>
                            <li><router-link to="/">Create Order</router-link></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h5>Social Links</h5>
                        
                    </div>
                    <div class="card-text">
                        <p><a href="https://www.linkedin.com/in/abunaserdipu/"><font-awesome-icon class="linkedin" icon="fa-brands fa-linkedin" size="lg"/></a>
                            <a href="https://www.facebook.com/abu.naserdipu/"><font-awesome-icon class="facebook" icon="fa-brands fa-facebook" size="lg"/></a>
                        <a href="https://twitter.com/NaserDipu"><font-awesome-icon class="twitter" icon="fa-brands fa-twitter" size="lg"/></a>
                        
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="text-white text-center">All rights reserved &copy; by <span class="copyright">Abu Naser Dipu</span></p>
  </div>
</template>

<script>
export default {

}
</script>

<style scoped>
.footer{
    background-color: black;
    padding: 5px;
}
.card{
    background: transparent;
    border-left: 3px solid red;
}
.card-title{
    color:whitesmoke;
}
.card-text{
    color:aliceblue;
}
.facebook{
    padding:0 10px 0 10px;
}
.copyright{
    border: 1px solid bisque;
    background-color: bisque;
    color:black;
}

</style>