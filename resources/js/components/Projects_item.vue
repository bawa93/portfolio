<template>
    <div>
        <div class="projects__item">
                <img :src="project.image" class="projects__item-image"><br>
            <router-link :to="{ name: 'project', params: { id: project.id }}">{{ project.title }}</router-link>
            <div class="projects__item-skills"><strong class="has-text-white">Skills:</strong>
                <span class="project-skills__item" v-for="skill in projectSkills">{{skill}}</span>
            </div>
                <br>
        </div>
    </div>
</template>
<script>
export default {
    props: ['project' ],
    data() {
        return {

        }
    },
    computed: {
      projectSkills() {
          return this.project.skills.map(skill => skill.title);
      }
    },
    mounted() {
        let self = this;
    }
}
</script>

<style lang="scss">
    .projects__item {
        color: #ffffff;
        text-align: center;
        /*background-color: green;*/
        margin: 10px;
    ;
    }
    .projects__item-image {
        max-width: 400px;

        padding: 15px;
        border: 1px solid #fff;
    }
    .project-skills__item {
        text-transform: uppercase;
    }
</style>