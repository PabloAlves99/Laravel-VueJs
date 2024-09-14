<template>
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
                    <th class="min-w-[175px]">
                      <span class="sort asc">
                        <span class="sort-label"> Member </span>
                        <span class="sort-icon"> </span>
                      </span>
                    </th>
                    <th class="min-w-[150px]">
                      <span class="sort">
                        <span class="sort-label"> Email </span>
                        <span class="sort-icon"> </span>
                      </span>
                    </th>
                    <th class="min-w-[125px]">
                      <span class="sort">
                        <span class="sort-label"> Profile </span>
                        <span class="sort-icon"> </span>
                      </span>
                    </th>
                    <th class="w-[80px]"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="user in users.data" :key="user.id">
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
                <div class="pagination" data-datatable-pagination="true"></div>
              </div>
              <div class="pagination">
                <button class="btn">
                  <i
                    class="ki-outline ki-black-left"
                    @click="previousPage"
                    :disabled="!users.prev_page_url"
                  >
                  </i>
                </button>
                <span class="input input-sm"
                  >Página {{ users.current_page }} de
                  {{ users.last_page }}</span
                >
                <button class="btn">
                  <i
                    class="ki-outline ki-black-right"
                    @click="nextPage"
                    :disabled="!users.next_page_url"
                  >
                  </i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";

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
.pagination-list-users {
  display: flex;
  justify-content: center;
  align-items: center;
}

.pagination-list-users-info {
  background-color: #1f212a;
  padding: 5px;
  border-radius: 7px;
  border: solid 1px #ffffff1f;
}

.pagination-list-users-button {
  border: none;
  border-radius: 5px;
  padding: 10px;
  cursor: pointer;
  font-size: 1rem;
  transition: background-color 0.3s;
}

.pagination-list-users-button:hover:not(:disabled) {
  background-color: #5757575b;
}

.pagination-list-users-button:disabled {
  cursor: not-allowed;
}
</style>
