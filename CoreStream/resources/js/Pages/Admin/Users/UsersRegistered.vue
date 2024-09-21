<template>
  <MetronicLayout>
    <div class="container-fixed">
      <div class="grid">
        <Head title="Users Registration" />
        <div class="card card-grid min-w-full">
          <div class="card-header py-5 flex-wrap">
            <h3 class="card-title">Team Members</h3>
            <div class="flex gap-6">
              <div class="relative">
                <i
                  class="ki-outline ki-magnifier leading-none text-md text-gray-500 absolute top-1/2 left-0 -translate-y-1/2 ml-3"
                >
                </i>
                <input
                  class="input input-sm pl-8"
                  placeholder="Search Members"
                  type="text"
                  v-model="searchTerm"
                  @input="filteredUsers"
                />
              </div>
            </div>
          </div>
          <div class="card-body">
            <div data-datatable="true" data-datatable-page-size="5">
              <div class="scrollable-x-auto">
                <table
                  class="table table-auto table-border"
                  data-datatable-table="true"
                  id="grid_table"
                >
                  <thead>
                    <tr>
                      <th class="w-[60px]">
                        <input
                          class="checkbox checkbox-sm"
                          data-datatable-check="true"
                          type="checkbox"
                        />
                      </th>
                      <th class="min-w-[150px]">
                        <span class="sort asc">
                          <span class="sort-label"> Membro </span>
                          <span class="sort-icon"> </span>
                        </span>
                      </th>
                      <th class="min-w-[150px]">
                        <span class="sort">
                          <span class="sort-label"> Email </span>
                          <span class="sort-icon"> </span>
                        </span>
                      </th>
                      <th class="min-w-[80px]">
                        <span class="sort">
                          <span class="sort-label"> Perfil </span>
                          <span class="sort-icon"> </span>
                        </span>
                      </th>
                      <th class="min-w-[80px]">
                        <span class="sort desc">
                          <span class="sort-label"> Data de criação </span>
                          <span class="sort-icon"> </span>
                        </span>
                      </th>
                      <th class="w-[80px]"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in filteredUsers" :key="user.id">
                      <td>
                        <input
                          class="checkbox checkbox-sm"
                          data-datatable-row-check="true"
                          type="checkbox"
                          value="1"
                        />
                      </td>
                      <td>
                        <div class="flex items-center gap-2.5">
                          <img
                            alt="User Avatar"
                            class="h-9 rounded-full"
                            src="/assets/media/avatars/IMG_3346.png"
                          />
                          <div class="flex flex-col gap-0.5">
                            <a
                              class="leading-none font-semibold text-sm text-gray-900 hover:text-primary"
                              href="#"
                            >
                              {{ user.name }}
                            </a>
                            <span class="text-2sm text-gray-600">
                              {{ user.login }}
                            </span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="flex items-center gap-1.5">
                          <span class="leading-none text-gray-700">
                            {{ user.email }}
                          </span>
                        </div>
                      </td>
                      <td>
                        <span
                          class="badge badge-sm badge-outline"
                          :class="getProfileClass(user.profile)"
                        >
                          {{ user.profile }}
                        </span>
                      </td>
                      <td>
                        <span class="badge badge-sm badge-outline">
                          {{ formatDate(user.created_at) }}
                        </span>
                      </td>
                      <td>
                        <a class="btn btn-sm btn-light" href="#"> Edit </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div
                class="card-footer justify-center md:justify-between flex-col md:flex-row gap-3 text-gray-600 text-2sm font-medium"
              >
                <div class="flex items-center gap-2">
                  Show
                  <select
                    class="select select-sm w-16"
                    data-datatable-size="true"
                    name="perpage"
                  >
                    <option value="10">10</option>
                  </select>
                  per page
                </div>
                <div class="flex items-center gap-4">
                  <span data-datatable-info="true"> </span>
                  <div
                    class="pagination"
                    data-datatable-pagination="true"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </MetronicLayout>
</template>

<script setup>
import MetronicLayout from "@/Layouts/MetronicLayout.vue";
import { Head } from "@inertiajs/vue3";
import dayjs from "dayjs";
import { ref, computed } from "vue";

const getProfileClass = (profile) => {
  switch (profile) {
    case "Adm":
      return " badge-primary";
    case "Advogado":
      return " badge-success";
    case "Atendente":
      return " badge-warning";
    default:
      return "badge-primary";
  }
};

const props = defineProps({
  users: Object,
});

const formatDate = (date) => {
  return dayjs(date).format("DD/MM/YYYY");
};

const searchTerm = ref("");

const filteredUsers = computed(() => {
  return props.users.filter(user =>
    user.name.toLowerCase().includes(searchTerm.value.toLowerCase())
  );
});
</script>
