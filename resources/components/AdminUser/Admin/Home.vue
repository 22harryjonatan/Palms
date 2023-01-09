<template>
    <div class="container-fluid pt-4 dashboard">
        <div class="mb-3" style="font-size: 20px; font-weight: 700">
            <b>Dasboard</b>
        </div>
        <div class="card mb-3 profile-pic shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-8 d-flex align-items-center">
                        <div class="row">
                            <div class="col-12 mb-1">Hi, name account</div>
                            <div class="col-12 mb-1">Role :</div>
                            <div class="col-12">Exp Date :</div>
                        </div>
                    </div>
                    <div
                        class="col-4 d-flex align-items-center justify-content-end"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="80%"
                            height="auto"
                            fill="currentColor"
                            class="bi bi-person-circle"
                            viewBox="0 0 16 16"
                            color="#dbe2ef"
                        >
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path
                                fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"
                            />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-3 pr">
                <div class="shadow card">
                    <div class="card-body">
                        <div class="row">
                            <div
                                class="col-8 d-flex card-head align-items-center"
                            >
                                Trees
                            </div>
                            <div
                                class="col-4 d-flex align-items-center justify-content-end"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="currentColor"
                                    class="bi bi-tree-fill"
                                    viewBox="0 0 16 16"
                                    style="color: #54b435"
                                >
                                    <path
                                        d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5z"
                                    />
                                </svg>
                            </div>
                            <div class="col-12 pb-4"></div>
                            <div class="col-12">Total data</div>
                            <div class="col-12 card-foot">Trees</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3 pl">
                <div class="shadow card">
                    <div class="card-body">
                        <div class="row">
                            <div
                                class="col-8 d-flex card-head align-items-center"
                            >
                                Harvest
                            </div>
                            <div
                                class="col-4 d-flex align-items-center justify-content-end"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="currentColor"
                                    class="bi bi-clipboard2-data-fill"
                                    viewBox="0 0 16 16"
                                    style="color: #ffb100"
                                >
                                    <path
                                        d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"
                                    />
                                    <path
                                        d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0V9a1 1 0 0 1 1-1Z"
                                    />
                                </svg>
                            </div>
                            <div class="col-12 pb-4"></div>
                            <div class="col-12">Total data</div>
                            <div class="col-12 card-foot">Ton</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3 pr">
                <div class="shadow card">
                    <div class="card-body">
                        <div class="row">
                            <div
                                class="col-8 d-flex card-head align-items-center"
                            >
                                Block
                            </div>
                            <div
                                class="col-4 d-flex align-items-center justify-content-end"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    style="color: #3f0071"
                                    fill="currentColor"
                                    class="bi bi-grid-3x3"
                                    viewBox="0 0 16 16"
                                >
                                    <path
                                        d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13zM1.5 1a.5.5 0 0 0-.5.5V5h4V1H1.5zM5 6H1v4h4V6zm1 4h4V6H6v4zm-1 1H1v3.5a.5.5 0 0 0 .5.5H5v-4zm1 0v4h4v-4H6zm5 0v4h3.5a.5.5 0 0 0 .5-.5V11h-4zm0-1h4V6h-4v4zm0-5h4V1.5a.5.5 0 0 0-.5-.5H11v4zm-1 0V1H6v4h4z"
                                    />
                                </svg>
                            </div>
                            <div class="col-12 pb-4"></div>
                            <div class="col-12">Total data</div>
                            <div class="col-12 card-foot">Blocks</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3 pl">
                <div class="shadow card">
                    <div class="card-body">
                        <div class="row">
                            <div
                                class="col-8 d-flex card-head align-items-center"
                            >
                                Disease
                            </div>
                            <div
                                class="col-4 d-flex align-items-center justify-content-end"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="currentColor"
                                    class="bi bi-virus2"
                                    viewBox="0 0 16 16"
                                    style="color: #dc0000"
                                >
                                    <path
                                        d="M8 0a1 1 0 0 0-1 1v1.143c0 .557-.407 1.025-.921 1.24-.514.214-1.12.162-1.513-.231l-.809-.809a1 1 0 1 0-1.414 1.414l.809.809c.394.394.445.999.23 1.513C3.169 6.593 2.7 7 2.144 7H1a1 1 0 0 0 0 2h1.143c.557 0 1.025.407 1.24.921.214.514.163 1.12-.231 1.513l-.809.809a1 1 0 0 0 1.414 1.414l.809-.809c.394-.394.999-.445 1.513-.23.514.214.921.682.921 1.24V15a1 1 0 1 0 2 0v-1.143c0-.557.407-1.025.921-1.24.514-.214 1.12-.162 1.513.231l.809.809a1 1 0 0 0 1.414-1.414l-.809-.809c-.393-.394-.445-.999-.23-1.513.214-.514.682-.921 1.24-.921H15a1 1 0 1 0 0-2h-1.143c-.557 0-1.025-.407-1.24-.921-.214-.514-.162-1.12.231-1.513l.809-.809a1 1 0 0 0-1.414-1.414l-.809.809c-.394.393-.999.445-1.513.23-.514-.214-.92-.682-.92-1.24V1a1 1 0 0 0-1-1Zm2 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM7 7a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm1 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm4-4a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"
                                    />
                                </svg>
                            </div>
                            <div class="col-12 pb-4"></div>
                            <div class="col-12">Total data</div>
                            <div class="col-12 card-foot">Disesases</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3 pr">
                <div class="shadow card">
                    <div class="card-body">
                        <div class="row">
                            <div
                                class="col-8 d-flex card-head align-items-center"
                            >
                                Fertilizer
                            </div>
                            <div
                                class="col-4 d-flex align-items-center justify-content-end"
                            >
                                <i
                                    class="fa-solid fa-cubes-stacked"
                                    style="font-size: 24px; color: #c58940"
                                ></i>
                            </div>
                            <div class="col-12 pb-4"></div>
                            <div class="col-12">Total data</div>
                            <div class="col-12 card-foot">Ton</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3 pl">
                <div class="shadow card">
                    <div class="card-body">
                        <div class="row">
                            <div
                                class="col-8 d-flex card-head align-items-center"
                            >
                                Workers
                            </div>
                            <div
                                class="col-4 d-flex align-items-center justify-content-end"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="currentColor"
                                    class="bi bi-people-fill"
                                    viewBox="0 0 16 16"
                                    style="color: #3f72af"
                                >
                                    <path
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"
                                    />
                                </svg>
                            </div>
                            <div class="col-12 pb-4"></div>
                            <div class="col-12">Total data</div>
                            <div class="col-12 card-foot">Ton</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style></style>
