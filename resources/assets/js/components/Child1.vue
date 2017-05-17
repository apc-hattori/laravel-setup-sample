<template>
    <div>
        {{ name }}
    </div>
</template>

<script>
    const store = require('../store');

    export default {
        data () {
            return store.child1;
        },
    };
</script>
