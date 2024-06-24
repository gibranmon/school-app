import { onMounted, toRef, toRefs } from "vue"
import { useRoute } from "vue-router"
import TeacherServices from "../services/TeacherServices"
import { useTeacherStore } from "@/store/teacherStore"

const useTeacher = () => {
    const route = useRoute()
    const store = useTeacherStore()

    const { teacher, fullName } = toRefs(store)

    const fetchTeacher = async () => {
        const id = route.params.id
        const data = await TeacherServices.getInfoTeacher(parseInt(id as string))
        store.setTeacher(data)
    }

    const fetchLessonTeacher = async () => {
        const id = route.params.id
        const data = await TeacherServices.getClassesTeacher(parseInt(id as string))
        console.log(data)
        store.setLessonsTeacher(data)
    }

    onMounted(async () => {
        await fetchTeacher()
        await fetchLessonTeacher()
    })

    return {
        teacher,
        fullName
    }
}

export default useTeacher
