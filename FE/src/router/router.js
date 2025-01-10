import { createRouter, createWebHistory } from 'vue-router'
import MacDinh from '@/page/MacDinh.vue'
import DangNhap from '@/page/DangNhap.vue'
import DangKy from '@/page/DangKy.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'mac-dinh',
      component: MacDinh,
    },
    {
      path: '/dang-nhap',
      name: 'dang-nhap',
      component: DangNhap,
    },
    {
      path: '/dang-ky',
      name: 'dang-ky',
      component: DangKy,
    },
  ],
})

export default router
