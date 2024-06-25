<script lang='ts' setup>
import EnrrollStudentsTable from '../components/EnrrollStudentsTable.vue';
import useEnrroll from '../composables/useEnrroll';

const { students } = useEnrroll()
</script>
<template>
    <div class="relative overflow-x-auto">
        <EnrrollStudentsTable :students="students" />
    </div>
</template>
