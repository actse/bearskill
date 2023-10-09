<script>
	import { defineComponent } from 'vue';
	import { Carousel, Slide, Pagination } from 'vue3-carousel';
	import 'vue3-carousel/dist/carousel.css';

	export default defineComponent({
		name: 'WrapAround',
		components: {
			Carousel,
			Slide,
			Pagination,
		},
		data() {
			return {
				slides: [
					{id: 1,},
					{id: 2,},
					{id: 3,},
					{id: 4,},
				],
			};
		},
	});
</script>

<template>
  <Carousel :autoplay="2000" :wrap-around="true">
    <Slide v-for="{id} in slides" :key="id">
      <div class="carousel__item">
          <img v-if="id === 1" src="./../../imgs/BEARSKILL2.png" alt="" class=" mx-auto mb-5 z-10">
          <img v-if="id === 2" src="./../../imgs/BEARSKILL1.png" alt="" class=" mx-auto mb-5 z-10">
          <img v-if="id === 3" src="./../../imgs/BEARSKILL2.png" alt="" class=" mx-auto mb-5 z-10">
          <img v-if="id === 4" src="./../../imgs/BEARSKILL3.png" alt="" class=" mx-auto mb-5 z-10">  
      </div>
    </Slide>

    <template #addons>
      <Pagination />
    </template>
  </Carousel>
</template>
<style>
.carousel__item {
  min-height: 200px;
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
  box-sizing: content-box;
  border: 5px solid white;
}
</style>