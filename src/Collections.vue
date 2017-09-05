<template>
    <div id="app">
      <div class="container">
          <div class="row" v-for="n in 4">
              <div class="col-md-4" v-for="n in 3">
                  <img src="./assets/cover.jpg" class="img-thumbnail" v-img:yarkon />
              </div>
          </div>
      </div>
    </div>
</template>
<script>
    export default {
        name: 'collections',
        data() {
            return {
                message: "Hello Vue!"
            }
        },
    }
</script>


