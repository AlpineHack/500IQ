pragma solidity >=0.4.21 <0.6.0;

import "openzeppelin-solidity/contracts/token/ERC20/ERC20.sol";

contract TutorialToken is ERC20 {
    string public name = "PowerMetter energy token";
    string public symbol = "NRG";
    uint public decimals = 2;
    uint public INITIAL_SUPPLY = 1000000;

    constructor() public {
        _mint(msg.sender, INITIAL_SUPPLY);
    }
}
