pragma solidity ^0.5.11;



contract DynamicCrowdsaleInterface {

    //Change the owner of the contract
    function changeOwned(address _owned) public;

    //Add a milestone to decrease the max amount of ether per investment
    function addMilestone(uint256 blockNR, uint256 investment) public;

    //Delete an ether milestone
    function deleteMilestone(uint256 position) public;

    //Check if we allow the investment in the current milestone
    function allowedInvestment(uint256 totalWei) public view returns (uint256);

    //Get current milestone
    function getCurrentStage() public view returns (uint256);

    //Called by owner; changing milestones
    function setCurrentStage(uint256 stage) public;

    //Get the max investment available in the current milestone
    function getCurrentMaxInvestment() public view returns (uint256);

}