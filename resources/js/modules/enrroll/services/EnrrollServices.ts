import api from "@/api/api"
import type { Student } from "@/modules/students/interfaces/Student"

const getEnrrolledStudents = async (id: number): Promise<Student[]> => {
    const data = await api.get(`/v1/enrroll/${id}`)
    if (data.status === 200) {
        return data.data.items
    }
    return []
}

export default {
    getEnrrolledStudents,
}
