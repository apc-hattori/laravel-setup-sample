<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Items Component</div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item" v-for="friend in items.friends">
                                <item-friend
                                    :name="friend.name" :age="friend.age"
                                    @remove="removeFriend(friend)"
                                    ></item-friend>
                            </li>
                        </ul>
                        <input v-model="inputName" placeholder="name" />
                        <input v-model="inputAge" placeholder="age" />
                        <button @click="addFriend"><i class="glyphicon glyphicon-save"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    const store = require('../store');
    const localStore = {
        items: store.items,
        inputName: '',
        inputAge: '',
    };

    export default {
        data () {
            return localStore;
        },
        methods: {
            addFriend () {
                store.items.addFriend({
                    name: localStore.inputName,
                    age: localStore.inputAge,
                });
                localStore.inputName = '';
                localStore.inputAge = '';
            },
            removeFriend (friend) {
                store.items.friends = store.items.friends.filter(f => f !== friend);
            },
        },
    };
</script>
