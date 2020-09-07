const currentLocation=location.href;
const menuItem=document.querySelectorAll('a');
const menuLength=menuItem.length;
console.log(currentLocation);
for( let i=0;i<menuLength ; i++){
	if(menuItem[i].href===currentLocation){
	menuItem[i].className="active"
}

}

