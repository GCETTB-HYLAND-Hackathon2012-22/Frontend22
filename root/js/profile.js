(() =>{
	const cc2 = document.querySelector(".cc2"),
	tabsContainer = document.querySelector(".about-tabs");
	
	tabsContainer.addEventListener("click", (event) =>{
	if(event.target.classList.contains("tab-item") && !event.target.classList.contains("active")){
		const target = event.target.getAttribute("data-target");
		tabsContainer.querySelector(".active").classList.remove("outer-shadow", "active");
		event.target.classList.add("active", "outer-shadow");
		cc2.querySelector(".tab-content.active").classList.remove("active");
		cc2.querySelector(target).classList.add("active");
		}
	})
})();