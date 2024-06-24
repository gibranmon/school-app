import type { Lesson } from "@/modules/lessons/interfaces/Lesson";

export interface Teacher {
    id?: number,
    name: string,
    lastname: string,
    email: string,
    phone: string,
    professionalLicense: string,
    startDate: string,
    lessons?: Lesson[]
}