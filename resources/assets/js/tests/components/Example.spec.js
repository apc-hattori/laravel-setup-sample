const assert = require('power-assert');
const sinon = require('sinon');

const Vue = require('vue');
const Example = require('../../components/Example.vue');

describe('Example', () => {
    beforeEach(() => {
        sinon.spy(console, 'log');
    });

    afterEach(() => {
        console.log.restore();
    });

    it('has a mounted hook', () => {
        assert(typeof Example.mounted === 'function');
    });

    it('when mounted', () => {
        new Vue(Example).$mount();
        // sinonによる呼び出し確認
        assert(console.log.calledOnce);
        assert(console.log.getCall(0).args[0] === 'Component mounted.');
    });
});
