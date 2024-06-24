import { useTeacherStore } from "@/store/teacherStore"
import { onMounted, toRefs } from "vue"
import TeacherServices from "../services/TeacherServices"

const useTeachers = () => {
    const store = useTeacherStore()

    const { teachers } = toRefs(store)

    const fetchTeachers = async () => {
        const data = await TeacherServices.getTeachers()
        store.setTeachers(data)
    }

    onMounted(async () => {
        await fetchTeachers()
    })

    return {
        teachers,
        fetchTeachers,
    }
}

export default useTeachers
