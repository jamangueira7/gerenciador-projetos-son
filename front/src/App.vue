<template>
  <div id="app">
    <img src="./assets/logo.png">
    <Home/>
    <Projects/>
  </div>
</template>

<script>
import Home from './components/Home'
import Projects from './components/Projects'

export default {
  name: 'App',
  components: {
    Home,
    Projects,
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
