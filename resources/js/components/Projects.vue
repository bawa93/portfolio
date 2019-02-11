<template>
    <div>
        zcvzdfgsd
        <ul>
            <projects_item v-for="(project,index) in projects" :key="index" :project="project"></projects_item>
        </ul>
    </div>
</template>
<script>
import Projects_item from './Projects_item'
export default {
    components: { projects_item: Projects_item},
    data(){
        return {
            projects: []
        }
    },
    mounted() {
        let self = this;
        axios.get('/api/projects').then(function(response) {
            self.projects = response.data.data;
        })
    }

}
</script>