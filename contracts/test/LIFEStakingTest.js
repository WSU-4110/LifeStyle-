let Owned = artifacts.require('contracts/Owned.sol');
let LIFEToken = artifacts.require('contracts/LIFEToken.sol');
let LIFEStorage = artifacts.require('contracts/storage/LIFEStorage.sol');
let LIFEStaking = artifacts.require('contracts/storage/LIFEStaking.sol');
let TokenController = artifacts.require('contracts/TokenController.sol');

const assertFail = require("./helpers/assertFail");

contract('LIFEStaking', function(accounts) {

    let owned;
    let LIFEStorage;
    let token;
    let controller;
    let staking;

    const tokenAmount = 30 * 10 ** 18;

    beforeEach(async () => {

        owned = await Owned.new({from: accounts[0]});

        LIFEStorage = await LIFEStorage.new(Owned.address, {from: accounts[0]});

        token = await LIFEToken.new(owned.address, tokenAmount, {from: accounts[0]});

        controller = await TokenController.new(token.address, owned.address, {from: accounts[0]});        

        staking = await LIFEStaking.new(token.address, owned.address, {from: accounts[0]});

        await LIFEStorage.addContract(staking.address, {from: accounts[0]});

        await LIFEStorage.addContract(token.address, {from: accounts[0]});

        await token.changeController(controller.address, {from: accounts[0]});

        await token.changeLIFEStorage(LIFEStorage.address, {from: accounts[0]});        

        await staking.changeLIFEStorage(LIFEStorage.address, {from: accounts[0]});

        await token.enableStaking(staking.address, {from: accounts[0]});

        await token.addToBalance(accounts[1], 100, {from: accounts[0]});

        await token.increaseCirculation(100, {from: accounts[0]});

        await token.transfer(staking.address, 50, "Sent", {from: accounts[1], gas: 1000000});

    });

    it("Users can tip staked tokens (maximum 10 LIFE per tip)", async function() {

        await assertFail(async function() {
            await staking.tipUser(accounts[2], 11, {from: accounts[1]});
        });

        await staking.tipUser(accounts[2], 10, {from: accounts[1]});

        assert.equal(await staking.balanceOf(accounts[2]), 10);

    });

    it("Interact with LIFE", async function() {

        await staking.changeActionCost("COMMENT",1, {from: accounts[0]});

        await staking.changeActionCost("VOTE",5, {from: accounts[0]});

        await staking.changeActionCost("POST",10, {from: accounts[0]});

        await staking.interactWithLIFE("COMMENT", {from: accounts[1]});

        await staking.interactWithLIFE("VOTE", {from: accounts[1]});

        await staking.interactWithLIFE("POST", {from: accounts[1]});

        assert.equal(await staking.balanceOf(accounts[1]), 34);

    });

}); 
