<script lang='ts' setup>
import type { Lesson } from '@/modules/lessons/interfaces/Lesson';

interface IProps {
    lessons: Lesson[]
}
const props = defineProps<IProps>()
</script>
<template>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Nombre</th>
                <th scope="col" class="px-6 py-3">Grupo</th>
                <th scope="col" class="px-6 py-3">Semestre</th>
                <th scope="col" class="px-6 py-3">Optativa</th>
                <th scope="col" class="px-6 py-3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr
                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"
                v-for="lesson in lessons" :key="lesson.id"
            >
                <td class="px-6 py-4">{{ lesson.name }}</td>
                <td class="px-6 py-4">{{ lesson.group }}</td>
                <td class="px-6 py-4">{{ lesson.semester }}</td>
                <td class="px-6 py-4">{{ lesson.elective ? 'Si' : 'No' }}</td>
                <td class="px-6 py-4">
                    <RouterLink class="bg-green-800 rounded px-2 py-1 hover:bg-green-900" :to="`/teacher/lesson/${lesson.id}`">Ver alumnos</RouterLink>
                </td>
            </tr>
        </tbody>
    </table>
</template>
