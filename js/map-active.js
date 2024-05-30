   const address = document.querySelector(".address");
   address.innerHTML = "House# 503(1st Floor), Road# 9"; 
	console.log(address);
	function makeMapResponsive() {
		var maps = document.querySelectorAll('.map-container iframe');
		for (var i = 0; i < maps.length; i++) {
		  maps[i].style.height = maps[i].offsetWidth * 0.75 + 'px';
		}
	  }
	  window.addEventListener('resize', makeMapResponsive);
	  makeMapResponsive();
	