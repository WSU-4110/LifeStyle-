pragma solidity ^0.5.11;

import "contracts/interfaces/BaseERC223.sol";

contract ERC223 is BaseERC223 {

    //Change the owner of the contract
    function changeOwned(address _owned) public;

    // Function to access name of token .
    function name() public view returns (string _name);

    // Function to access symbol of token .
    function symbol() public view returns (string _symbol);

    // Function to access decimals of token .
    function getDecimals() public view returns (uint256 _decimals);

    // Function to access total supply of tokens .
    function getTotalSupply() public view returns (uint256);

    //Check if an address is from a contract
    function isContract(address _addr) private view returns (bool is_contract);

    /**
    * @dev Gets the balance of the specified address.
    * @param _owner The address to query the the balance of.
    * @return An uint256 representing the amount owned by the passed address.
    */
    function balanceOf(address _owner) public view returns (uint256 balance);

    function escapeHatch() public;

}