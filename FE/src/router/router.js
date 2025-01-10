import { createRouter, createWebHistory } from 'vue-router'
import DefaultPage from '@/page/DefaultPage.vue'
import Login from '@/page/LoginPage.vue'
import RegisterPage from '@/page/RegisterPage.vue'
import DescriptionLists from '@/page/DescriptionLists.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'default-page',
      component: DefaultPage,
    },
    {
      path: '/login',
      name: 'login',
      component: Login,
    },
    {
      path: '/register',
      name: 'register',
      component: RegisterPage,
    },
    {
      path: '/description-lists/:id',
      name: 'description-lists',
      component: DescriptionLists,
    },
  ],
})

export default router
