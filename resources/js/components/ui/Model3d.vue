<template>
  <Renderer
    ref="renderer"
    antialias
    alpha
    resize
    orbit-ctrl
    class="w-[618px] h-[560px] bg-gray-500"
  >
    <Camera ref="cam" :position="{ x: 44, y: 10, z: -7 }" />
    <Scene ref="scene">
      <AmbientLight :intensity="0.8" />
      <DirectionalLight :position="{ x: 5, y: 5, z: 5 }" :intensity="1" />
    </Scene>
  </Renderer>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { Renderer, Camera, Scene, AmbientLight, DirectionalLight } from 'troisjs'
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader'

const scene = ref(null)
const cam = ref(null)

onMounted(() => {
  const loader = new GLTFLoader()

  loader.load(
    '/models/low_poly_farm_v2.glb',
    gltf => {
      const modelo = gltf.scene
      modelo.scale.set(1, 1, 1)
      modelo.position.set(0, 0, 0)
      scene.value.add(modelo)
    },
    undefined,
    erro => {
      console.error('Erro ao carregar modelo:', erro)
    }
  )
})
</script>
