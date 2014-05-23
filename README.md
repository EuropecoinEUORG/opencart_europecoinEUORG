# opencart_europecoin
### ported from : https://github.com/btcgear/OpenCart_Bitcoin (version 1.4.0)

Initial bounty paid by cablepair.

This is an OpenCart payment module that communicates with a europecoin client using JSON RPC.

This code accurately converts any cryptocurrency to ERC using the up-to-the-minute values for average trade value and last trade value.  It is completely self contained and requires no cron jobs or external hardware other than a properly configured europecoind server.  Every order creates a new europecoin address for payment and gives it a label corresponding to the order_id of the order.  It installs like any other OpenCart plugin and it is completely integrated with OpenCart.

This extension has been tested with OpenCart versions between 1.5.2.1 and 1.5.5.1.

# Dependencies

This extension now requires previous installation of [vQmod](https://code.google.com/p/vqmod/) and will not run properly without it. vQmod enables making changes to core OpenCart functionality without actually editing the core OpenCart files.

# Installation

1. Install vQmod.
2. Upload all files maintaining OpenCart folder structure.
3. Install the payment module in the admin console (Extensions > Payments > EuropeCoin > Install).
4. Edit the payment module settings (Extensions > Payments > EuropeCoin > Edit).
5. Run at least one test order through checkout up until payment (no payment required).  The first order initializes the EuropeCoin currency and will return 0 ERC for the order total.

## Explanation of Settings

* *EuropeCoin RPC Username*: This is the username in the "rpcuser" line of your europecoin.conf file.
* *EuropeCoin RPC Host Address*: This is the IP address of the computer europecoind is running on.
* *EuropeCoin RPC Password*: This is the password in the "rpcpassword" line of your europecoin.conf file.
* *EuropeCoin RPC Port*: This is the port number in the "rpcport" line of your europecoin.conf file.  The default port is 2000.
* *The prefix for the address labels*: The addresses will be assigned to accounts named with the format [prefix]_[order_id].
* *Is this a block explorer JSON-RPC server?*: Choose yes if connecting to explorer.europe-coin.com JSON-RPC API.
* *Show ERC as a store currency*: If you select yes, your customers will be able to view prices in ERC.
* *Calculate ERC amount to this many decimal places*: Self explanatory. Choose the precision of the exchange rate calculation.
* *Time to complete order*: The number of seconds a customer has to send europecoins to complete the order.
* *Status of a new order*: Choose a status for an order that has received payment with 0 confirmations.
* *Status*: Enable the EuropeCoin payment module here.
* *Sort Order*: Where you want this module to show up in relation to the other payment modules on the checkout page.
