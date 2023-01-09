import { createRouter, createWebHistory } from "vue-router";
import Navbar from "../components/AdminUser/Navbar.vue";
import Create from "../components/AdminUser/Create.vue";
import Home from "../components/AdminUser/Admin/Home.vue";
import Edit from "../components/AdminUser/Edit.vue";
import Register from "../components/auth/Register.vue";
import Login from "../components/auth/Login.vue";
import Logout from "../components/auth/Logout.vue";
import Intro from "../components/auth/Intro.vue";
import ForgotPassword from "../components/auth/ForgotPassword.vue";
import store from "../store/index.js";

const routes = [
    {
        path: "/",
        name: "Dashboard",
        redirect: "/home",
        component: Navbar,
        meta: { requiresAuth: true },
        children: [
            { path: "/home/", name: "posts", component: Home },
            {
                path: "/posts/create",
                name: "posts.create",
                component: Create,
            },
            {
                path: "/posts/:id",
                name: "posts.edit",
                component: Edit,
            },
        ],
    },
    {
        path: "/login",
        name: "Login",
        component: Login,
        meta: {
            requiresVisitor: true,
        },
    },
    {
        path: "/register",
        name: "Register",
        component: Register,
        meta: {
            requiresVisitor: true,
        },
    },
    {
        path: "/intro",
        name: "Intro",
        component: Intro,
        meta: {
            requiresVisitor: true,
        },
    },
    {
        path: "/forgotpassword",
        name: "ForgotPassword",
        component: ForgotPassword,
    },
    {
        path: "/logout",
        name: "Logout",
        component: Logout,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !store.state.token) {
        next({ name: "Intro" });
    } else if (store.state.token && to.meta.requiresVisitor) {
        next({ name: "Dashboard" });
    } else {
        next();
    }
});

export default router;
