module.exports = {
    example: {
        message: 'I\'m an example component!',
    },
    parent: {
        message: 'Parent',
    },
    child1: {
        name: 'Child1',
    },
    items: {
        friends: [
            { name: '太郎', age: 25 },
            { name: '花子' },
            { age: 99 },
            { name: 'おじいちゃん', age: '長生き' },
        ],
        addFriend ({ name, age }) {
            if (name === '') {
                name = undefined;
            }
            let effectiveAge = parseInt(age);
            if (isNaN(effectiveAge)) {
                effectiveAge = age || undefined;
            }
            this.friends.push({ name, age: effectiveAge });
        },
    },
};
