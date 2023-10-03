<template>
  <Carousel :autoplay="2000" :wrap-around="true">
    <Slide v-for="(img, index) in imgs" :key="index">
      <!-- <img src="../../imgs/BEARSKILL2.png" alt="" class="object-cover"> -->
      <!-- {{ img.filename }} -->
      <img :src="`${img.filename}`" alt="" class="object-cover"  />
      <!-- <img :src="'../../imgs/' +  img.filename" alt="" class="object-cover"  />
      {{ img.filename  }} -->
    </Slide>
    <template #addons>
      <Navigation />
      <Pagination />
    </template>
  </Carousel>
</template>

<script>
import { defineComponent } from "vue";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";

import "vue3-carousel/dist/carousel.css";

export default defineComponent({
  name: "Basic",
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
  data() {
    return {
      imgs: [
        { filename: 'BEARSKILL2.png' },
        { filename: 'BEARSKILL1.png' },
        { filename: 'BEARSKILL2.png' },      
      ],
    };
  },
  mounted() {

  },
});
</script>

<style>
.carousel__item {
  min-height: 400px;
  width: 100%;
  background-color: var(--vc-clr-white);
  color: var(--vc-clr-white);
  font-size: 20px;
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.carousel__slide {
  padding: 10px;
}

.carousel__prev,
.carousel__next {
  background-color: gainsboro;
  border-radius: 20px;
  margin: 0px 50px 0px 50px;
  box-sizing: content-box;
}
</style>
