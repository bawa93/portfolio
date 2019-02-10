<template>
    <div>
        <ul>
                <img :src="project.image"><br>
                {{ project.title }}<br>
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