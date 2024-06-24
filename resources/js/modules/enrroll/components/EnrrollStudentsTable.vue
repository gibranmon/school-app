<script lang='ts' setup>
import type { Student } from '@/modules/students/interfaces/Student';
import { ref} from 'vue'

interface IProps {
    students: Student[]
}

const props = defineProps<IProps>()

</script>
<template>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="student in students" :key="student.id">
                <td>{{ student.name }} {{ student.lastname }}</td>
                <td>{{ student.email }}</td>
                <td>{{ student.phone }}</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</template>