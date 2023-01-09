<template>
    <div
        class="fixed-bottom container-fluid text-center bordertop-color-grey shadow"
    >
        <div class="row justify-content-center container_flex">
            <!-- Dashboard -->
            <div class="col nav-icons">
                <router-link :to="{ name: 'posts' }">
                    <!-- <i class="bi bi-columns-gap"></i> -->
                    <i class="bi bi-grid-fill"></i>
                </router-link>
            </div>
            <!-- Statistic -->
            <div class="col nav-icons">
                <router-link :to="{ name: 'Logout' }">
                    <!-- <i class="bi bi-bar-chart"></i> -->
                    <i class="bi bi-bar-chart-fill"></i>
                </router-link>
            </div>
            <!-- Activity -->
            <div class="col nav-icons">
                <router-link :to="{ name: 'Logout' }">
                    <!-- <i class="bi bi-clock-history"></i> -->
                    <i class="bi bi-clipboard-check-fill"></i>
                </router-link>
            </div>
            <!-- Account -->
            <div class="col nav-icons">
                <router-link :to="{ name: 'Logout' }">
                    <!-- <i class="bi bi-person"></i> -->
                    <i class="bi bi-person-fill"></i>
                </router-link>
            </div>
        </div>
    </div>

    <router-view></router-view>
</template>

<script>
export default {};
</script>

<style></style>
