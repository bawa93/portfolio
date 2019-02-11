import Projects from './components/Projects'
import Project from './components/Project'

export const routes = [
    {
        path: '/vue', component: Projects, name: 'home'
    },
    {
        path: '/vue/projects', component: Projects, name: 'projects'
    },
    {
        path: '/vue/project/:id', component: Project, name: 'project'
    },
];