require('../css/main.scss');
// import { gsap } from 'gsap';

// import './vendor/jquery.min.js';
// window.$ = $;
// window.jQuery = jQuery;
// var jquery = jQuery;

// console.log(jQuery)
// import './vendor/bootstrap.min.js';


// import './vendor/popper.min.js';
// import './vendor/owl.carousel.js';
// import './vendor/navigation.js';
// import './vendor/navigation.fixed.js';
// import './vendor/wow.min.js';
// import './vendor/jquery.counterup.min.js';
// import './vendor/waypoints.min.js';
// import './vendor/switcher.js';
// import './vendor/modernizr.js';
// import './vendor/main.js';

window.onload = e => { 

	header_fix();
	const popin_download = new popin_img('.download-page .swiper-slide');



};


// POPIN


class popin_img {

  constructor(imgs) {
    this.clickHandler = this.clickHandler.bind(this)

  	setTimeout( e=> {
    	this.els = [...document.querySelectorAll(imgs)];
    	this.start();
  	},200) // Wait swiper is load

  	this.open = false;

  }

  start(){

  	for (var i = 0; i < this.els.length; i++) {
  		var el = this.els[i];
  		el.addEventListener('click',this.clickHandler);
  	}

  }

  clickHandler(e){
  	e.preventDefault();

  	var src = e.target.src;

  	this.create_popin(src)

  	if( !this.open ){

  	}


  }

  create_popin(src){
  	var popin = document.createElement("div"); 
  	popin.classList.add('img-popin')

  	var img = document.createElement("img"); 
  	img.src = src;
  	popin.appendChild(img);

  	var close = document.createElement("span"); 
  	close.classList.add('close')
  	close.innerHTML = 'Close';
  	popin.appendChild(close);

  	document.body.appendChild(popin);


  	setTimeout(e=>{
  		popin.classList.add('show')
  	},100)

  	this.el_popin = popin;

  	this.kill_popin();

  }

  kill_popin(){
  	this.el_popin.addEventListener('click', e=>{

  		this.el_popin.classList.add('hide')

  		setTimeout(e=>{
  			this.el_popin.remove();
  		},300)

  	});
  }


}







// HEADER

function header_fix(){

	this.header = document.querySelector('header');
	this.headerMin = false;
	tick();
	detect_scroll();

}

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

// HEADER

