import type { Lesson } from "@/modules/lessons/interfaces/Lesson"
import type { Teacher } from "@/modules/teachers/interfaces/Teacher"
import { defineStore } from "pinia"
import { computed, ref } from "vue"

export const useTeacherStore = defineStore('teachers', () => {
    // state
    const teachers = ref<Teacher[]>([])
    const teacher = ref<Teacher>()

    // getters
    const fullName = computed(() => `${teacher?.value?.name} ${teacher?.value?.lastname}`)

    // actions 
    const setTeachers = (t: Teacher[]) => {
        teachers.value = t;
    }

    const setTeacher = (t: Teacher) => {
        teacher.value = t
    }

    const setLessonsTeacher = (l: Lesson[]) => {
        teacher.value.lessons = l
    }
  
    return {
        teachers,
        teacher,
        fullName,
        setTeachers,
        setTeacher,
        setLessonsTeacher
    }
  })