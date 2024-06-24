import type { Student } from "@/modules/students/interfaces/Student"
import { defineStore } from "pinia"
import { ref } from "vue"

export const enrrollStudentsStore = defineStore('enrrollStudents', () => {
    // state
    const students = ref<Student[]>([])

    // actions 
    const setStudents = (s: Student[]) => {
        students.value = s;
    }
  
    return {
        students,
        setStudents
    }
  })