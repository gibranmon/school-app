import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import("../views/HomeView.vue")
    },
    {
        path: '/teacher/:id',
        name: 'teacher_detail',
        component: () => import("../modules/teachers/views/TeacherDetail.vue")
    },
    {
        path: '/teacher/lesson/:id',
        name: 'enrrolled_students',
        component: () => import('../modules/enrroll/views/EnrrollStudents.vue')
    }
];

export default createRouter({
    history: createWebHistory(),
    routes,
});