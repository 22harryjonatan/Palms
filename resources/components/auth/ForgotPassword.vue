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

        <div class="login-header">Forgot Password?</div>
        <div class="login-sub-header">
            Do not worry! We will help you recover your password.
        </div>

        <!-- Froms -->
        <form @submit.prevent="forgotpassword">
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

            <div style="padding-top: 50px">
                <button type="submit" class="intro-login">
                    Reset Password
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: [],
        };
    },
    methods: {
        forgotpassword() {
            // this.$store
            //     .dispatch("retrieveToken", {
            //         email: this.user.email,
            //         password: this.user.password,
            //     })
            //     .then((res) => {
            //         this.$router.push({ name: "Dashboard" });
            //     });
        },
    },
};
</script>

<style></style>
