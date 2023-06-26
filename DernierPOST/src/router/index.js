import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ShowSinglePost from '../views/ShowSinglePost.vue'
import ModifyPage from '../views/ModifyPage.vue'
import testView from '../views/testView.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/posts/:id',
      name: 'onePost',
      component: ShowSinglePost,
    },
    {
      path: '/modify/:id',
      name: 'Modify',
      component: ModifyPage,
    },
    {
      path: '/test',
      name: 'test',
      component: testView,
    }
  ]
})

export default router
