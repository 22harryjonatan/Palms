<template>
    <div class="container-fluid intro">
        <div class="intro-text text-center">Hello !</div>
        <div class="text-center intro-text2">
            We are here to help you manage your Palms oil farm seamlessly &
            effectively
        </div>
        <div class="text-center">
            <img src="/images/Hello2.png" alt="Hello" class="intro-pp" />
        </div>
        <div class="text-center mb-4">
            <router-link :to="{ name: 'Login' }">
                <button type="button" class="intro-login">Login</button>
            </router-link>
        </div>
        <div class="text-center">
            <router-link :to="{ name: 'Register' }">
                <button type="button" class="intro-signup">
                    Create an account
                </button>
            </router-link>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style></style>
