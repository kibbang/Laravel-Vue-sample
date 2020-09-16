<template>
  <div>
    <div>
      <div class="header">
        <mainHeader />
      </div>
      <div class="container"></div>
      <div class="main">
      </div>
      <div class="content"></div>
    </div>
  </div>
</template>

<script>

import mainHeader from "../components/Header.vue"
export default {

  components:{
    mainHeader
  }
}
</script>

<style>
.container {
  width: 1170px;
  padding-left: 15px;
  padding-right: 15px;
  margin-left: 0 auto;
  margin-right: 0 auto;
}
.main {
  padding-top: 180px;
  padding-bottom: 800px;
  background-image: url('../../../public/main.jpg');
  background-size: cover;
}


</style>