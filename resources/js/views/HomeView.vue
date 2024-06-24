<script lang='ts' setup>
import { ref, onMounted} from 'vue'
import api from '../api/api'

const axiosTest = async () => {
    const data = await api.get('/test')
    console.log(data)
}

onMounted(async () => {
    await axiosTest()
})

</script>
<template>
    <h1>Vista Home</h1>
</template>