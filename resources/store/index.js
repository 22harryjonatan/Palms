import axios from "axios";
import { ssrContextKey } from "vue";
import { createStore } from "vuex";

axios.defaults.baseURL = "http://localhost/api/";

const store = createStore({
    state: {
        token: localStorage.getItem("access_token") || null,
        users: {
            data: [],
        },
        posts: [],
        prices: [],
    },
    getters: {
        loggedIn(state) {
            return state.token !== null;
        },
        allData(state) {
            //   if (state.filter == "all") {
            //     return state.todos;
            //   } else if (state.filter == "active") {
            //     return state.todos.filter((todo) => !todo.completed);
            //   } else if (state.filter == "completed") {
            //     return state.todos.filter((todo) => todo.completed);
            //   }
            return state.posts.data;
        },
        allPrices(state) {
            return state.prices.data;
        },
    },
    actions: {
        register({ commit }, data) {
            return new Promise((resolve, reject) => {
                axios
                    .post("/register", {
                        name: data.name,
                        email: data.email,
                        password: data.password,
                        password_confirmation: data.password_confirmation,
                        free: data.free,
                        plan: data.plan,
                        role: data.role,
                    })
                    .then((res) => {
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        destroyToken(context) {
            axios.defaults.headers.common["Authorization"] =
                "Bearer " + context.state.token;

            if (context.getters.loggedIn) {
                return new Promise((resolve, reject) => {
                    axios
                        .post("/logout")
                        .then((res) => {
                            localStorage.removeItem("access_token");
                            context.commit("destroyToken");
                            resolve(res);
                        })
                        .catch((err) => {
                            localStorage.removeItem("access_token");
                            context.commit("destroyToken");
                            reject(err);
                        });
                });
            }
        },
        retrieveToken({ commit }, user) {
            return new Promise((resolve, reject) => {
                axios
                    .post("/login", {
                        email: user.email,
                        password: user.password,
                    })
                    .then((res) => {
                        const token = res.data.access_token;
                        localStorage.setItem("access_token", token);
                        commit("retrieveToken", token);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        // getUser({ commit }) {
        //   axios
        //     .get("/users")
        //     .then((res) => {
        //       commit("setUser", res.data);
        //     })
        //     .catch((err) => {
        //       reject(err);
        //     });
        // },
        create(context, data) {
            axios.defaults.headers.common["Authorization"] =
                "Bearer " + context.state.token;

            return new Promise((resolve, reject) => {
                axios
                    .post("/posts", {
                        title: data.title,
                        content: data.content,
                    })
                    .then((data) => {
                        resolve(data);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        getData(context) {
            axios.defaults.headers.common["Authorization"] =
                "Bearer " + context.state.token;
            axios
                .get("/posts")
                .then((res) => {
                    context.commit("getData", res.data);
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        getDetailsdata(context, id) {
            axios.defaults.headers.common["Authorization"] =
                "Bearer " + context.state.token;

            return new Promise((resolve, reject) => {
                axios
                    .get("/posts/" + id)
                    .then((res) => {
                        resolve(res);
                    })
                    .catch((error) => {
                        reject(err);
                    });
            });
        },
        updateData(context, data) {
            axios.defaults.headers.common["Authorization"] =
                "Bearer " + context.state.token;

            return new Promise((resolve, reject) => {
                axios
                    .put("/posts/" + data.id, {
                        title: data.title,
                        content: data.content,
                    })
                    .then((res) => {
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        deleteData(context, id) {
            axios
                .delete("/posts/" + id)
                .then(() => {
                    context.commit("deleteData", id);
                })
                .catch((err) => {
                    reject(err);
                });
        },
        getPrice(context) {
            axios
                .get("/prices")
                .then((res) => {
                    context.commit("getPrice", res.data);
                    // console.log(res.data.data);
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    mutations: {
        destroyToken: (state) => {
            state.token = null;
        },
        retrieveToken: (state, token) => {
            state.token = token;
        },
        setUser: (state, data) => {
            state.users.data = data;
        },
        getPrice: (state, data) => {
            state.prices = data;
        },
        getData: (state, data) => {
            state.posts = data;
        },
        deleteData: (state, id) => {
            const index = state.posts.data.findIndex((item) => item.id == id);
            state.posts.data.splice(index, 1);
        },
    },
});

export default store;
