<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        {{ message }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    const store = require('../store');

    export default {
        data () {
            return store.example;
        },
        mounted () {
            console.log('Component mounted.');
        },
    };
</script>
