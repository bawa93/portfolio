<template>
    <div>
        <div class="page-headline">Project Overview</div>

        <div class="project columns">
            <div class="project__visual column">
                <img :src="project.image">
            </div>
            <div class="project__written column">
                {{ project.title}}<br><br>
                {{ project.info}}
            </div>
        </div>
        <br>

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
<style>

</style>
