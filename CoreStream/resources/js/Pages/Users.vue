<script>
export default {
    props: {
        users: Object,
    },
    methods: {
        // Métodos para navegação entre páginas
        nextPage() {
            if (this.users.next_page_url) {
                window.location.href = this.users.next_page_url;
            }
        },
        previousPage() {
            if (this.users.prev_page_url) {
                window.location.href = this.users.prev_page_url;
            }
        },
    },
};
</script>

<template>
    <div class="container-all">
    <Head title="Registered Users" />

    <h1 class="title">Lista de Usuários</h1>
    <div class="container">

        <table class="user-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Perfil</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users.data" :key="user.id">
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.phone }}</td>
                    <td>{{ user.profile }}</td>
                </tr>
            </tbody>
        </table>

        <div class="pagination">
            <button @click="previousPage" :disabled="!users.prev_page_url" class="pagination-button">Anterior</button>
            <button @click="nextPage" :disabled="!users.next_page_url" class="pagination-button">Próximo</button>
            <span class="pagination-info">Página {{ users.current_page }} de {{ users.last_page }}</span>
        </div>

    </div>
    </div>
</template>

<style scoped>
.container-all {
    background-color: #171923;
    height: 100vh;
    padding: 30px;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.title {
    font-size: 2.5rem;
    margin-bottom: 20px;
    text-align: center;
    color: #F9322C;
    font-weight: bold;
}

.user-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.user-table th, .user-table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.user-table th {
    background-color: #f4f4f4;
    font-weight: bold;
}

.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.pagination-button {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s;
}

.pagination-button:hover:not(:disabled) {
    background-color: #0056b3;
}

.pagination-button:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

.pagination-info {
    font-size: 1rem;
}
</style>
