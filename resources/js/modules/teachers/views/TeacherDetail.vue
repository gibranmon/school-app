<script lang='ts' setup>
import useTeacher from '../composables/useTeacher';
import TeacherClassTable from '../components/TeacherClassTable.vue';


const { teacher, fullName } = useTeacher()

</script>
<template>
    <div>
        <h1 class="text-3xl mb-4 p-4"><span class="font-bold">Profesor(a): </span>{{ fullName }}</h1>
        <TeacherClassTable :lessons="teacher?.lessons"/>
    </div>
</template>
