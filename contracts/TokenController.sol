pragma solidity ^0.5.11;

import "contracts/Owned.sol";
import "contracts/LIFEToken.sol";
import "contracts/interfaces/LIFETokenInterface.sol";
import "contracts/interfaces/TokenControllerInterface.sol";

contract TokenController is TokenControllerInterface {

    LIFETokenInterface private LIFEToken;
    Owned private owned;

    address private crowdsale;

    modifier acceptedOwners() {
        require(msg.sender == owned.getOwner() || crowdsale == msg.sender);
        _;
    }

    modifier onlyOwner() {

        require(msg.sender == owned.getOwner());
        _;

    }

    function TokenController(address _LIFE, address _owned) {

        LIFEToken = LIFETokenInterface(_LIFE);
        owned = Owned(_owned);
    
    }

    function() payable {

        revert();

    }

    function changeLIFEToken(address _LIFE) public onlyOwner {

        LIFEToken = LIFETokenInterface(_LIFE);

    }

    function changeOwned(address _owned) public onlyOwner {

        owned = Owned(_owned);

    }

    function changeCrowdsale(address _crowdsale) public onlyOwner {

        crowdsale = _crowdsale;

    }

    function allocateTokens(address _to, uint256 _amount) public acceptedOwners returns (bool) {
        LIFEToken.increaseCirculation(_amount);
        LIFEToken.addToBalance(_to, _amount);
        Allocate(_to, _amount);
        return true;
    }

}