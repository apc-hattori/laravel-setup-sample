<template>
    <div>
        <div>
            <input v-model="inputParentMessage" />
            <button @click="updateParentMessage">Update manually</button>
        </div>
        <div>
            <input v-model="inputChildName" /> Update automatically
        </div>
    </div>
</template>

<script>
    const store = require('../store');
    const localStore = {
        inputParentMessage: store.parent.message,
        inputChildName: store.child1.name,
    };

    export default {
        data () {
            return localStore;
        },
        watch: {
            inputChildName (newValue) {
                store.child1.name = newValue;
            },
        },
        methods: {
            updateParentMessage () {
                store.parent.message = localStore.inputParentMessage;
            },
        },
    };
</script>
