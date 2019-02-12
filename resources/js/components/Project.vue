<template>
    <div>
        <div class="page-headline">Project Overview</div>

        <div class="project columns has-white-text">
            <div class="project__visual column has-text-centered">
                <img :src="project.image" class="project__image"><br>

                <div class="project__image-footer">
                    <span>122</span>
                    <a href="#">

                        <span style="color: red;">&#10084;</span>
                    </a>
                </div>

            </div>
            <div class="project__written column">
                <div class="project__written-title has-white-text">
                    {{ project.title}}
                </div>
                <div class="project__written-info">
                    {{ project.info}}
                </div>
                <div class="project__written-skills">
                    <strong class="has-text-white">Skills</strong>:
                    <span class="project__written-skills__items" v-for="pskill in projectSkills">
                        {{ pskill}}
                    </span>
                </div>


            </div>
        </div>
    </div>
</template>

<script>
export default {

    data() {
        return {
          project: {}
        }
    },
    computed: {
      projectSkills() {
          return this.project.skills.map(skill => skill.title);
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
.project__image {
    max-width: 400px;
    padding: 15px;
    border: 1px solid white;
}
.project__written {
    padding:5px;
}
    .project__written-title {
        font-size: 25px;
        text-transform: capitalize;
        margin-bottom: 15px;
        font-weight: bold;
    }
    .project {
        color: white;
    }
    .project__written-skills__items {
        text-transform: uppercase;
    }
    .project__image-footer {
        margin-top: 10px;
        font-size:25px;
    }
</style>
