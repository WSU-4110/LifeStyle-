pragma solidity ^0.5.11;


import "contracts/Owned.sol";
import "contracts/libraries/StringUtils.sol";
import "contracts/interfaces/LIFETokenInterface.sol";
import "contracts/storage/LIFEStorage.sol";
import "contracts/libraries/SafeMath.sol";
import "contracts/interfaces/LIFEStakingInterface.sol";

contract LIFEStaking is LIFEStakingInterface {

    using SafeMath for uint256;

    Owned private owned;

    LIFEStorage _storage;

    address private LIFEToken;

    address private upgradedContract;

    uint256 blockAttack = 0;

    mapping(string => uint256) private actions;

    modifier onlyOwner() {
        require(msg.sender == owned.getOwner());
        _;
    }

    modifier hatch() {

        require(blockAttack == 0);
        _;

    }

    function tokenFallback(address _from, uint _value, bytes _data) public {
        
        require(msg.sender != address(0));    
    
        require(msg.sender == LIFEToken);

        require(_storage != LIFEStorage(0));

        _storage.increaseStakedLIFEBalance(_from, _value);
      
        FallbackData(_data);
    
    }

    function transfer(address _to, uint256 _value, bytes _data) public returns (bool) {
    
        require(_to == LIFEToken);
        require(_value <= _storage.getStakedBalance(msg.sender));
        require(_storage != LIFEStorage(0));

        if (_to != address(0) && _to == LIFEToken) {

          LIFETokenInterface receiver = LIFETokenInterface(_to);
          receiver.tokenFallback(msg.sender, _value, _data);

          _storage.decreaseStakedLIFEBalance(msg.sender, _value);

          Transfer(msg.sender, _to, _value, _data);
        
          return true;

        } else if (_to != address(0) && _to == upgradedContract) {

            LIFEStakingInterface upgrade = LIFEStakingInterface(_to);
            upgrade.tokenFallback(msg.sender, _value, _data);

            _storage.decreaseStakedLIFEBalance(msg.sender, _value);

            Upgraded(msg.sender, _value);

            return true;

        }

    }

    function LIFEStaking(address _token, address _owned) {
        
        LIFEToken = _token;
        owned = Owned(_owned);
        
    }

     function allowUpgrade(address _upgradeAddr) public onlyOwner {

        upgradedContract = _upgradeAddr;

    }

    function() payable {

        revert();

    }



    function changeOwned(address _owned) public onlyOwner {

        owned = Owned(_owned);

    }

    function changeActionCost(string _action, uint256 tokenAmount) public onlyOwner {

        actions[_action] = tokenAmount;

    }

    function changeLIFEStorage(address _storageAddr) public onlyOwner {

        _storage = LIFEStorage(_storageAddr);

    }

    function deleteAction(string _action) public onlyOwner {

        actions[_action] = 0;

    }

    function addAction(string actionName, uint256 cost) public onlyOwner {

        actions[actionName] = cost;

    }

    function changeTokenAddress(address _token) public onlyOwner {

        LIFEToken = _token;

    }
    
    function balanceOf(address _owner) public constant returns (uint256 balance) {
      return _storage.getStakedBalance(_owner);
    }

    function tipUser(address _to, uint256 _amount) public hatch {

        require(_storage.getStakedBalance(msg.sender) >= _amount);
        require(_amount > 0 && _amount <= 10);
        require(_storage != LIFEStorage(0));

        _storage.decreaseStakedLIFEBalance(msg.sender, _amount);

        _storage.increaseStakedLIFEBalance(_to, _amount);

        Tipped(msg.sender, _to, _amount);

    }

    function interactWithLIFE(string _action) public hatch {

        require(actions[_action] > 0);
        require(_storage != LIFEStorage(0));
        require(_storage.getStakedBalance(msg.sender) > actions[_action]);

        _storage.decreaseStakedLIFEBalance(msg.sender, actions[_action]);

        MadeAnAction(msg.sender, _action, actions[_action]);

    }

    function escapeHatch() public onlyOwner {

        if (blockAttack == 0) {

            blockAttack = 1;

        } else {

            blockAttack = 0;

        }
            
    }

}