<script lang='ts' setup>
import useTeachers from '../composables/useTeachers';

const { teachers } = useTeachers()

</script>
<template>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Nombre</th>
                <th scope="col" class="px-6 py-3">Correo electronico</th>
                <th scope="col" class="px-6 py-3">Telefono</th>
                <th scope="col" class="px-6 py-3">Cedula Profesional</th>
                <th scope="col" class="px-6 py-3">Clases</th>
            </tr>
        </thead>
        <tbody>
            <tr
                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"
                v-for="teacher in teachers" :key="teacher.id"
            >
                <td class="px-6 py-4">{{ teacher.name }} {{ teacher.lastname }}</td>
                <td class="px-6 py-4">{{ teacher.email }}</td>
                <td class="px-6 py-4">{{ teacher.phone }}</td>
                <td class="px-6 py-4 uppercase">{{ teacher.professionalLicense }}</td>
                <td class="px-6 py-4">
                    <RouterLink class="bg-green-800 rounded px-2 py-1 hover:bg-green-900" :to="`/teacher/${teacher.id}`">Ver clases</RouterLink>
                </td>
            </tr>
        </tbody>
    </table>
</template>
