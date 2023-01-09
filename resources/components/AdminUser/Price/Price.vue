<template>
    <div>
        <!-- Button trigger modal -->
        <a
            data-bs-toggle="modal"
            data-bs-target="#staticBackdrop"
            style="color: #3282b8; text-decoration: underline"
        >
            Read More
        </a>

        <!-- Modal -->
        <div
            class="modal fade"
            id="staticBackdrop"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-dialog-scrollable modal-dialog-centered"
            >
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">
                            Plan
                        </h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <div
                            v-for="(price, index) in allPrices"
                            :key="index"
                            style="padding-bottom: 30px"
                        >
                            <div class="mH-prices">{{ price.title }}</div>

                            <div class="mT-prices" style="padding-bottom: 10px">
                                {{ price.content }}
                            </div>

                            <div class="mT-prices">Rp. {{ price.price }},-</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="intro-login"
                            style="width: 20%"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    created() {
        this.$store.dispatch("getPrice");
    },
    computed: {
        allPrices() {
            return this.$store.getters.allPrices;
        },
    },
};
</script>

<style></style>
