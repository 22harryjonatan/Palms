<template>
    <div class="container login">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="30"
            fill="currentColor"
            class="bi bi-arrow-left"
            viewBox="0 0 16 16"
            color="#112d4e"
            onclick="history.back()"
        >
            <path
                fill-rule="evenodd"
                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"
            />
        </svg>

        <div class="login-header">Welcome!</div>
        <div class="login-sub-header">Sign in to continue</div>

        <!-- Froms -->
        <form @submit.prevent="login">
            <div class="form-group login-register">
                <label style="padding-bottom: 15px">Email Address</label>
                <input
                    type="email"
                    class="form-control"
                    aria-describedby="emailHelp"
                    placeholder="Enter your email"
                    v-model="user.email"
                    style="margin-bottom: 20px"
                    required
                />
            </div>
            <div class="form-group login-register">
                <label style="padding-bottom: 15px">Password</label>
                <div class="input-group" style="margin-bottom: 20px">
                    <input
                        :type="passwordFieldType"
                        class="form-control"
                        placeholder="Enter your password"
                        v-model="user.password"
                    />
                    <span class="input-group-text" id="basic-addon1">
                        <i
                            @click="switchVisibility"
                            class="bi password-HideOrShow"
                            style="cursor: pointer"
                            :class="iconClass"
                        ></i>
                    </span>
                </div>
            </div>
            <router-link :to="{ name: 'Register' }">
                Forgot Password ?
            </router-link>

            <div style="padding-top: 50px">
                <button type="submit" class="intro-login">Login</button>
            </div>
        </form>
        <div class="fixed-bottom text-center login-register-footer">
            Don't have an account ?
            <router-link :to="{ name: 'Register' }"> Sign up </router-link>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            passwordFieldType: "password",
            iconClass: "bi-eye-slash-fill",
            user: [],
        };
    },
    methods: {
        switchVisibility() {
            this.iconClass =
                this.iconClass === "bi-eye-slash-fill"
                    ? "bi-eye-fill"
                    : "bi-eye-slash-fill";
            this.passwordFieldType =
                this.passwordFieldType === "password" ? "text" : "password";
        },
        login() {
            this.$store
                .dispatch("retrieveToken", {
                    email: this.user.email,
                    password: this.user.password,
                })
                .then((res) => {
                    this.$router.push({ name: "Dashboard" });
                });
        },
    },
};
</script>

<style></style>
