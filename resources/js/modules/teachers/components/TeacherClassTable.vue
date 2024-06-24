<script lang='ts' setup>
import type { Lesson } from '@/modules/lessons/interfaces/Lesson';

interface IProps {
    lessons: Lesson[]
}
const props = defineProps<IProps>()
</script>
<template>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Grupo</th>
                <th>Semestre</th>
                <th>Optativa</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="lesson in lessons" :key="lesson.id">
                <td>{{ lesson.name }}</td>
                <td>{{ lesson.group }}</td>
                <td>{{ lesson.semester }}</td>
                <td>{{ lesson.elective ? 'Si' : 'No' }}</td>
                <td>
                    <RouterLink :to="`/teacher/lesson/${lesson.id}`">Ver alumnos</RouterLink>
                </td>
            </tr>
        </tbody>
    </table>
</template>