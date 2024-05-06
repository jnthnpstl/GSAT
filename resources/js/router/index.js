import { createRouter, createWebHistory } from "vue-router";
import Main from "../Pages/Main.vue";
import Register  from "../Pages/Register.vue";
import Login from "../Pages/Login.vue";
import Home from "../Pages/Home.vue";
import About from "../Pages/About.vue";
import NotFound from "../Pages/NotFound.vue";
import Dashboard from "../Pages/Dashboard.vue";
import ApplicationForm from "../Pages/ApplicationForm.vue";
import RecommendationForm from "../Pages/RecommendationForm.vue";
import InterviewResult from "../Pages/InterviewResult.vue";
import ForgotPassword from "../Pages/ForgotPassword.vue";
import MyApplication from "../Pages/MyApplication.vue";


const routerHistory = createWebHistory();
const router = createRouter({
    history: routerHistory,
    routes:[
        {
            path: "/:pathMatch(.*)*",
            title: "Route not Found",
            component: NotFound
        },
            {
                path: "/register",
                name: "Register",
                component: Register,
            },
            {
                path: "/main",
                name: "Main",
                component: Main,
            },
            {
                path: "/login",
                name: "Login",
                component: Login,
            },
            {
                path: "/home",
                name: "Home",
                component: Home,
            },
            {
                path: "/about",
                name: "About",
                component: About,
            },
            {
                path: "/dashboard",
                name: "Dashboard",
                component: Dashboard,
            },
            {
                path: "/applicationForm",
                name: "ApplicationForm",
                component: ApplicationForm,
            },
            {
                path: "/recommendationForm",
                name: "RecommendationForm",
                component: RecommendationForm,
            },
            {
                path: "/interviewResult",
                name: "InterviewResult",
                component: InterviewResult,
            },
            {
                path: "/forgotPassword",
                name: "Forgotpassword",
                component: ForgotPassword,
            },
            {
                path: "/myApplication",
                name: "MyApplication",
                component: MyApplication,
            },
    ]
});

export default router;



