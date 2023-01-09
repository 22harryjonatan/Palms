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

        <div class="login-header">Hi!</div>
        <div class="login-sub-header">Create a new account</div>

        <form @submit.prevent="register">
            <div class="form-group login-register">
                <label style="padding-bottom: 15px">Full Name</label>
                <input
                    type="text"
                    class="form-control"
                    aria-describedby="emailHelp"
                    placeholder="Enter your email"
                    v-model="user.name"
                    style="margin-bottom: 20px"
                    required
                />
            </div>

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
                    <span class="input-group-text">
                        <i
                            @click="switchVisibility"
                            class="bi password-HideOrShow"
                            style="cursor: pointer"
                            :class="iconClass"
                        ></i>
                    </span>
                </div>
            </div>
            <div class="form-group login-register">
                <label style="padding-bottom: 15px">Confirm Password</label>
                <div class="input-group" style="margin-bottom: 20px">
                    <input
                        :type="passwordFieldType"
                        class="form-control"
                        placeholder="Re enter your password"
                        v-model="user.password_confirmation"
                    />
                    <label class="input-group-text">
                        <i
                            @click="switchVisibility"
                            class="bi password-HideOrShow"
                            style="cursor: pointer"
                            :class="iconClass"
                        ></i>
                    </label>
                </div>
            </div>
            <div class="form-group login-register">
                <label style="padding-bottom: 15px">Plan</label>
            </div>
            <select
                class="form-select"
                aria-label="form-select-lg example"
                style="margin-bottom: 20px"
                v-model="selectedValue"
            >
                <option
                    v-for="(price, index) in allPrices"
                    :value="index"
                    :key="index"
                >
                    {{ price.title }}
                </option>
            </select>
            <div>
                <price></price>
            </div>
            <!-- <price></price> -->

            <div style="padding-top: 50px">
                <button type="submit" class="intro-login">Sign Up</button>
            </div>
            <div class="text-center login-register-footer">
                Already have an account ?
                <router-link :to="{ name: 'Login' }"> Sign in </router-link>
            </div>
        </form>
    </div>
</template>

<script>
import price from "../AdminUser/Price/Price.vue";

export default {
    components: {
        price,
    },
    data() {
        return {
            passwordFieldType: "password",
            iconClass: "bi-eye-slash-fill",
            user: [],
            price: [],
            free: "",
            plan: "",
            selectedValue: "0",
        };
    },
    created() {
        this.$store.dispatch("getPrice");
    },
    computed: {
        allPrices() {
            return this.$store.getters.allPrices;
        },
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
        register() {
            if (this.user.plan === "1") {
                this.free = this.user.plan;
                this.plan = "null";
            } else {
                this.free = "null";
                this.plan = this.user.plan;
            }
            this.$store
                .dispatch("register", {
                    name: this.user.name,
                    email: this.user.email,
                    password: this.user.password,
                    password_confirmation: this.user.password_confirmation,
                    free: this.free,
                    plan: this.plan,
                    role: "Admin",
                })
                .then((res) => {
                    this.$router.push({ name: "Login" });
                });
        },
    },
};
</script>
