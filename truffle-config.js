/**
 * Truffle configuration
 *
 * @see https://github.com/trufflesuite/truffle-config/blob/master/index.js
 * @see https://github.com/trufflesuite/truffle/releases
 */
const HDWalletProvider = require('truffle-hdwallet-provider');

module.exports = {

    solc: {
        optimizer: {
            enabled: true,
            runs: 200
        }
    },
    networks: {
        develop: {
            port: 8545
        },
        /*
        ropsten: {
            provider: new HDWalletProvider("d0b1a82345eb5624494c984df1a942a53e1a9583a6376951ed539c28dcb2aad8", "https://ropsten.infura.io/"),
            network_id: 3,
            gasPrice: 10000000000,
            gas: 4712394
        }*/
    },
    compilers: {
        solc: {
            version: '0.5.12',
            docker: false,
            optimizer: {
                enabled: true,
                runs: 400
            }
        }
    }
};
