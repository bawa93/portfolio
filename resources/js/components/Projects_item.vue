<template>
    <div>
        <ul>
                <img :src="project.image"><br>
            <router-link :to="{ name: 'project', params: { id: project.id }}">{{ project.title }}</router-link>
            <br>
        </ul>
    </div>
</template>
<script>
export default {
    props: ['project' ],

    mounted() {
        let self = this;
    }
}
</script>