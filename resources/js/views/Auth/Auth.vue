<template>
  <div>
    <div>
      <main-header />
    </div>
    <div>
      <h1>Register&Login Page</h1>
    </div>
    <div>
      <label>Name</label>
      <input v-model="user.name" class="name">
      <br>
      <label>E-mail</label>
      <input v-model="user.email" class="email">
      <br>
      <label>Password</label>
      <input type="password" v-model="user.password"  class="password">
    </div>
    <button type="button" class="register" @click="createUser">Register</button>
  </div>
</template>

<script>
import mainHeader from '../../components/Header.vue'

export default {
  components: {
    mainHeader
  },
  data() {
    return {
      user: {
        name: '',
        email: '',
        password: '',
      }
    }
  },
  methods: {
    createUser() {
      axios.post('/api/user',{
        user: this.user,
      })
      .then(response=>{
        this.user = response.data.user
        this.$router.push('/');
      })
      .catch(error=>console.log(error))
    }
  }
}
</script>

<style>

</style>