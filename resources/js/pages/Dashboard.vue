<template>
  <AppLayout>

    <Header username="Vitor"></Header>
    <CardGroup>
      <Card>
        <Model3d></Model3d>
      </Card>
      <Card>
        <TableData></TableData>
      </Card>
    </CardGroup>
  </AppLayout>
</template>

<script setup>
import AppLayout from "../components/layout/AppLayout.vue"
import Card from "../components/ui/cards/Card.vue"
import Header from "../components/ui/Header.vue"
import Model3d from "../components/ui/Model3d.vue"
import CardGroup from "../components/ui/cards/CardGroup.vue"
import TableData from "../components/ui/TableData.vue"
</script>

<style scoped>
</style>
