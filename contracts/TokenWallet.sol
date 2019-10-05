pragma solidity >=0.4.21 <0.6.0;

contract TokenWallet {
    uint registerId = 0;
    struct Token {
        uint id;
    }

    Token[] public tokens;

    mapping (uint => address) public tokenToOwner;
    mapping (address => uint) ownerTokenCount;

    function createToken() public {
        registerId++;
        uint id = tokens.push(Token(registerId)) - 1;
        tokenToOwner[id] = msg.sender;
        ownerTokenCount[msg.sender]++;
    }
    function spendToken(address _destination, uint _number) public {
        require(ownerTokenCount[msg.sender] >= _number);
        ownerTokenCount[msg.sender] -= _number;
        ownerTokenCount[_destination] += _number;
    }
    function getToken() public returns (uint) {
        return getTokenFromAddress(msg.sender);
    }
    function getTokenFromAddress(address _address) public returns (uint) {
        return ownerTokenCount[_address];
    }
}
