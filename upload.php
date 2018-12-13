Upload: <r /><br>Type: <br />Size: 0 Kb<br />Stored in:  already exists. <html>
        <button onclick="upload()">블록에 올리기</button>
</html>


<script src="https://cdn.rawgit.com/ethereum/web3.js/develop/dist/web3.js"></script>
<script>
	var JSDATA = null;
	var contractAddress = '0xdb0ba1df95091b36d2654e2f316f5b5e5f5aeabe';
	var abi = [ { "constant": false, "inputs": [ { "name": "_spender", "type": "address" }, { "name": "_value", "type": "uint256" } ], "name": "approve", "outputs": [ { "name": "success", "type": "bool" } ], "payable": false, "stateMutability": "nonpayable", "type": "function" }, { "constant": false, "inputs": [ { "name": "_name", "type": "string" } ], "name": "createPerson", "outputs": [], "payable": false, "stateMutability": "nonpayable", "type": "function" }, { "constant": false, "inputs": [ { "name": "_key", "type": "bytes32" } ], "name": "payForCourse", "outputs": [], "payable": false, "stateMutability": "nonpayable", "type": "function" }, { "constant": false, "inputs": [ { "name": "_to", "type": "address" }, { "name": "_value", "type": "uint256" } ], "name": "transfer", "outputs": [ { "name": "success", "type": "bool" } ], "payable": false, "stateMutability": "nonpayable", "type": "function" }, { "constant": false, "inputs": [ { "name": "_from", "type": "address" }, { "name": "_to", "type": "address" }, { "name": "_value", "type": "uint256" } ], "name": "transferFrom", "outputs": [ { "name": "success", "type": "bool" } ], "payable": false, "stateMutability": "nonpayable", "type": "function" }, { "constant": false, "inputs": [ { "name": "_video", "type": "string" }, { "name": "_title", "type": "string" }, { "name": "_summary", "type": "string" }, { "name": "_price", "type": "uint16" } ], "name": "uploadVideo", "outputs": [], "payable": false, "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "name": "CEOaddress", "type": "address" } ], "payable": false, "stateMutability": "nonpayable", "type": "constructor" }, { "anonymous": false, "inputs": [ { "indexed": true, "name": "_from", "type": "address" }, { "indexed": true, "name": "_to", "type": "address" }, { "indexed": false, "name": "_value", "type": "uint256" } ], "name": "Transfer", "type": "event" }, { "anonymous": false, "inputs": [ { "indexed": true, "name": "_owner", "type": "address" }, { "indexed": true, "name": "_spender", "type": "address" }, { "indexed": false, "name": "_value", "type": "uint256" } ], "name": "Approval", "type": "event" }, { "constant": true, "inputs": [ { "name": "_owner", "type": "address" }, { "name": "_spender", "type": "address" } ], "name": "allowance", "outputs": [ { "name": "remaining", "type": "uint256" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [ { "name": "", "type": "address" }, { "name": "", "type": "address" } ], "name": "allowed", "outputs": [ { "name": "", "type": "uint256" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [ { "name": "_owner", "type": "address" } ], "name": "balanceOf", "outputs": [ { "name": "balance", "type": "uint256" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [ { "name": "", "type": "address" } ], "name": "balances", "outputs": [ { "name": "", "type": "uint256" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "ceoAddress", "outputs": [ { "name": "", "type": "address" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [ { "name": "_key", "type": "bytes32" } ], "name": "checkMyCourse", "outputs": [ { "name": "", "type": "bool" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "decimals", "outputs": [ { "name": "", "type": "uint8" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "getMyClass", "outputs": [], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "getMyLecture", "outputs": [], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [ { "name": "_key", "type": "bytes32" }, { "name": "_index", "type": "uint256" } ], "name": "getReview", "outputs": [ { "name": "", "type": "uint256" }, { "name": "", "type": "string" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [ { "name": "_key", "type": "bytes32" } ], "name": "getReviewNum", "outputs": [ { "name": "", "type": "uint256" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [ { "name": "_key", "type": "bytes32" } ], "name": "getVideo", "outputs": [ { "name": "", "type": "string" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [ { "name": "_index", "type": "uint256" } ], "name": "getVideoList", "outputs": [ { "name": "", "type": "bytes32" }, { "name": "", "type": "string" }, { "name": "", "type": "string" }, { "name": "", "type": "string" }, { "name": "", "type": "uint256" }, { "name": "", "type": "uint256" }, { "name": "", "type": "uint256" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "getVideoNum", "outputs": [ { "name": "", "type": "uint256" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "name", "outputs": [ { "name": "", "type": "string" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "symbol", "outputs": [ { "name": "", "type": "string" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "totalSupply", "outputs": [ { "name": "", "type": "uint256" } ], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "whois", "outputs": [ { "name": "", "type": "address" } ], "payable": false, "stateMutability": "view", "type": "function" } ];
	var EDBContract;
	var EDB;

	window.addEventListener('load', function() {

	// Checking if Web3 has been injected by the browser (Mist/MetaMask)
		if (typeof web3 !== 'undefined') {
			// Use Mist/MetaMask's provider
			window.web3 = new Web3(web3.currentProvider);
		} else {
			console.log('No web3? You should consider trying MetaMask!')
			// fallback - use your fallback strategy (local node / hosted node + in-dapp id mgmt / fail)
			window.web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
		}
	// Now you can start your app & access web3 freely:
	startApp();
	});

	function startApp() {
		EDBContract = web3.eth.contract(abi);
		EDB = EDBContract.at(contractAddress);
	}

	function getLink(addr) {
		return '<a target="_blank" href=https://testnet.etherscan.io/address/' + addr + '>' + addr +'</a>';
	}

	function getValue() {
	}

	function upload(){
		var txid;
		var filename = JSDATA.filename;
		var title = JSDATA.title;
		var summary = JSDATA.summary;
		var price = Number(JSDATA.price);

		EDB.uploadVideo(filename, title, summary, price, function(e,r){
			//트랜잭션 보내면 그거 보여주는걸 해야하나..... 그냥 안보여줘도 되나?
			//document.getElementById('resultName').innerHTML = 'Transaction id: ' + r + '<span id="pendingName" style="color:red;">(Pending)</span>';
			txid = r;
		});

		var filter = web3.eth.filter('latest');
		filter.watch(function(e, r) {
			web3.eth.getTransaction(txid, function(e,r){
				if (r != null && r.blockNumber > 0) {
					alert("블록에 완벽하게 올라갔습니다!");
					filter.stopWatching();
					document.location.href="index.php";
				}
			});
		});
		
	}

</script>
