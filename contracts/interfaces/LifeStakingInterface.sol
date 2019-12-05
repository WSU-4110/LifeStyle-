pragma solidity ^0.5.11;

import "contracts/interfaces/BaseERC223.sol";

contract LIFEStakinginterface is BaseERC223 {

    event Tipped(address _from, address _to, uint256 _amount);
    event MadeAnAction(address who, string action, uint256 amount);

    /**
    * Life has different actions which can be pero=formed by users
    * here the contract owner sets the LIFE cost for each action
    */
    function changeActionCost(string _action, uint256 tokenAmount) public;

    //Change the storage where we manage staked tokens
    function changeLIFEStorage(address _storageAddr) public;

    //Eliminate action from LIFE
    function deleteAction(string _action) public;

    //Add an action to LIFE
    function addAction(string actionName, uint256 cost) public;

    //Change the address of the contract where we manage unstaked tokens
    function changeTokenAddress(address _token) public;

    //Tip a user on the platform with staked LIFE
    function tipUser(address _to, uint256 _amount) public;

    //Called when user does something on the platform (comment, post, vote etc)
    function interactWithLIFE(string _action) public;

}