<script lang='ts' setup>
import useTeachers from '../composables/useTeachers';

const { teachers } = useTeachers()

</script>
<template>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo electronico</th>
                <th>Telefono</th>
                <th>Cedula Profesional</th>
                <th>Clases</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="teacher in teachers" :key="teacher.id">
                <td>{{ teacher.name }} {{ teacher.lastname }}</td>
                <td>{{ teacher.email }}</td>
                <td>{{ teacher.phone }}</td>
                <td>{{ teacher.professionalLicense }}</td>
                <td>
                    <RouterLink :to="`/teacher/${teacher.id}`">Ver clases</RouterLink>
                </td>
            </tr>
        </tbody>
    </table>
</template>