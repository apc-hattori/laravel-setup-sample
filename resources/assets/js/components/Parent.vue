<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Parent Component</div>

                    <div class="panel-body">
                        {{ message }}
                        <child1></child1>
                        <child2></child2>
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
            return store.parent;
        },
    };
</script>
