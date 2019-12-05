pragma solidity ^0.5.11;



import "contracts/interfaces/ERC223.sol";

contract LifeTokenInterface is ERC223 {

    //Change the controller which assigns tokens from the campaign
    function changeController(address _controller) public;

    //Change the storage where we manage unstaked SPN
    function changeLIFEStorage(address _storageAddr) public;

    /** 
    * Allow people to start staking tokens
    */
    function enableStaking(address _stake) public;

    /**
    *@dev Disable staking in case of attack/vulnerability/etc
    */
    function disableStaking() public;

    //Called by the TokenController; assigning tokens to an address
    function addToBalance(address _to, uint256 _amount) public;

    //After we assign tokens, we increase the total amount of tokens which are available on the market
    function increaseCirculation(uint256 _amount) public;

    //function that is called when transaction target is an address
    function transferToAddress(address _to, uint _value, bytes _data) internal returns (bool success);


}