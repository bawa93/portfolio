<template>
    <div>
        <img :src="project.image"><br>
            {{ project.title}}<br><br>
        {{ project.info}}
    </div>
</template>

<script>
export default {

    data() {
        return {
          project: {}
        }
    },
    mounted() {
        let project_id = this.$route.params.id;
        let self = this;
        axios.get('/api/projects/' + project_id).then(function(response) {
            self.project = response.data.data;
        })
    }
}
</script>
