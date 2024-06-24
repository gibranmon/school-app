import type { Student } from "@/modules/students/interfaces/Student"
import { enrrollStudentsStore } from "@/store/enrrollStudentsStore"
import { onMounted, ref, toRefs } from "vue"
import EnrrollServices from "../services/EnrrollServices"
import { useRoute } from "vue-router"

const useEnrroll = () => {
    const route = useRoute()
    const store = enrrollStudentsStore()

    const { students } = toRefs(store)

    const fetchEnrrolledStudents = async () => {
        const id = route.params.id as string
        const data = await EnrrollServices.getEnrrolledStudents(parseInt(id))
        store.setStudents(data)
    }

    onMounted(async () => {
        await fetchEnrrolledStudents()
    })

    return {
        students,
    }
}

export default useEnrroll
