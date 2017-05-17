<template>
    <div>
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        <span class="glyphicon-class">Name: {{name}} Age: {{age}}</span>
        <button @click="remove"><i class="glyphicon glyphicon-trash"></i></button>
    </div>
</template>

<script>
    export default {
        props: {
            name: {
                type: String,
                default: '<名無し>',
            },
            age: {
                type: [String, Number],
                default: 'ひみつ',
            },
        },
        methods: {
            remove () {
                this.$emit('remove');
            },
        },
    };
</script>
