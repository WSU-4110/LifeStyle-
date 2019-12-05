let TokenController = artifacts.require('contracts/TokenController.sol');
let Owned = artifacts.require('contracts/Owned.sol');
let LIFEToken = artifacts.require('contracts/LIFEToken.sol');
let LIFECrowdsale = artifacts.require('contracts/LIFECrowdsale.sol');
let LIFEStorage = artifacts.require('contracts/storage/LIFEStorage.sol');

const assertFail = require("./helpers/assertFail");

contract('TokenController', function(accounts) {

    let owned;
    let LIFEStorage;
    let token;
    let controller;

    const tokenAmount = 30 * 10 ** 18;

    beforeEach(async () => {

        owned = await Owned.new({from: accounts[0]});

        LIFEStorage = await LIFEStorage.new(Owned.address, {from: accounts[0]});

        token = await LIFEToken.new(owned.address, tokenAmount, {from: accounts[0]});

        controller = await TokenController.new(token.address, owned.address, {from: accounts[0]});

        await LIFEStorage.addContract(token.address, {from: accounts[0]});

        await token.changeController(controller.address, {from: accounts[0]});

        await token.changeLIFEStorage(LIFEStorage.address, {from: accounts[0]});        

    });


    it("Only owner can do certain actions", async function() {

        await assertFail(async function() {
            await controller.changeLIFEToken(accounts[2], {from: accounts[1]});
        });

        await assertFail(async function() {
            await controller.changeOwned(accounts[1], {from: accounts[1]});
        });

        await assertFail(async function() {
            await controller.changeCrowdsale(accounts[2], {from: accounts[1]});
        });

    });

    it("Owner can allocate tokens", async function() {

        await controller.allocateTokens(accounts[1], 100, {from: accounts[0]});

        let circulation = await token.currentlyInCirculation.call();

        assert.equal(100, circulation);

        assert.equal(100, await token.balanceOf(accounts[1]));

    });

});