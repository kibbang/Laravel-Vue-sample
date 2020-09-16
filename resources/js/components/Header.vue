<template>
  <header>
    <div class="container">
      <div class="left-header">
        <button class="home" @click="$router.push('/')">Home</button>
      </div>
      <div class="right-header">
        <button class="register" @click="$router.push('/auth')">Register&Login</button>
      </div>
    </div>    
  </header>
</template>

<script>

export default {

}
</script>

<style>

header {
  background-color: rgba(34, 49, 52, 0.2) ;
  height: 65px;
}
.left-header {
  float:left;
  background-color: yellow;
}
.right-header {
  float: right;
  background-color: chocolate;
}
.right-header a {
  line-height: 65px;
  padding-left: 25px;
  padding-right: 25px;
  color: white;
  display: block;
  transition: all 0.5s;
}
.right-header :hover {
  background-color: crimson;
}
button {
  padding: 8px 24px;
  color: black;
  opacity: 0.7;
  border-radius: 4px;
  height: 65px;
}


</style>