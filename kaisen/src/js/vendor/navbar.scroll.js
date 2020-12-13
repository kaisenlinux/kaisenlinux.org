

window.addEventListener("DOMContentLoaded", (event) => {
	this.header = document.querySelector('header');
	this.headerMin = false;
	tick();
	detect_scroll();
});



let scroll=0;

window.addEventListener("scroll", e=>{
    scroll = window.scrollY;
});



function tick() {
  
	if(scroll != this.lastScroll){
		headerHeight();
		detect_scroll()

		this.lastScroll = scroll
	}


  requestAnimationFrame(tick);
}


function headerHeight(){

	if(!this.stickyOffset){
	 	this.stickyOffset = this.header.clientHeight;
	}

}


function detect_scroll(){


	if( scroll >= this.stickyOffset && !this.headerMin ){
		this.header.classList.add('fix')		
		this.headerMin = true;
	}
	if( scroll < this.stickyOffset && this.headerMin ){
		this.header.classList.remove('fix')		
		this.headerMin = false;
	}


}


