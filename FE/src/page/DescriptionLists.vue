<template>
  <div>
    <div class="px-4 sm:px-0">
      <h3 class="text-base/7 font-semibold text-gray-900">
        Applicant Information
      </h3>
      <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">
        Personal details and application.
      </p>
    </div>
    <div class="mt-6 border-t border-gray-100">
      <dl class="divide-y divide-gray-100">
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm/6 font-medium text-gray-900">Name</dt>
          <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
            {{ products.name }}
          </dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm/6 font-medium text-gray-900">Price</dt>
          <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
            {{ products.price }}
          </dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm/6 font-medium text-gray-900">Description</dt>
          <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
            {{ products.description }}
          </dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm/6 font-medium text-gray-900">Type</dt>
          <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
            {{ products.type }}
          </dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm/6 font-medium text-gray-900">Analysis</dt>
          <dd
            class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"
            v-if="products.type == 'Lọ'"
          >
            {{ products.quantity }} viên/{{ products.type }}
          </dd>
          <dd
            class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0"
            v-else-if="products.type == 'Ống'"
          >
            {{ products.volum }} ml/{{ products.type }}
          </dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm/6 font-medium text-gray-900">Attachments</dt>
          <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
            <ul
              role="list"
              class="divide-y divide-gray-100 rounded-md border border-gray-200"
            >
              <li
                class="flex items-center justify-between py-4 pl-4 pr-5 text-sm/6"
              >
                <div class="flex w-0 flex-1 items-center">
                  <PaperClipIcon
                    class="size-5 shrink-0 text-gray-400"
                    aria-hidden="true"
                  />
                  <div class="ml-4 flex min-w-0 flex-1 gap-2">
                    <span class="truncate font-medium"
                      >resume_back_end_developer.pdf</span
                    >
                    <span class="shrink-0 text-gray-400">2.4mb</span>
                  </div>
                </div>
                <div class="ml-4 shrink-0">
                  <a
                    href="#"
                    class="font-medium text-indigo-600 hover:text-indigo-500"
                    >Download</a
                  >
                </div>
              </li>
              <li
                class="flex items-center justify-between py-4 pl-4 pr-5 text-sm/6"
              >
                <div class="flex w-0 flex-1 items-center">
                  <PaperClipIcon
                    class="size-5 shrink-0 text-gray-400"
                    aria-hidden="true"
                  />
                  <div class="ml-4 flex min-w-0 flex-1 gap-2">
                    <span class="truncate font-medium"
                      >coverletter_back_end_developer.pdf</span
                    >
                    <span class="shrink-0 text-gray-400">4.5mb</span>
                  </div>
                </div>
                <div class="ml-4 shrink-0">
                  <a
                    href="#"
                    class="font-medium text-indigo-600 hover:text-indigo-500"
                    >Download</a
                  >
                </div>
              </li>
            </ul>
          </dd>
        </div>
      </dl>
    </div>
  </div>
</template>

<script setup>
import { PaperClipIcon } from "@heroicons/vue/20/solid";
import axios from "axios";
import { ref, onMounted } from "vue";
import { useRoute } from "vue-router";

const route = useRoute();
const id = route.params.id;

const products = ref("");

const fetchData = async () => {
  const response = await axios.post(
    `${import.meta.env.VITE_APP_URL_API}/dataProducts/${id}`
  );
  products.value = response.data.data;
};
onMounted(() => fetchData());
</script>
