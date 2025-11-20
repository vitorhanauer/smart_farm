<template>
    <Renderer ref="renderer" antialias resize orbit-ctrl class="w-full h-[400px] bg-black">
        <Camera ref="cam" :position="{ x: 3, y: 3, z: 3 }" />
        <Scene ref="scene">
            <Mesh ref="box">
                <BoxGeometry :args="[1, 1, 1]" />
                <StandardMaterial color="orange" />
            </Mesh>
            <AmbientLight :intensity="0.6" />
            <DirectionalLight :position="{ x: 4, y: 4, z: 4 }" />
        </Scene>
    </Renderer>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import * as THREE from 'three'
import { Renderer, Camera, Scene, Mesh, BoxGeometry, AmbientLight, DirectionalLight, StandardMaterial } from 'troisjs'

const renderer = ref(null)
const cam = ref(null)
const scene = ref(null)
const box = ref(null)

const raycaster = new THREE.Raycaster()
const mouse = new THREE.Vector2()

onMounted(() => {
    const canvas = renderer.value.renderer.domElement

    canvas.addEventListener('click', ev => {
        const rect = canvas.getBoundingClientRect()

        mouse.x = ((ev.clientX - rect.left) / rect.width) * 2 - 1
        mouse.y = -((ev.clientY - rect.top) / rect.height) * 2 + 1

        raycaster.setFromCamera(mouse, cam.value.camera)

        const objetos = [box.value.mesh]
        const hits = raycaster.intersectObjects(objetos)

        if (hits.length > 0) {
            console.log('CLICOU NO CUBO!', hits[0].object)
            hits[0].object.material.color.set('hotpink')
        }
    })
})
</script>
