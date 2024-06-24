import api from "@/api/api"
import type { Teacher } from "../interfaces/Teacher"
import type { Lesson } from "@/modules/lessons/interfaces/Lesson"

const getTeachers = async (): Promise<Teacher[]> => {
    const data = await api.get('/v1/teachers')
    if (data.status === 200) {
        return data.data.items
    }
    return []
}

const getInfoTeacher = async (id: number): Promise<Teacher | null> => {
    const data = await api.get(`/v1/teachers/${id}`)
    if (data.status === 200) {
        return data.data.item
    }
    return null
}

const getClassesTeacher = async (id: number): Promise<Lesson[]> => {
    const data = await api.get(`/v1/teachers/get_classes/${id}`)
    if (data.status === 200) {
        return data.data.items
    }
    return []
}

export default {
    getTeachers,
    getInfoTeacher,
    getClassesTeacher,
}