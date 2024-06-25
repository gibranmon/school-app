<script lang='ts' setup>
import type { Student } from '@/modules/students/interfaces/Student';
import { ref} from 'vue'

interface IProps {
    students: Student[]
}

const props = defineProps<IProps>()

</script>
<template>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Nombre</th>
                <th scope="col" class="px-6 py-3">Correo</th>
                <th scope="col" class="px-6 py-3">Telefono</th>
            </tr>
        </thead>
        <tbody>
            <tr
                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"
                v-for="student in students" :key="student.id">
                <td class="px-6 py-4">{{ student.name }} {{ student.lastname }}</td>
                <td class="px-6 py-4">{{ student.email }}</td>
                <td class="px-6 py-4">{{ student.phone }}</td>
            </tr>
        </tbody>
    </table>
</template>
