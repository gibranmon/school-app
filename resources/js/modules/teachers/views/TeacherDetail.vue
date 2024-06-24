<script lang='ts' setup>
import useTeacher from '../composables/useTeacher';
import TeacherClassTable from '../components/TeacherClassTable.vue';


const { teacher, fullName } = useTeacher()

</script>
<template>
    <div>
        <h1>Profesor:{{ fullName }}</h1>
        <TeacherClassTable :lessons="teacher?.lessons"/>
    </div>
</template>