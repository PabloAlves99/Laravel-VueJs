<template>
    <div>
        <!-- Container -->
        <div class="container-fixed">
        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
        <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-semibold leading-none text-gray-900">
            Registered Users
        </h1>
        <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
            List of users registered in the database with main contact information
        </div>
        </div>
        <div class="flex items-center gap-2.5">
        <a class="btn btn-sm btn-light" href="#">
            View Profile
        </a>
        </div>
        </div>
        </div>
        <!-- End of Container -->
        <!-- Container: list of users-->
        <div class="container-fixed list-users">

            <h1 class="title-list-users">User List</h1>
            <div class="grid gap-5 lg:gap-7.5">

                <div class="container-user-table-list-users">
                    <table class="user-table-list-users">
                        <thead class = "thead-list-users">
                            <tr>
                                <th class = "th-list-users">Login</th>
                                <th class = "th-list-users">Name</th>
                                <th class = "th-list-users">Phone</th>
                                <th class = "th-list-users">Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="user in users.data" :key="user.id">
                                <td>{{ user.login }}</td>
                                <td>{{ user.name }}</td>
                                <td>{{ user.phone }}</td>
                                <td>{{ user.profile }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            <div class="pagination-list-users">
                <button @click="previousPage" :disabled="!users.prev_page_url" class="pagination-list-users-button">Anterior</button>
                <button @click="nextPage" :disabled="!users.next_page_url" class="pagination-list-users-button">Próximo</button>
                <span class="pagination-list-users-info">Página {{ users.current_page }} de {{ users.last_page }}</span>
            </div>

        </div>
    </div>
    </div>
</template>

<script setup>
const props = defineProps({
    users: Object,
});

const nextPage = () => {
    if (props.users.next_page_url) {
        window.location.href = props.users.next_page_url;
    }
};

const previousPage = () => {
    if (props.users.prev_page_url) {
        window.location.href = props.users.prev_page_url;
    }
};
</script>

<style scoped>
.list-users, .user-page-title{
    text-align: center;
}
.title-list-users {
    font-size: 2rem;
    margin-bottom: 15px;
    font-weight: bold;
}

.user-table-list-users {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.user-table-list-users th{
    font-size: 1.4rem;
}

.user-table-list-users th, .user-table-list-users td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

.pagination-list-users {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.pagination-list-users-button {
    background-color: #A3C9D9;
    color: #0D0E12;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s;
}

.pagination-list-users-button:hover:not(:disabled) {
    background-color: #A3C9D9;
}

.pagination-list-users-button:disabled {
    background-color: #ddd;
    cursor: not-allowed;
}

.pagination-list-users-info {
    font-size: 1rem;
}

</style>
